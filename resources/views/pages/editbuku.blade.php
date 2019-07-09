@extends('apps.layout')
@section('sectionheader')
<section class="content-header">
    <h1>
      Create
      <small>Data Buku</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-database"></i> Create</a></li>
      <li class="active">Data Buku</li>
    </ol>
  </section>
@endsection
@section('content')
   <section class="content">
        <div class="box box-primary">
            <div class="box-header">
                
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-md-6">
                        <form action="{{route('databuku.update',['id' => $buku_edit->id_buku])}}" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                
                                {{csrf_field()}}
                                <label>Judul Buku</label>
                                <input class="form-control" name="nama_buku"  value="{{$buku_edit->judul_buku}}">

                                <label>Penerbit Buku</label>
                                <input class="form-control" name="penerbit"  value="{{$buku_edit->penerbit}}">

                                <label>Penulis Buku</label>
                                <input class="form-control" name="penulis"  value="{{$buku_edit->penulis}}">
                                <label>Kategori Buku</label>
                                <select class="form-control" name="kategori" value="{{$buku_edit->id_kategori}}">
                                    @foreach($kategori as $key)
                                        <option value="{{$key->id_kategori}}">{{$key->nama_kategori}}</option>
                                    @endforeach
                                </select>
                                <label>Deskripsi Singkat</label>
                                <input class="form-control" name="deskripsi"  value="{{$buku_edit->deskripsi_singkat}}">
                                
                                <label>Foto</label>
                                <input type="file" class="form-control" name="foto">

                            </div>
                            <button class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
   </section>
@stop
