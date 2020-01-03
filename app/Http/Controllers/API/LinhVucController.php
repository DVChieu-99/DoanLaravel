<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\linh_vuc;

class LinhVucController extends Controller
{
    public function layDanhSach()
    {
    	$listLinhVuc = linh_vuc::all()->random(4);
      if($listLinhVuc!=null){
        $result = [
          'success'	=> true,
          'message'=>'Lấy lĩnh vực thành công',
          'data'		=> $listLinhVuc
        ];
        return response()->json($result);
      }
      return response()->json([
        'success'=>false,
        'message'=>'Lấy lĩnh vực thất bại',
        'data'=>null
      ]);
    }
}
