@extends("admin.layout.app")
@section("title")
    <title>Thông tin cá nhân </title>
@endsection
@section("content")
    <div id="app">
        <my-profile :info="{{json_encode(Auth::user())}}" :ip="{{json_encode($ipHost)}}"/>
    </div>
@endsection
@section("js_location")
    <script src="{{asset('js/my-profile.js?t='.Carbon\Carbon::now()->timestamp)}}"></script>
@endsection
