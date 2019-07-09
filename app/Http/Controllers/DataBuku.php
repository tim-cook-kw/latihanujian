<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\databukuModel;
use App\KategoriBukuModel;
class DataBuku extends Controller
{
    public function index(){
        $table = DB::table('buku') ->join('kategori', 'kategori.id_kategori', '=', 'buku.id_kategori')
        ->select('buku.*', 'kategori.nama_kategori')
        ->get();
        return view('pages.index',['buku' => $table]);
    }
    public function store(Request $request){
        $fotovar = $request->file('foto');
        $bukuObject = new databukuModel();
        $bukuObject->judul_buku = $request->nama_buku;
        $bukuObject->penerbit = $request->penerbit;
        $bukuObject->penulis = $request->penulis;
        $bukuObject->id_kategori = $request->kategori;
        $bukuObject->deskripsi_singkat = $request->deskripsi;
        $bukuObject->foto = 'gambarbuku/'.$fotovar->getClientOriginalname();
        $path = $request->foto->storeAs('gambarbuku', $fotovar->getClientOriginalname());
        $bukuObject->save();
        return redirect()->route('buku.index');

    }
    public function update(Request $request,$id){
        $fotovar = $request->file('foto');
        $bukuObject = databukuModel::find($id);
        $bukuObject->judul_buku = $request->nama_buku;
        $bukuObject->penerbit = $request->penerbit;
        $bukuObject->penulis = $request->penulis;
        $bukuObject->id_kategori = $request->kategori;
        $bukuObject->deskripsi_singkat = $request->deskripsi;
        $bukuObject->foto = 'gambarbuku/'.$fotovar->getClientOriginalname();
        $path = $request->foto->storeAs('gambarbuku', $fotovar->getClientOriginalname());
        $bukuObject->save();
        return redirect()->route('buku.index');
    }
    public function edit($id){
        $kategoridata = KategoriBukuModel::all();
        $bukuedit = databukuModel::find($id);
        return view('pages.editbuku',['buku_edit' => $bukuedit,'kategori'=> $kategoridata]);
    }
    public function show($id){ 
        
    }
    public function create(){
        $kategoridata = KategoriBukuModel::all();

        return view('pages.createbuku',['kategori'=>$kategoridata]);
    }
    public function destroy($id){
        
    }
}
