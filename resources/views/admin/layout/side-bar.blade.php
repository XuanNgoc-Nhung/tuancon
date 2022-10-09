
<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title"><span>Menu</span></li>
                <li class="{{ Request::routeIs('homeAdmin') ? 'active' : '' }}">
                    <a href="{{route('homeAdmin')}}"><i class="feather-grid"></i> <span>Tổng quan</span></a>
                </li>
                <li class="{{ Request::routeIs('ipConfig') ? 'active' : '' }}">
                    <a href="{{route('ipConfig')}}"><i class="feather-calendar"></i> <span>Cấu hình ip</span></a>
                </li>
            </ul>
        </div>
    </div>
</div>
