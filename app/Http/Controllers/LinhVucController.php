<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\linh_vuc;
use App\Http\Requests\LinhVucRequest;
use App\Http\Requests\UpDateLinhVucReQuest;
class LinhVucController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listLinhVuc = linh_vuc::all();
        return view('linh-vuc.danh-sach', compact('listLinhVuc'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('linh-vuc.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LinhVucRequest $request)
    {
        $linhVuc = new linh_vuc;
        $linhVuc->ten_linh_vuc = $request->ten_linh_vuc;
        $linhVuc->save();

        return redirect()->route('linh-vuc.danh-sach')->with(['flash_message'=>'Thêm lĩnh vực thành công!']);;
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
        $linhVuc = linh_vuc::find($id);
        return view('linh-vuc.form', compact('linhVuc'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpDateLinhVucReQuest $request, $id)
    {
        $linhVuc = linh_vuc::find($id);
        $linhVuc ->ten_linh_vuc = $request->ten_linh_vuc;
        $linhVuc ->save();

        return redirect()->route('linh-vuc.danh-sach')->with(['flash_message'=>'Cập nhật lĩnh vực thành công!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $linhVuc = linh_vuc::find($id);
        $linhVuc->delete();

        return redirect()->route('linh-vuc.danh-sach')->with(['flash_message'=>'Xóa lĩnh vực thành công!']);
    }
}
