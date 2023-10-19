<?php

use Illuminate\Support\Facades\Route;



Route::group([
    'namespace' => 'Front',
    'as' => 'front.',
], function () {

    Route::get('/', function () {
        return view('front.welcome');
    })->name('main');

    Route::group([
        'prefix' => 'auth',
        'as' => 'auth.',
    ], function () {
        // Login Routes... $options['login'] ?? true
        Route::get('login', 'LoginController@showLoginForm')->name('login_page');
        Route::post('login', 'LoginController@login')->name('login');
        // Logout Routes... $options['logout'] ?? true
        Route::post('logout', 'LoginController@logout')->name('logout');
        // Registration Routes... $options['register'] ?? true
        Route::get('register', 'RegisterController@showRegistrationForm')->name('register_page');
        Route::post('register', 'RegisterController@register')->name('register');
        // Password Reset Routes... $options['reset'] ?? true
        Route::get('password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('password.request');
        Route::post('password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('password.email');
        Route::get('password/reset/{token}', 'ResetPasswordController@showResetForm')->name('password.reset');
        Route::post('password/reset', 'ResetPasswordController@reset')->name('password.update');
        // Password Confirmation Routes... $options['confirm'] ?? true
        Route::get('password/confirm', 'ConfirmPasswordController@showConfirmForm')->name('password.confirm');
        Route::post('password/confirm', 'ConfirmPasswordController@confirm');
        // Email Verification Routes... $options['verify'] ?? true
        Route::get('email/verify', 'VerificationController@show')->name('verification.notice');
        Route::get('email/verify/{id}/{hash}', 'VerificationController@verify')->name('verification.verify');
        Route::post('email/resend', 'VerificationController@resend')->name('verification.resend');
    });

    Route::group([
        'prefix' => 'home',
        'as' => 'home.',
    ], function () {
        Route::get('/', 'HomeController@index')->name('home');
    });

});



Route::group([
    'as' => 'admin.',
    'prefix' => 'fs-dashboard',
    'namespace' => 'Admin',
], function () {

    Route::group([
        'prefix' => 'auth',
        'as' => 'auth.',
    ], function () {
        // Login Routes... $options['login'] ?? true
        Route::get('login', 'LoginController@showLoginForm')->name('login_page');
        Route::post('login', 'LoginController@login')->name('login');
        // Logout Routes... $options['logout'] ?? true
        Route::post('logout', 'LoginController@logout')->name('logout');
        // Registration Routes... $options['register'] ?? true
        //Route::get('register', 'RegisterController@showRegistrationForm')->name('register_page');
        //Route::post('register', 'RegisterController@register')->name('register');
        // Password Reset Routes... $options['reset'] ?? true
        Route::get('password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('password.request');
        Route::post('password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('password.email');
        Route::get('password/reset/{token}', 'ResetPasswordController@showResetForm')->name('password.reset');
        Route::post('password/reset', 'ResetPasswordController@reset')->name('password.update');
        // Password Confirmation Routes... $options['confirm'] ?? true
        Route::get('password/confirm', 'ConfirmPasswordController@showConfirmForm')->name('password.confirm');
        Route::post('password/confirm', 'ConfirmPasswordController@confirm');
        // Email Verification Routes... $options['verify'] ?? true
        Route::get('email/verify', 'VerificationController@show')->name('verification.notice');
        Route::get('email/verify/{id}/{hash}', 'VerificationController@verify')->name('verification.verify');
        Route::post('email/resend', 'VerificationController@resend')->name('verification.resend');
    });

    // DASHBOARD ROUTES >>>
    Route::group([
//        'middleware' => ['check_admin', 'check_status', 'two_factor'],
    ], function () {

        Route::get('/', 'DashboardController@dashboard')->name('dashboard'); // index

        Route::get('/ch_apexcharts', 'DashboardController@ch_apexcharts')->name('ch_apexcharts');
        Route::get('/cp_bstoggle', 'DashboardController@cp_bstoggle')->name('cp_bstoggle');
        Route::get('/cp_datetime', 'DashboardController@cp_datetime')->name('cp_datetime');
        Route::get('/ex_calendar', 'DashboardController@ex_calendar')->name('ex_calendar');
        Route::get('/fm_ckeditor_balloon', 'DashboardController@fm_ckeditor_balloon')->name('fm_ckeditor_balloon');
        Route::get('/fm_ckeditor_block', 'DashboardController@fm_ckeditor_block')->name('fm_ckeditor_block');
        Route::get('/fm_ckeditor_classic', 'DashboardController@fm_ckeditor_classic')->name('fm_ckeditor_classic');
        Route::get('/fm_ckeditor_document', 'DashboardController@fm_ckeditor_document')->name('fm_ckeditor_document');
        Route::get('/fm_ckeditor_inline', 'DashboardController@fm_ckeditor_inline')->name('fm_ckeditor_inline');
        Route::get('/fm_control', 'DashboardController@fm_control')->name('fm_control');
        Route::get('/index', 'DashboardController@index')->name('index');
        Route::get('/pg_login', 'DashboardController@pg_login')->name('pg_login');
        Route::get('/tb_basic', 'DashboardController@tb_basic')->name('tb_basic');
        Route::get('/tb_datatables', 'DashboardController@tb_datatables')->name('tb_datatables');
        Route::get('/ui_buttons', 'DashboardController@ui_buttons')->name('ui_buttons');
        Route::get('/ui_cards', 'DashboardController@ui_cards')->name('ui_cards');
        Route::get('/ui_colors', 'DashboardController@ui_colors')->name('ui_colors');
        Route::get('/ui_fontawesome', 'DashboardController@ui_fontawesome')->name('ui_fontawesome');
        Route::get('/ui_modals', 'DashboardController@ui_modals')->name('ui_modals');
        Route::get('/ui_themify', 'DashboardController@ui_themify')->name('ui_themify');
        Route::get('/ui_toastr', 'DashboardController@ui_toastr')->name('ui_toastr');
        Route::get('/ui_typography', 'DashboardController@ui_typography')->name('ui_typography');



    });

});
