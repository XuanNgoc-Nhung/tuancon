@extends("admin.layout.app")
@section("title")
    <title>Cấu hình ip truy cập </title>
@endsection
@section("content")
    <div id="app">
        <ip-config/>
    </div>
@endsection
@section("js_location")
    <script src="{{asset('js/ip-config.js?t='.Carbon\Carbon::now()->timestamp)}}"></script>
@endsection
