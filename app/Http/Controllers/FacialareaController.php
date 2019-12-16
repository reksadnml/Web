<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\facialarea;

class facialareaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_facialarea= \App\facialarea::all();
        return view('facialarea',['data_facialarea'=>$data_facialarea]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $facialarea = facialarea::create($request->all());
        return redirect('facialarea');
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
        $facialarea = \App\facialarea::find($id);
        return view ('facialarea_edit',['facialarea' => $facialarea]);
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
        // dd($request->all());
        $facialarea = \App\facialarea::find($id);
        $facialarea->update($request->all());
        return redirect ('/facialarea')->with('sukses', 'Data berhasil diupdate');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function delete($id)
    {
        $facialarea=\App\facialarea::find($id);
        $facialarea->delete($facialarea);
        return redirect ('/facialarea')->with('sukses', 'Data berhasil dihapus');
    }
}
