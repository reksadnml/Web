<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\paketcantik;

class paketcantikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_paketcantik= \App\paketcantik::all();
        return view('paketcantik',['data_paketcantik'=>$data_paketcantik]);
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
        $paketcantik = paketcantik::create($request->all());
        return redirect('paketcantik');
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
        $paketcantik = \App\paketcantik::find($id);
        return view ('paketcantik_edit',['paketcantik' => $paketcantik]);
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
        $paketcantik = \App\paketcantik::find($id);
        $paketcantik->update($request->all());
        return redirect ('/paketcantik')->with('sukses', 'Data berhasil diupdate');

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
        $paketcantik=\App\paketcantik::find($id);
        $paketcantik->delete($paketcantik);
        return redirect ('/paketcantik')->with('sukses', 'Data berhasil dihapus');
    }
}
