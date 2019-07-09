@extends('apps.layout')
@section('sectionheader')
<section class="content-header">
    <h1>
      Create
      <small>Kategori</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-database"></i> Create</a></li>
      <li class="active">Kategori</li>
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
                        <form action="{{route('kategori.store')}}" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                {{csrf_field()}}
                                <label>Kategori </label>
                                <input class="form-control" name="nama_kategori">
                            </div>
                            <button class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
   </section>
@stop
