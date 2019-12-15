<?php

namespace App\Http\Controllers;
use App\NguoiChoi;

use Illuminate\Http\Request;

class TrangChuController extends Controller
{
    public function index()
    {
        $listNguoiChoi=NguoiChoi::all();
        return view('TrangChu.TrangChu',compact($listNguoiChoi));
    }
}
