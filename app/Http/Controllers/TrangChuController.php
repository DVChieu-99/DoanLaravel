<?php

namespace App\Http\Controllers;
use App\nguoi_choi;

use Illuminate\Http\Request;

class TrangChuController extends Controller
{
    public function index()
    {
        $listNguoiChoi=nguoi_choi::all();
        return view('TrangChu.TrangChu',compact($listNguoiChoi));
    }
}
