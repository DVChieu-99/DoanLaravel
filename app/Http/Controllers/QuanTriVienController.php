<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\QuantriVien;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class QuanTriVienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $redirectTo ="linh-vuc";
    public function dangNhap()
    {
        return view('dang-nhap');
    }
    public function xuLyDangNhap(Request $request)
    {

        $ten_dang_nhap = $request->ten_dang_nhap;
        $mat_khau = $request->mat_khau;

        if(Auth::attempt(['ten_dang_nhap'=> $ten_dang_nhap,'password'=>$mat_khau])){
            return redirect()->route('trang-chu');
        }
        else{
            
            return redirect()->route('dang-nhap');
        }
        
    }
    public function layThongTin(){
        return Auth::id();
    }
    public function dangXuat(){
         Auth::logout();
         return redirect()->route('dang-nhap');
    }

    public function index()
    {
        $listQuanTriVien = QuanTriVien::all();
        return view('QuanTriVien.danh-sach', compact('listQuanTriVien'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('QuanTriVien.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $QuanTriVien=new QuanTriVien;
        $QuanTriVien->ten_dang_nhap=$request->ten_dang_nhap;
        $QuanTriVien->mat_khau=$request->mat_khau;
        $QuanTriVien->ho_ten=$request->ho_ten;
        $QuanTriVien->save();
        return redirect()->route('QuanTriVien.danh-sach');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $QuanTriVien = QuanTriVien::find($id);
        return view('QuanTriVien.form', compact('QuanTriVien'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $QuanTriVien=QuanTriVien::find($id);
        $QuanTriVien->ten_dang_nhap=$request->ten_dang_nhap;
        $QuanTriVien->mat_khau=$request->mat_khau;
        $QuanTriVien->ho_ten=$request->ho_ten;
        $QuanTriVien->save();
        return redirect()->route('QuanTriVien.danh-sach')->with(['flash_message'=>'Cập nhật quản trị viên thành công!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $QuanTriVien = QuanTriVien::find($id);
        $QuanTriVien->delete();

        return redirect()->route('QuanTriVien.danh-sach')->with(['flash_message'=>'Xóa quản trị viên thành công!']);
    }
}
