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
        <div class="col-md-6 login-bg">
            <div class="login-banner"></div>
        </div>
        <!-- /Login Banner -->

        <div class="col-md-6 login-wrap-bg">

            <!-- Login -->
            <div class="login-wrapper">
                <div class="loginbox">
                    <div class="img-logo">
                        <img src="assets/img/logo.png" class="img-fluid" alt="Logo">
                    </div>
                    <h3>Đăng ký thành viên</h3>
                    <p class="account-subtitle">Đăng ký với email của bạn</p>

                    <form method="post" action="{{route('postRegister')}}">
                        @csrf
                        <div class="form-group">
                            <label class="">Họ & tên</label>
                            <input type="text" required name="name" placeholder="Nhập tên của bạn" class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="focus-label">Email</label>
                            <input type="text" required name="email" placeholder="Nhập email của bạn" class="form-control ">
                        </div>
                        <div class="form-group">
                            <label class="focus-label">Mật khẩu</label>
                            <input type="password" required name="password" class="form-control ">
                        </div>
                        <div class="form-group">
                            <label class="focus-label">Nhập lại mật khẩu</label>
                            <input type="password" required class="form-control ">
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-12">
                                    <label class="custom_check mr-2 mb-0"> Tôi chấp nhận với các <b>Điều khoản</b> và
                                        <b>Chính sách bảo mật</b>.
                                        <input type="checkbox" name="radio">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="d-grid">
                            <button class="btn btn-primary" type="submit">Đăng ký</button>
                        </div>
                        <div class="dont-have">Bạn đã có tài khoản? <a href="{{route('getLogin')}}">Đăng nhập</a></div>
                    </form>
                </div>
            </div>
            <!-- /Login -->

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

</body>
</html>
