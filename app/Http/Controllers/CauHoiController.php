<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cau_hoi;
use App\linh_vuc;

class CauHoiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listCauHois = cau_hoi::all();
        return view('cau-hoi.danh-sach', compact('listCauHois'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $listLinhVuc = linh_vuc::all();
        return view('cau-hoi.form', compact('listLinhVuc'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cauHoi = new cau_hoi;
        $cauHoi->noi_dung = $request->noi_dung;
        $cauHoi->linh_vuc_id = $request->linh_vuc;
        $cauHoi->phuong_an_a = $request->phuong_an_a;
        $cauHoi->phuong_an_b = $request->phuong_an_b;
        $cauHoi->phuong_an_c = $request->phuong_an_c;
        $cauHoi->phuong_an_d= $request->phuong_an_d;
        $cauHoi->dap_an = $request->dap_an;
        $cauHoi->save();

        return redirect()->route('cau-hoi.danh-sach');
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
        $cauHoi = cau_hoi::find($id);
        $listLinhVuc = linh_vuc::all();
        return view('cau-hoi.form', compact('cauHoi', 'listLinhVuc'));
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
        $cauHoi = cau_hoi::find($id);
        $cauHoi->noi_dung = $request->noi_dung;
        $cauHoi->linh_vuc_id = $request->linh_vuc;
        $cauHoi->phuong_an_a = $request->phuong_an_a;
        $cauHoi->phuong_an_b = $request->phuong_an_b;
        $cauHoi->phuong_an_c = $request->phuong_an_c;
        $cauHoi->phuong_an_d= $request->phuong_an_d;
        $cauHoi->dap_an = $request->dap_an;
        $cauHoi ->save();

        return redirect()->route('cau-hoi.danh-sach')->with(['flash_message'=>'Cập nhật câu hỏi thành công!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cauHoi = cau_hoi::find($id);
        $cauHoi->delete();

        return redirect()->route('cau-hoi.danh-sach')->with(['flash_message'=>'Xóa câu hỏi thành công!']);
    }
    public function bin(){
      $CHdelete = cau_hoi::onlyTrashed()->get();
      return view('cau-hoi.restore',compact('CHdelete'));
    }
    public function restore($id){
      cau_hoi::onlyTrashed()->where('id',$id)->restore();
      return redirect()->route('cau-hoi.bin')->with(['flash_message'=>'Khôi phục thành công']);
    }
}
