<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.partials.head')
</head>
<body class="theme-dark">
<div class="grid-wrapper sidebar-bg bg1">
    <!-- Theme switcher -->
    @include('admin.partials.theme-switcher')
    <!-- BOF HEADER -->
    @include('admin.partials.header')
    <!-- EOF HEADER -->
    <!-- BOF ASIDE-LEFT -->
    @include('admin.partials.aside-left')
    <!-- EOF ASIDE-LEFT -->
    <!-- BOF MAIN -->
    <div class="main">
        <!-- BOF Breadcrumb -->
        @stack('breadcrumb')
        <!-- EOF Breadcrumb -->
        <!-- BOF MAIN-BODY -->
        @yield('content')
        <!-- EOF MAIN-BODY -->
    </div>
    <!-- EOF MAIN -->
    <!-- BOF FOOTER -->
    @include('admin.partials.footer')
    <!-- Preloader -->
    <div id="preloader"></div>
    <!-- EOF FOOTER -->
    <!-- BOF ASIDE-RIGHT -->
    @include('admin.partials.aside-right')
    <!-- EOF ASIDE-RIGHT -->
    <div id="overlay"></div>
</div> <!-- END WRAPPER -->
@include('admin.partials.scripts')
</body>
</html>
