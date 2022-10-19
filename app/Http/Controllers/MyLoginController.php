<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Session;
use App\User;
use Hash;


class MyLoginController extends Controller
{
    public function getLogin(){
        return view('pages.login');
    }
    public function getRegister(){
        return view('pages.register');
    }

    public function postRegister(Request $request)
    {
        $data = $request->all();
        $user = User::where('phone','=',$data['phone'])->first();
        if($user!=null){
            $res = [
                'rc' => -1,
                'rd' => 'Tài khoản đã có trên hệ thống',
            ];
        }else{
            User::create([
                'phone' => $data['phone'],
                'name' => $data['phone'],
                'password' => Hash::make($data['password'])
            ]);
            $res = [
                'rc' => 0,
                'rd' => 'Đăng ký thành công. Vui lòng đợi admin phê duyệt.',
            ];
        }

        return json_encode($res);
    }
    public function postLogin(Request $request)
    {
        $credentials = $request->only('phone', 'password');
        if (Auth::attempt($credentials)) {
            Log::info(Auth::user()->status);
            if(Auth::user()->status==0){
                $res = [
                    'rc' => -1,
                    'rd' => 'Tài khoản của bạn chưa được kích hoạt. Vui lòng liên hệ hotline để được trợ giúp',
                ];
            }else{
                $res = [
                    'rc' => 0,
                    'rd' => 'Đăng nhập thành công',
                ];
            }
        }
        else{
            $res = [
                'rc' => -1,
                'rd' => 'Tài khoản hoặc mật khẩu không chính xác.',
            ];
        }
        return json_encode($res);
    }


    public function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);
    }
    public function logOut(){
        Auth::logout();
        return redirect('/');
    }
}
