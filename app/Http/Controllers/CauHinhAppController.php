<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CauHinhApp;

class CauHinhAppController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listCauHinhApp = CauHinhApp::all();
        return view('CauHinhApp.danh-sach', compact('listCauHinhApp'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('CauHinhApp.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $CauHinhApp=new CauHinhApp;
        $CauHinhApp->cau_hoi_sai=$request->cau_hoi_sai;
        $CauHinhApp->thoi_gian_tra_loi=$request->thoi_gian_tra_loi;
       
        $CauHinhApp->save();
        return redirect()->route('CauHinhApp.danh-sach');
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
        $CauHinhApp = CauHinhApp::find($id);
        return view('CauHinhApp.form', compact('CauHinhApp'));
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
        $CauHinhApp = CauHinhApp::find($id);
        $CauHinhApp->cau_hoi_sai=$request->cau_hoi_sai;
        $CauHinhApp->thoi_gian_tra_loi=$request->thoi_gian_tra_loi;
       
        $CauHinhApp ->save();

        return redirect()->route('CauHinhApp.danh-sach');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $CauHinhApp = CauHinhApp::find($id);
        $CauHinhApp->delete();

        return redirect()->route('CauHinhApp.danh-sach');
    }
}
