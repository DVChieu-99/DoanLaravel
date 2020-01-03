<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\goi_credit;

class GoiCreditController extends Controller
{
  public function laygoicredit(){
    $listGoiCredit = goi_credit::all();
    if($listGoiCredit!=null){
      $result =[
        'success'=>true,
        'message'=>'Lấy gói credit thành công',
        'data'=>$listGoiCredit
      ];
      return response()->json($result);
    }
    return response()->json([
      'success'=>false,
      'message'=>'Lấy gói credit thất bại',
      'data'=>null
    ]);

  }
}
