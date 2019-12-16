<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\haircut;

class haircutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_haircut= \App\haircut::all();
        return view('haircut',['data_haircut'=>$data_haircut]);
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
        $haircut = haircut::create($request->all());
        return redirect('haircut');
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
        $haircut = \App\Haircut::find($id);
        return view ('haircut_edit',['haircut' => $haircut]);
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
        $haircut = \App\haircut::find($id);
        $haircut->update($request->all());
        return redirect ('/haircut')->with('sukses', 'Data berhasil diupdate');

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
        $haircut=\App\Haircut::find($id);
        $haircut->delete($haircut);
        return redirect ('/haircut')->with('sukses', 'Data berhasil dihapus');
    }
}
