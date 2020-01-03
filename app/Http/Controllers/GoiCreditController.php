<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\goi_credit;

class GoiCreditController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listGoiCredit = goi_credit::all();
        return view('GoiCredit.danh-sach', compact('listGoiCredit'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('GoiCredit.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $goiCredit = new goi_credit;
        $goiCredit->ten_goi = $request->ten_goi;
        $goiCredit->credit=$request->credit;
        $goiCredit->so_tien=$request->so_tien;
        $goiCredit->save();

        return redirect()->route('goi-credit.danh-sach');
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
        $goiCredit = goi_credit::find($id);
        return view('GoiCredit.form', compact('goiCredit'));
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
        $goiCredit = goi_credit::find($id);
        $goiCredit ->ten_goi = $request->ten_goi;
        $goiCredit->credit=$request->credit;
        $goiCredit->so_tien=$request->so_tien;
        $goiCredit ->save();

        return redirect()->route('goi-credit.danh-sach')->with(['flash_message'=>'Cập nhật gói Credit thành công!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $goiCredit = goi_credit::find($id);
        $goiCredit->delete();

        return redirect()->route('goi-credit.danh-sach')->with(['flash_message'=>'Xóa gói Credit thành công!']);;
    }
    public function bin(){
      $GCDdelete = goi_credit::onlyTrashed()->get();
      return view('GoiCredit.restore',compact('GCDdelete'));
    }
    public function restore($id){
      goi_credit::onlyTrashed()->where('id',$id)->restore();
      return redirect()->route('goi-credit.bin')->with(['flash_message'=>'Khôi phục thành công']);
    }
}
