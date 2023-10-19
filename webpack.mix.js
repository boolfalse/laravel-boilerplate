const mix = require('laravel-mix');
const HtmlWebpackPlugin = require('html-webpack-plugin');
const pages = require('./webpack-pages');
const vendors = require('./webpack-vendors');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 */
const mixBuild = process.env.MIX_BUILD || 'mix';

if (mixBuild === 'dist') {
    mix.sass('resources/dashboard/assets/sass/boolfalse.scss', 'dist/css')
        .js('resources/dashboard/assets/scripts/boolfalse.js', 'dist/js')
        .setPublicPath('dist');
} else {
    let googleAnalytics = (mix.inProduction()) ? true : false;

    mix.sass('resources/dashboard/assets/sass/boolfalse.scss', 'dashboard/assets/css/')
        .js('resources/dashboard/assets/scripts/boolfalse.js', 'dashboard/assets/scripts/')
        .setPublicPath('public')
        .setResourceRoot('../../')
        .sourceMaps()
        .browserSync({
            proxy: 'boolfalse.test',
            files: ['public/**/*.html', 'public/dashboard/assets/css/**/*.css', 'public/dashboard/assets/scripts/**/*.js']
        })
        .copyDirectory('resources/dashboard/assets/img', 'public/dashboard/assets/img')
        .copyDirectory('node_modules/font-awesome/fonts', 'public/dashboard/assets/fonts/vendor/font-awesome')
        .copyDirectory('node_modules/themify-icons-scss/fonts', 'public/dashboard/assets/fonts/vendor/themify-icons-scss')
        .webpackConfig({
            plugins: [
                ...pages.map(page => {
                    let sub2 = (page.submenu2 != 'undefined') ? page.submenu2 : '';

                    return new HtmlWebpackPlugin({
                        title: page.title,
                        template: '!!ejs-compiled-loader!'+page.template,
                        filename: 'dashboard/'+page.filename,
                        topmenu: page.topmenu,
                        submenu: page.submenu,
                        submenu2: sub2,
                        analytics: googleAnalytics,
                        inject: false,
                    })
                })
            ]
        });

    // Fonts path
    mix.config.fileLoaderDirs.fonts = 'assets/fonts';

    /*
     |--------------------------------------------------------------------------
     | Pages Assets
     |--------------------------------------------------------------------------
     */
    // Dashboard
    mix.styles([
        'node_modules/apexcharts/dist/apexcharts.css',
    ], 'public/dashboard/assets/css/pages/dashboard1.css')
        .scripts([
            'node_modules/apexcharts/dist/apexcharts.js',
            'resources/dashboard/assets/scripts/pages/dashboard1.js'
        ], 'public/dashboard/assets/scripts/pages/dashboard1.js');

    // Date & Time Picker
    mix.styles([
        'node_modules/bootstrap-datepicker/dist/css/bootstrap-datepicker3.min.css',
        'node_modules/bootstrap-timepicker/css/bootstrap-timepicker.min.css'
    ], 'public/dashboard/assets/css/pages/cp_datetime.css')
        .scripts([
            'node_modules/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js',
            'node_modules/bootstrap-timepicker/js/bootstrap-timepicker.min.js',
            'resources/dashboard/assets/scripts/pages/cp_datetime.js'
        ], 'public/dashboard/assets/scripts/pages/cp_datetime.js');

    // Bootstrap Cards
    mix.js('resources/dashboard/assets/scripts/pages/ui_card.js', 'dashboard/assets/scripts/pages');

    // Bootstrap Modals
    mix.js('resources/dashboard/assets/scripts/pages/ui_modal.js', 'dashboard/assets/scripts/pages');

    // Toastr
    mix.js('resources/dashboard/assets/scripts/pages/ui_toastr.js', 'dashboard/assets/scripts/pages');

    // Datatables
    mix.js('resources/dashboard/assets/scripts/pages/tb_datatables.js', 'dashboard/assets/scripts/pages');

    // Form Control
    mix.js('resources/dashboard/assets/scripts/pages/fm_control.js', 'dashboard/assets/scripts/pages');

    // CKEditor
    mix.scripts([
        'node_modules/@ckeditor/ckeditor5-build-classic/build/ckeditor.js',
        'resources/dashboard/assets/scripts/pages/fm_ckeditor_classic.js'
    ], 'public/dashboard/assets/scripts/pages/fm_ckeditor_classic.js')
        .scripts([
            'node_modules/@ckeditor/ckeditor5-build-balloon/build/ckeditor.js',
            'resources/dashboard/assets/scripts/pages/fm_ckeditor_balloon.js'
        ], 'public/dashboard/assets/scripts/pages/fm_ckeditor_balloon.js')
        .scripts([
            'node_modules/@ckeditor/ckeditor5-build-balloon-block/build/ckeditor.js',
            'resources/dashboard/assets/scripts/pages/fm_ckeditor_block.js'
        ], 'public/dashboard/assets/scripts/pages/fm_ckeditor_block.js')
        .scripts([
            'node_modules/@ckeditor/ckeditor5-build-inline/build/ckeditor.js',
            'resources/dashboard/assets/scripts/pages/fm_ckeditor_inline.js'
        ], 'public/dashboard/assets/scripts/pages/fm_ckeditor_inline.js')
        .scripts([
            'node_modules/@ckeditor/ckeditor5-build-decoupled-document/build/ckeditor.js',
            'resources/dashboard/assets/scripts/pages/fm_ckeditor_document.js'
        ], 'public/dashboard/assets/scripts/pages/fm_ckeditor_document.js');

    // Apex Charts
    mix.js('resources/dashboard/assets/scripts/pages/ch_apexcharts.js', 'dashboard/assets/scripts/pages');

    // Login page
    mix.js('resources/dashboard/assets/scripts/pages/pg_login.js', 'dashboard/assets/scripts/pages');

    /*
     |--------------------------------------------------------------------------
     | Vendors Assets
     |--------------------------------------------------------------------------
     */
    vendors.forEach(vendor => {
        let ext = path.extname(vendor.src.toLowerCase());

        if (ext === '.css') {
            mix.styles(vendor.src, vendor.out);
        }

        if (ext === '.js') {
            mix.scripts(vendor.src, vendor.out);
        }
    });

}

// Full API
// mix.js(src, output);
// mix.react(src, output); <-- Identical to mix.js(), but registers React Babel compilation.
// mix.preact(src, output); <-- Identical to mix.js(), but registers Preact compilation.
// mix.coffee(src, output); <-- Identical to mix.js(), but registers CoffeeScript compilation.
// mix.ts(src, output); <-- TypeScript support. Requires tsconfig.json to exist in the same folder as webpack.mix.js
// mix.extract(vendorLibs);
// mix.sass(src, output);
// mix.less(src, output);
// mix.stylus(src, output);
// mix.postCss(src, output, [require('postcss-some-plugin')()]);
// mix.browserSync('my-site.test');
// mix.combine(files, destination);
// mix.babel(files, destination); <-- Identical to mix.combine(), but also includes Babel compilation.
// mix.copy(from, to);
// mix.copyDirectory(fromDir, toDir);
// mix.minify(file);
// mix.sourceMaps(); // Enable sourcemaps
// mix.version(); // Enable versioning.
// mix.disableNotifications();
// mix.setPublicPath('path/to/public');
// mix.setResourceRoot('prefix/for/resource/locators');
// mix.autoload({}); <-- Will be passed to Webpack's ProvidePlugin.
// mix.webpackConfig({}); <-- Override webpack.config.js, without editing the file directly.
// mix.babelConfig({}); <-- Merge extra Babel configuration (plugins, etc.) with Mix's default.
// mix.then(function () {}) <-- Will be triggered each time Webpack finishes building.
// mix.override(function (webpackConfig) {}) <-- Will be triggered once the webpack config object has been fully generated by Mix.
// mix.dump(); <-- Dump the generated webpack config object to the console.
// mix.extend(name, handler) <-- Extend Mix's API with your own components.
// mix.options({
//   extractVueStyles: false, // Extract .vue component styling to file, rather than inline.
//   globalVueStyles: file, // Variables file to be imported in every component.
//   processCssUrls: true, // Process/optimize relative stylesheet url()'s. Set to false, if you don't want them touched.
//   purifyCss: false, // Remove unused CSS selectors.
//   terser: {}, // Terser-specific options. https://github.com/webpack-contrib/terser-webpack-plugin#options
//   postCss: [] // Post-CSS options: https://github.com/postcss/postcss/blob/master/docs/plugins.md
// });
