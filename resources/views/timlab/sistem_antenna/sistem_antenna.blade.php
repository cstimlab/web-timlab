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
    <div class="row text-center" style="padding-top: 7%; padding-bottom: 3%;">
        <div class="col-md">
            <h1 style="color: #E8410E; font-weight: bold; font-size: 35px;">Komponen & Antenna</h1><br>
            @if(auth()->user()) 
                <a href="/tambah_sistem_antenna"><button class="btn btn-primary">Tambah Data</button></a>
            @endif
        </div>
    </div>
    <div class="container">
        <div class="table-responsive table-hover" style="padding-bottom: 3%;">
            <table class="table" width="100%">
                <thead>
                    <tr>
                        <th align="center" width="15%" style="color: black; font-size: 20px;"><b>Foto Barang</b></th>
                        <th align="center" width="30%" style="color: black; font-size: 20px;"><b>Nama Barang</b></th>
                        <th align="center" width="10%" style="color: black; font-size: 20px;"><b>Info</b></th>
                        @if(auth()->user()) 
                        <th align="center" width="10%" style="color: black; font-size: 20px;"><b>Aksi</b></th>
                        @endif
                        @if(!auth()->user()) 
                        <th align="center" width="10%" style="color: black; font-size: 20px;"><b>Beli</b></th>
                        @endif
                    </tr>
                </thead>
                <tbody>
                    @foreach($catalog as $catalog)
                    <tr>
                        <td><img src="assets/images/catalog/{{$catalog->foto_barang}}" width="70%" height="70%" alt=""></td>
                        <td style="color: black; font-size: 15px;">{{$catalog->nama_barang}}</td>
                        <td style="color: black; font-size: 15px;"><a href="assets/manual/{{$catalog->manual}}">Info</a></td>
                        @if(auth()->user()) 
                        <td style="color: black; font-size: 15px;">
                            <a href="/edit_sistem_antenna/{{$catalog->id_barang}}">Edit</a>
                            <a href="/hapus_sistem_antenna/{{$catalog->id_barang}}">Hapus</a>
                        </td>
                        @endif
                        @if(!auth()->user()) 
                        <td>
                            <a href="/beli/{{$catalog->nama_barang}}">Beli</a>
                        </td>
                        @endif
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@include('sweetalert::alert')
@stop