<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\chi_tiet_luot_choi;

class ChiTietLuotChoiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listChiTietLuotChoi = chi_tiet_luot_choi::all();
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
        $ChiTietLuotChoi=new chi_tiet_luot_choi;
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
        $ChiTietLuotChoi=chi_tiet_luot_choi::find($id);
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
        $ChiTietLuotChoi=chi_tiet_luot_choi::find($id);
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
        $ChiTietLuotChoi=chi_tiet_luot_choi::find($id);
        $ChiTietLuotChoi->delete();
        
        return redirect()->route('ChiTietLuotChoi.danh-sach');
    }
}
