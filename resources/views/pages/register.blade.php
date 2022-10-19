<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Đăng ký thành viên</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- Feathericon CSS -->
    <link rel="stylesheet" href="assets/css/feather.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="/css/custom.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        .login-wrapper .loginbox label{
            margin-bottom: 0;
        }
    </style>

</head>
<body>

<!-- Main Wrapper -->
<div class="main-wrapper">

    <div class="header d-none">
        <!-- Header Menu -->
        <ul class="nav nav-tabs user-menu">
            <!-- Flag -->
            <li class="nav-item">
                <a href="#" id="dark-mode-toggle" class="dark-mode-toggle">
                    <i class="feather-sun light-mode"></i><i class="feather-moon dark-mode"></i>
                </a>
            </li>
            <!-- /Flag -->
        </ul>
        <!-- Header Menu -->
    </div>

    <div class="row">

        <!-- Login Banner -->
        <div class="col-md-6">
            <img src="user/assets/img/anhnen.jpg" alt="">
        </div>
        <div class="col-md-6 login-wrap-bg" id="app">
            <register></register>
        </div>

    </div>
</div>
<!-- /Main Wrapper -->

<!-- jQuery -->
<script src="assets/js/jquery-3.6.0.min.js"></script>

<!-- Bootstrap Core JS -->
<script src="assets/js/bootstrap.bundle.min.js"></script>

<!-- Custom JS -->
<script src="assets/js/script.js"></script>
<script src="{{asset('js/user-register.js?t='.Carbon\Carbon::now()->timestamp)}}"></script>

</body>
</html>
