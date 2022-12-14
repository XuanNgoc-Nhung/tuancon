<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    @yield('title')
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    @include('user.layout.link_css')
</head>
<body>

<!-- Main Wrapper -->
<div class="main-wrapper">

    <!-- Header -->
    @include('user.layout.header')
    <!-- /Header -->

    <!-- Breadcrumb -->
    <div class="breadcrumb-bar">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-6 col-12">
                    <nav aria-label="breadcrumb" class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a class="p_blue" href="{{route('homeUser')}}">Trang chủ</a></li>
                            <li class="breadcrumb-item"><a class="p_blue" href="{{route('homeUser')}}">Khu thương mại</a></li>
                        </ol>
                    </nav>
                </div>
                <div class="col-md-6 col-12">
                    <marquee direction="left" >
                        <p class="m-0 p-0"><b class="p_red">Thông báo:</b> Đăng ký sử dụng ngay để nhận nhiều ưu đãi</p>
                    </marquee>
                </div>
            </div>
        </div>
    </div>
    <!-- /Breadcrumb -->
    <!-- Page Content -->
    <div class="content">
        <div class="container-fluid">
            @yield('content')
        </div>

    </div>
    <!-- /Page Content -->

    <!-- Footer -->
    @include('user.layout.footer')
    <!-- /Footer -->

</div>
<!-- /Main Wrapper -->
 @include('user.layout.link_js')

</body><!-- Messenger Plugin chat Code -->
<div id="fb-root"></div>

<!-- Your Plugin chat code -->
<div id="fb-customer-chat" class="fb-customerchat">
</div>

<script>
    var chatbox = document.getElementById('fb-customer-chat');
    chatbox.setAttribute("page_id", "112020495017489");
    chatbox.setAttribute("attribution", "biz_inbox");
</script>

<!-- Your SDK code -->
<script>
    window.fbAsyncInit = function() {
        FB.init({
            xfbml            : true,
            version          : 'v15.0'
        });
    };

    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
</html>
