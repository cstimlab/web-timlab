@extends('layouts.layout')
@section('content')
<style>
  @media screen and (max-width: 1370px) {
    .container-fluid{
      padding-top:14%;
    }
  }
</style>
<div class="container-fluid">    
    <div class="row" style="padding-left: 5%; padding-right: 5%; padding-top:7%; padding-bottom: 3%;">
        <div class="col-md">
            <h1 style="color: #E8410E; font-weight: bold; font-size: 35px;">Tambah Data Antenna</h1>
        </div>
        <form action="/update_antenna/{{$catalog->id_barang}}/{{auth()->user()->name}}" method="POST" class="was-validated" enctype="multipart/form-data">
            {{csrf_field()}}  
            <div class="form-group">
                <label for="foto_barang">Foto Barang :</label>
                <input type="file" class="form-control" id="foto_barang" value="{{$catalog->foto_barang}}" name="foto_barang">
            </div>
            <div class="form-group">
                <label for="nama_barang">Nama Barang :</label>
                <input type="text" class="form-control" id="nama_barang" value="{{$catalog->nama_barang}}" name="nama_barang" required>
            </div>
            <div class="form-group">
                <label for="stok">Stok :</label>
                <input type="number" class="form-control" id="stok" value="{{$catalog->stok}}" name="stok" required>
            </div>
            <div class="form-group">
                <label for="manual">Manual :</label>
                <input type="file" class="form-control" id="manual" value="{{$catalog->foto_barang}}" name="manual">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@stop
