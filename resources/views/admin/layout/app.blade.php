
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    @yield('title')
    @include('admin.layout.link_css')

</head>
<body>

<!-- Main Wrapper -->
<div class="main-wrapper">
    @include('admin.layout.header')
    @include('admin.layout.side-bar')
    <div class="page-wrapper">
        <div class="content container-fluid">
            @yield('content')
        </div>
    </div>
</div>
@include('admin.layout.link_js')
@yield('js_location')
</body>
</html>
