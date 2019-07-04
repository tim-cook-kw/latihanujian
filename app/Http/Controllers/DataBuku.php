<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataBuku as BukuModel;

class DataBuku extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $BukuModel = BukuModel::all();
        return view('pages.index',['buku' => $BukuModel]); //Menampilkan Seluruh Data
     
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.createbuku');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $BukuModel = new BukuModel();
        $BukuModel->judul_buku = $request->input('nama_buku'); //namatabel = nama form

        $BukuModel->penerbit = $request->input('penerbit');
        $BukuModel->penulis = $request->input('penulis');

        $BukuModel->id_kategori = $request->input('kategori');
        $BukuModel->deskripsi_singkat = $request->input('deskripsi');
         
        $BukuModel->save();
        return redirect()->route('buku.index');
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
        $BukuModel = BukuModel::find($id);
        return view('pages.editbuku',['buku_edit'=>$BukuModel]);
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
        $BukuModel = BukuModel::find($id);
        $BukuModel->judul_buku = $request->input('nama_buku'); //namatabel = nama form

        $BukuModel->penerbit = $request->input('penerbit');
        $BukuModel->penulis = $request->input('penulis');

        $BukuModel->id_kategori = $request->input('kategori');
        $BukuModel->deskripsi_singkat = $request->input('deskripsi');
        $BukuModel->save();
        return redirect()->route('buku.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $BukuModel = BukuModel::find($id);
        $BukuModel->delete();
        return redirect()->route('buku.index');
    }
}
