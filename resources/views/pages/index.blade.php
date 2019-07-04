@extends('apps.layout')
@section('sectionheader')
<section class="content-header">
    <h1>
      Create
      <small>List Buku</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-database"></i> Master Data</a></li>
      <li class="active">Buku</li>
    </ol>
  </section>
@endsection
@section('content')
   <section class="content">
        <div class="box box-primary">
            <div class="box-header">
            <a class="btn btn-primary" href="{{route('databuku.create')}}"> Tambah Data</a>
            </div>
            <div class="box-body">
                <table class="table">
                    <thead>
                        <th>Judul Buku</th>
                        <th>Penerbit Buku</th>
                        <th>Penulis Buku</th>
                        <th>Kategori Buku</th>
                        <th>Deskripsi Buku</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        {{-- variabel dari controller ( index)  --}}
                        @foreach($buku as $key) 
                            <tr>
                            <td>{{$key->judul_buku}}</td> 
                           

                            <td>{{$key->penerbit}}</td> 
                         

                            <td>{{$key->penulis}}</td> 
                           

                            <td>{{$key->id_kategori}}</td> 

                            <td>{{$key->deskripsi_singkat}}</td> 
                            {{-- ini  berasal dari table --}}
                            <td>
                                <a class="btn btn-success" href="{{route('databuku.edit',['id' => $key->id_buku])}}"> Update</a>
                                <a class="btn btn-danger" href="{{route('databuku.destroy',['id' => $key->id_buku])}}"> Delete</a>
                            </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
   </section>
@stop
