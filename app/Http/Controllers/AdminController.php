<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\IpConfig;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class AdminController extends Controller
{
    public function getHome(){
        return view('admin.dashboard');
    }
    public function ipConfig(){
        $data = IpConfig::all();
        return view('admin.ip-config',compact('data'));
    }
    public function userManagement(){
        return view('admin.user-management');
    }

    public function getListIp(Request $request){
        $req = $request->all();
        $list = IpConfig::where('name', 'like', '%'.$req['userName'].'%');
        $data = $list->orderBy('created_at', 'DESC')->skip($req['start'])->take($req['limit'])->get();
        if(count($data)){
            $res = [
                'rc'=>'0',
                'data'=>$data,
                'total'=> IpConfig::where('name', 'like', '%'.$req['userName'].'%')->count()
            ];
        }else{
            $res = [
                'rc'=>'1',
                'rd'=>'Không tìm thấy bản ghi nào'
            ];
        }
        return json_encode($res);
    }
    public function getListUser(Request $request){
        $req = $request->all();
        $list = User::where('name', 'like', '%'.$req['userName'].'%');
        $data = $list->orderBy('created_at', 'DESC')->skip($req['start'])->take($req['limit'])->get();
        $res = [
            'rc' => 0,
            'rd' => 'Lấy dữ liệu thành công',
            'history' => $data,
            'total'=> User::where('name', 'like', '%'.$req['userName'].'%')->count()
        ];
        if(count($data)){

            $res = [
                'rc'=>'0',
                'data'=>$data,
                'total'=> User::where('id','>',0)->count()
            ];
        }else{
            $res = [
                'rc'=>'1',
                'rd'=>'Không tìm thấy bản ghi nào'
            ];
        }
        return json_encode($res);
    }
    public function addIp(Request $request){
        Log::info("Thêm ip");
        $name = 'Không xác định';
        $ip = $request->ip;
        if($request->name){
            $name = $request->name;
        }
        $check = IpConfig::where('ip',$ip)->get();
        if(count($check)){
            $res = [
                'rc'=>'-1',
                'rd'=>'Địa chỉ ip này đã tồn tại'
            ];
        }else{
            $config = new IpConfig;
            $config->ip = $ip;
            $config->name = $name;
            $config->status = 1;
            $config->save();
            $res = [
                'rc'=>'0',
                'rd'=>'Thêm thành công'
            ];
        }
        return json_encode($res);

    }
    public function updateStatusUser(Request $request){
        $data = $request->all();
        $user = User::where('phone',$data['userName'])->first();
        $ip = IpConfig::where('user', '=', $data['userName'])->delete();
        $user->status = $data['status'];
        $user->save();
        $res = [
            'rc'=>'0',
            'rd'=>'Cập nhật trạng thái thành công',
            'user'=>$user
        ];
        return json_encode($res);
    }
    public function updateIp(Request $request){
        Log::error('Cập nhật ip');
        $ip = $request->ip;
        $check = IpConfig::where('ip',$ip)->first();
        $check ->status = $request->status;
        $check->save();
        $res = [
            'rc'=>'0',
            'rd'=>'Cập nhật trạng thái thành công'
        ];
        return json_encode($res);
    }
    public function deleteIp(Request $request){
        $ip = $request->ip;
        $check = IpConfig::where('ip', $ip)
            ->first();
        $check->delete();
        $res = [
            'rc'=>'0',
            'rd'=>'Cập nhật trạng thái thành công'
        ];
        return json_encode($res);
    }
    public function deleteUser(Request $request){
        $data = $request->all();
        $ip = IpConfig::where('user', '=', $data['userName'])->delete();
        $user = User::where('name', '=', $data['userName'])->delete();
        $res = [
            'rc' => 0,
            'rd' => 'Xoá tài khoản và dữ liệu đi kèm thành công.',
        ];
        return json_encode($res);
    }
    public function CheckIpConfig(Request $request){
        Log::error('Check ip onfig');
        $ip = $request->ip;
        Log::error($ip);
        if($ip){
            $config = IpConfig::where('ip',$ip)->where('status',1)->first();
            if($config){
                $config->count = $config->count + 1;
                $config->save();
                $res = [
                    'rc'=>'0',
                    'accept'=>true,
                    'rd'=>'Có thể sử dụng'
                ];
            }else{
                $res = [
                    'rc'=>'-1',
                    'accept'=>false,
                    'rd'=>'Địa chỉ ip chưa được cấu hình'
                ];
            }
        }else{
            $res = [
                'rc'=>'-1',
                'accept'=>false,
                'rd'=>'Địa chỉ ip chưa được cấu hình'
            ];
        }
        return $res;
    }
    public function myProfile(){
        $ipHost = IpConfig::where('user',Auth::user()->id)->first();
        return view('admin.profile',compact('ipHost'));
    }
    public function updateMyIp(Request $request){
        Log::info("cập nhật địa chỉ ip");
        $ipHost = IpConfig::where('user',$request->get('user'))->first();
        if($ipHost){
            $ipHost ->ip = $request->get('ip');
            $ipHost->name =  $request->get('user');
            $ipHost->user =  $request->get('user');
            $ipHost->status = 1;
            $ipHost->save();
            $res = [
                'rc'=>'0',
                'rd'=>'Cập cập nhật thành công.'
            ];
        }
        else{
            $config = new IpConfig;
            $config->ip = $request->get('ip');
            $config->user = $request->get('user');
            $config->name = Auth::user()->phone;
            $config->status = 1;
            $config->save();
            $res = [
                'rc'=>'0',
                'rd'=>'Thêm mới địa chỉ nhật thành công.'
            ];
        }
        return json_encode($res);
    }
}
