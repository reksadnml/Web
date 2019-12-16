<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\legsarea;

class legsareaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_legsarea= \App\legsarea::all();
        return view('legsarea',['data_legsarea'=>$data_legsarea]);
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
        $legsarea = legsarea::create($request->all());
        return redirect('legsarea');
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
        $legsarea = \App\legsarea::find($id);
        return view ('legsarea_edit',['legsarea' => $legsarea]);
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
        $legsarea = \App\legsarea::find($id);
        $legsarea->update($request->all());
        return redirect ('/legsarea')->with('sukses', 'Data berhasil diupdate');

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
        $legsarea=\App\legsarea::find($id);
        $legsarea->delete($legsarea);
        return redirect ('/legsarea')->with('sukses', 'Data berhasil dihapus');
    }
}
