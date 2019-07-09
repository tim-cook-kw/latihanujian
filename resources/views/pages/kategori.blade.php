@extends('apps.layout')
@section('sectionheader')
<section class="content-header">
    <h1>
      Kategori
      <small>List Kategori</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-database"></i> Master Data</a></li>
      <li class="active">Kategori</li>
    </ol>
  </section>
@endsection
@section('content')
   <section class="content">
        <div class="box box-primary">
            <div class="box-header">
            <a class="btn btn-primary" href="{{route('kategori.create')}}"> Tambah Data</a>
            </div>
            <div class="box-body">
                <table class="table">
                    <thead>
                        <th>Nama Kategori</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        {{-- variabel dari controller ( index)  --}}
                        @foreach($kategori as $key) 
                            <tr>
                            <td>{{$key->nama_kategori}}</td> 
                             {{-- ini  berasal dari table --}}
                            <td>
                                <a class="btn btn-success" href="{{route('kategori.edit',['id' => $key->id_kategori])}}"> Update</a>
                                <a class="btn btn-danger" href="{{route('kategori.destroy',['id' => $key->id_kategori])}}"> Delete</a>
                            </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
   </section>
@stop
