@extends("admin.layout.app")
@section("title")
    <title>Quản lý người dùng </title>
@endsection
@section("content")
    <div id="app">
        <user-management></user-management>
    </div>
@endsection
@section("js_location")
    <script src="{{asset('js/user-management.js?t='.Carbon\Carbon::now()->timestamp)}}"></script>
@endsection
