<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <meta name="description" content="Fee Bootstrap Admin Theme with Webpack and Laravel-Mix" />
    <meta name="keywords" content="bootstrap, admin theme, admin dashboard, jquery, webpack, laravel-mix, template, responsive" />
    <meta name="author" content="BoolFalse" />

    <title>BoolFalse - Login</title>

    <!-- Core Styles -->
    <link rel="stylesheet" href="{{ asset('dashboard/assets/css/boolfalse.css') }}">

    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('dashboard/assets/img/apple-icon.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('dashboard/assets/img/favicon.png') }}">
</head>

<body class="theme-default">

<div class="login-wrapper">
    <div class="d-flex justify-content-center mt-5">
        @include('admin.auth.card-login')
{{--        @include('admin.partials.card-forget-password')--}}
    </div>
</div>

<script src="{{ asset('dashboard/assets/scripts/boolfalse.js') }}"></script>
<script src="{{ asset('dashboard/assets/scripts/pages/pg_login.js') }}" type="text/javascript"></script>
</body>

</html>
