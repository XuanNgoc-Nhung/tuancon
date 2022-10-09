<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\IpConfig;
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
    public function getListIp(Request $request){
        $data = IpConfig::skip(0)->take(10)->get();
        if(count($data)){
            $res = [
                'rc'=>'0',
                'data'=>$data
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
}
