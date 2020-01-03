<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\cau_hoi;

class CauHoiController extends Controller
{
    public function layCauHoi(Request $request)
    {
    	$linhVucID = $request->query('linh_vuc');
    	$cauHoi = cau_hoi::where('linh_vuc_id', $linhVucID)->get()->random(1);

    	$result = [
    		'success' => true,
    		'data'    => $cauHoi
    	];
    	return response()->json($result);
    }
}
