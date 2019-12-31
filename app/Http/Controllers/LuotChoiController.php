<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\luot_choi;

class LuotChoiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listLuotChoi = luot_choi::all();
        return view('LuotChoi.danh-sach', compact('listLuotChoi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('LuotChoi.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $LuotChoi=new luot_choi;
        $LuotChoi->nguoi_choi_id=$request->nguoi_choi_id;
        $LuotChoi->so_cau=$request->so_cau;
        $LuotChoi->diem=$request->diem;
        $LuotChoi->ngay_gio=$request->ngay_gio;
        $LuotChoi->save();
        return redirect()->route('LuotChoi.danh-sach');
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
        $LuotChoi=luot_choi::find($id);
        return view('LuotChoi.form',compact('LuotChoi'));
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
        $LuotChoi=luot_choi::find($id);
        $LuotChoi->nguoi_choi_id=$request->nguoi_choi_id;
        $LuotChoi->so_cau=$request->so_cau;
        $LuotChoi->diem=$request->diem;
        $LuotChoi->ngay_gio=$request->ngay_gio;
        $LuotChoi->save();
        return redirect()->route('LuotChoi.danh-sach');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $LuotChoi=luot_choi::find($id);
        $LuotChoi->delete();
        
        return redirect()->route('LuotChoi.danh-sach');
    }
}
