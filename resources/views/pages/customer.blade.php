@extends('apps.layout')
@section('sectionheader')
<section class="content-header">
    <h1>
      Data Customer
      <small>List Customer</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-database"></i> Master Data</a></li>
      <li class="active">Customer</li>
    </ol>
  </section>
@endsection
@section('content')
   <section class="content">
        <div class="box box-primary">
            {{-- <div class="box-header">
            <a class="btn btn-primary" href="{{route('databuku.create')}}"> Tambah Data</a>
            </div> --}}
            <div class="box-body">
                <table class="table">
                    <thead>
                        <th>Nama Lengkap</th>
                        <th>Foto</th>
                        <th>Alamat</th>
                        <th>Nomer Telepon</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        {{-- variabel dari controller ( index)  --}}
                        @foreach($customer as $key) 
                            <tr>
                            <td>{{$key->nama_lengkap}}</td> 
                           

                            <td><img src="{{asset($key->foto)}}" style="width:100px;height:100px;"></td>
                         

                            <td>{{$key->alamat}}</td> 
                           

                            <td>{{$key->nomor_telepon}}</td> 

                            
                            ini  berasal dari table
                            <td>
                                <a class="btn btn-danger" href="{{route('customer.delete',['id' => $key->id_pelanggan])}}"> Delete</a>
                            </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
   </section>
@stop
