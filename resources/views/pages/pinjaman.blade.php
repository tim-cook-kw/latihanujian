@extends('apps.layout')
@section('sectionheader')
    <h1>
        Pinjaman
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Pinjaman</li>
      </ol>
@endsection
@section('content')
<div class="box box-primary">
    <div class="box-header">
    </div>
    <div class="box-body">
        <table class="table">
        <thead>
            <th>Kode Pinjaman</th>                
            <th>Qr Code</th>
            <th>Lama Pinjaman</th>
            <th>Biaya</th>
            <th>Status</th>
            <th>Denda</th>
        </thead>
        <tbody>
        @foreach($pinjaman as $item)
        <tr>
            <td>{{$item->kode_pinjaman}}</td>
            <td>{{$item->qr_code}}</td>
            <td>{{$item->lama_pinjaman}}</td>
            <td>{{$item->biaya}}</td>
            <td>{{$item->status}}</td>
            <td>{{$item->denda}}</td>
        </tr>
        @endforeach
        </tbody>
        </table>
    </div>
</div>    
@endsection