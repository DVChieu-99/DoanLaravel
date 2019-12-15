<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ChiTietLuotChoi;

class ChiTietLuotChoiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listChiTietLuotChoi = ChiTietLuotChoi::all();
        return view('ChiTietLuotChoi.danh-sach', compact('listChiTietLuotChoi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ChiTietLuotChoi.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ChiTietLuotChoi=new ChiTietLuotChoi;
        $ChiTietLuotChoi->luot_choi_id=$request->luot_choi_id;
        $ChiTietLuotChoi->cau_hoi_id=$request->cau_hoi_id;
        $ChiTietLuotChoi->phuong_an=$request->phuong_an;
        $ChiTietLuotChoi->diem=$request->diem;
        $ChiTietLuotChoi->save();
        return redirect()->route('ChiTietLuotChoi.danh-sach');
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
        $ChiTietLuotChoi=ChiTietLuotChoi::find($id);
        return view('ChiTietLuotChoi.form',compact('ChiTietLuotChoi'));
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
        $ChiTietLuotChoi=ChiTietLuotChoi::find($id);
        $ChiTietLuotChoi->luot_choi_id=$request->luot_choi_id;
        $ChiTietLuotChoi->cau_hoi_id=$request->cau_hoi_id;
        $ChiTietLuotChoi->phuong_an=$request->phuong_an;
        $ChiTietLuotChoi->diem=$request->diem;
        $ChiTietLuotChoi->save();
        return redirect()->route('ChiTietLuotChoi.danh-sach');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ChiTietLuotChoi=ChiTietLuotChoi::find($id);
        $ChiTietLuotChoi->delete();
        
        return redirect()->route('ChiTietLuotChoi.danh-sach');
    }
}
