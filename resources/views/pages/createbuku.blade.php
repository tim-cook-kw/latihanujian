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
                        <form action="{{route('databuku.store')}}" method="POST">
                            <div class="form-group">
                                
                                {{csrf_field()}}
                                <label>Judul Buku</label>
                                <input class="form-control" name="nama_buku">

                                <label>Penerbit Buku</label>
                                <input class="form-control" name="penerbit">

                                <label>Penulis Buku</label>
                                <input class="form-control" name="penulis">

                                <label>Kategori Buku</label>
                                <input class="form-control" name="kategori">

                                <label>Deskripsi Singkat</label>
                                <input class="form-control" name="deskripsi">
                            </div>
                            <button class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
   </section>
@stop
