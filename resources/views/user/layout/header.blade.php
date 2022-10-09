
<header class="header">
    <nav class="navbar navbar-expand-lg header-nav">
        <div class="navbar-header">
            <a id="mobile_btn" href="javascript:void(0);">
							<span class="bar-icon">
								<span></span>
								<span></span>
								<span></span>
							</span>
            </a>
            <a href="#" class="navbar-brand logo">
                <img src="user/assets/img/logo.png" class="img-fluid" alt="Logo">
            </a>
        </div>
        <div class=" main-menu-wrapper">
            <div class="menu-header">
                <a href="index.html" class="menu-logo">
                    <img src="user/assets/img/logo.png" class="img-fluid" alt="Logo">
                </a>
                <a id="menu_close" class="menu-close" href="javascript:void(0);">
                    <i class="fas fa-times"></i>
                </a>
            </div>
            <ul class="main-nav">
                <li class="has-submenu"><a href="">Giới thiệu</a>
                <li class="has-submenu">
                    <a href="">Video quảng cáo <i class="fas fa-chevron-down"></i></a>
                    <ul class="submenu">
                        <li><a href="#">Danh mục 1</a></li>
                        <li><a href="#">Danh mục 2</a></li>
                        <li><a href="#">Danh mục 3</a></li>
                    </ul>
                </li>
                <li class="has-submenu">
                    <a href="">Tool quảng cáo <i class="fas fa-chevron-down"></i></a>
                    <ul class="submenu">
                        <li><a href="#">Danh mục 1</a></li>
                        <li><a href="#">Danh mục 2</a></li>
                        <li><a href="#">Danh mục 3</a></li>
                    </ul>
                </li>
                <li class="login-link">
                    <a href="login.html">Login / Signup</a>
                </li>
            </ul>
        </div>
        <ul class="nav header-navbar-rht">
            <li class="nav-item contact-item">
                <div class="header-contact-img">
                    <i class="far fa-hospital"></i>
                </div>
                <div class="header-contact-detail">
                    <p class="contact-header">Hotline</p>
                    <p class="contact-info-header"> 0961140734</p>
                </div>
            </li>
            <li class="nav-item">
{{--                <a class=" btn btn-sm btn-primary mr-1" href="{{route('getRegister')}}">Đăng ký </a>--}}
                <a class=" btn btn-sm btn-success" href="{{route('getLogin')}}">Đăng nhập </a>
            </li>
        </ul>
    </nav>
</header>
