<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KategoriBukuModel;
class KategoriBuku extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategoribuku = KategoriBukuModel::all();
        return view('pages.kategori',['kategori' => $kategoribuku]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.createkategori');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kategoriObject = new KategoriBukuModel();
        $kategoriObject->nama_kategori = $request->nama_kategori;
        $kategoriObject->save();
        return redirect()->route('kategori.index');
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
        $kategori = KategoriBukuModel::find($id);
        return view('pages.editkategori',['edit_kategori' => $kategori]);
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
        $kategoriObject = KategoriBukuModel::find($id);
        $kategoriObject->nama_kategori = $request->nama_kategori;
        $kategoriObject->save();
        return redirect()->route('kategori.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kategoriObject = KategoriBukuModel::find($id);
        $kategoriObject->delete();
        return redirect()->route('kategori.index');
    }
}
