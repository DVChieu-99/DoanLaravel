<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\nguoi_choi;

class NguoiChoiConTroller extends Controller
{
     public function dangKy(Request $req){
    	$nguoiChoi = new nguoi_choi;
    	$nguoiChoi->ten_dang_nhap = $req->ten_dang_nhap;
    	$nguoiChoi->mat_khau = $req->mat_khau;
    	$nguoiChoi->mail = $req->email;
    	$nguoiChoi->hinh_dai_dien = "avt.jpg";
    	$nguoiChoi->diem_cao_nhat = "0";
    	$nguoiChoi->credit="0";

    	if(nguoi_choi::where('ten_dang_nhap', '=', $req->ten_dang_nhap)->exists()){
    		return response()->json([
    				'status'	=>false,
    				'message'	=>"Tên đăng nhập đã được sử dụng",
    			]);
    	}
    	else{
    	$nguoiChoi->save();
    	return response()->json([
    				'status'	=>true,
    				'message'	=>"Đăng ký thành công",
    			]);
    }
	}
}
