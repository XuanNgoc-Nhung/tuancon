
<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title"><span>Menu</span></li>
                <li class="{{ Request::routeIs('homeAdmin') ? 'active' : '' }}">
                    <a href="{{route('homeAdmin')}}"><i class="feather-grid"></i> <span>Tổng quan</span></a>
                </li>
                @if(Auth::user()->role==1)
                    <li class="{{ Request::routeIs('ipConfig') ? 'active' : '' }}">
                        <a href="{{route('ipConfig')}}"><i class="feather-calendar"></i> <span>Cấu hình ip</span></a>
                    </li>
                    <li class="{{ Request::routeIs('userManagement') ? 'active' : '' }}">
                        <a href="{{route('userManagement')}}"><i class="feather-calendar"></i> <span>Quản lý người dùng</span></a>
                    </li>
                @endif
                @if(Auth::user()->role==0)
                    <li class="{{ Request::routeIs('myProfile') ? 'active' : '' }}">
                        <a href="{{route('myProfile')}}"><i class="feather-calendar"></i> <span>Hồ sơ cá nhân</span></a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</div>
