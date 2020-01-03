<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\nguoi_choi;

class NguoiChoiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listNguoiChoi = nguoi_choi::all();
        return view('NguoiChoi.danh-sach', compact('listNguoiChoi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('NguoiChoi.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $NguoiChoi=new nguoi_choi;
        $NguoiChoi->ten_dang_nhap=$request->ten_dang_nhap;
        $NguoiChoi->mat_khau=$request->mat_khau;
        $NguoiChoi->mail=$request->mail;
        $NguoiChoi->hinh_dai_dien=$request->hinh_dai_dien;
        $NguoiChoi->diem_cao_nhat=$request->diem_cao_nhat;
        $NguoiChoi->credit=$request->credit;
        $NguoiChoi->save();
        return redirect()->route('NguoiChoi.danh-sach');
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
        $NguoiChoi = nguoi_choi::find($id);
        return view('NguoiChoi.form', compact('NguoiChoi'));
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
        $NguoiChoi = nguoi_choi::find($id);
        $NguoiChoi->ten_dang_nhap=$request->ten_dang_nhap;
        $NguoiChoi->mat_khau=$request->mat_khau;
        $NguoiChoi->mail=$request->mail;
        $NguoiChoi->hinh_dai_dien=$request->hinh_dai_dien;
        $NguoiChoi->diem_cao_nhat=$request->diem_cao_nhat;
        $NguoiChoi->credit=$request->credit;
        $NguoiChoi ->save();

        return redirect()->route('NguoiChoi.danh-sach')->with(['flash_message'=>'Cập nhật người chơi thành công!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $NguoiChoi = nguoi_choi::find($id);
        $NguoiChoi->delete();

        return redirect()->route('NguoiChoi.danh-sach')->with(['flash_message'=>'Xóa người chơi thành công!']);
    }
    public function bin(){
      $NCdelete = nguoi_choi::onlyTrashed()->get();
      return view('NguoiChoi.restore',compact('NCdelete'));
    }
    public function restore($id){
      nguoi_choi::onlyTrashed()->where('id',$id)->restore();
      return redirect()->route('NguoiChoi.bin')->with(['flash_message'=>'Khôi phục thành công']);
    }
}
