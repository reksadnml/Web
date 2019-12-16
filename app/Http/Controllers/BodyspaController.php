<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\bodyspa;

class bodyspaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_bodyspa= \App\bodyspa::all();
        return view('bodyspa',['data_bodyspa'=>$data_bodyspa]);
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
        $bodyspa = bodyspa::create($request->all());
        return redirect('bodyspa');
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
        $bodyspa = \App\bodyspa::find($id);
        return view ('bodyspa_edit',['bodyspa' => $bodyspa]);
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
        $bodyspa = \App\bodyspa::find($id);
        $bodyspa->update($request->all());
        return redirect ('/bodyspa')->with('sukses', 'Data berhasil diupdate');

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
        $bodyspa=\App\bodyspa::find($id);
        $bodyspa->delete($bodyspa);
        return redirect ('/bodyspa')->with('sukses', 'Data berhasil dihapus');
    }
}
