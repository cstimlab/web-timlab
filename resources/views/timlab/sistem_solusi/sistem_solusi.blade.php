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
            <h1 style="color: #E8410E; font-weight: bold; font-size: 35px;">Sistem Solusi</h1><br>
            @if(auth()->user()) 
                <a href="/tambah_sistem_solusi"><button class="btn btn-primary">Tambah Data</button></a>
            @endif
        </div>
    </div>
    <div class="container">
        <div class="table-responsive table-hover" style="padding-bottom: 3%;">
            <table class="table" width="100%">
                <thead>
                    <tr>
                        <th align="center" width="10%" style="color: black; font-size: 20px;"><b>No</b></th>
                        <th align="center" width="30%" style="color: black; font-size: 20px;"><b>Kami menyediakan solusi berupa sistem yang sifatnya monitoring, seperti:</b></th>
                        <th align="center" width="15%" style="color: black; font-size: 20px;"><b></b></th>
                        @if(auth()->user()) 
                        <th align="center" width="15%" style="color: black; font-size: 20px;"><b>Aksi</b></th>
                        @endif
                    </tr>
                </thead>
                <tbody>
                    @foreach($solusi as $solusi)
                    <tr>
                        <td style="color: black; font-size: 15px;">{{$solusi->id_solusi}}</td>
                        <td style="color: black; font-size: 15px;">{{$solusi->solusi}}</td>
                        <td><img src="assets/images/solusi/{{$solusi->foto_solusi}}" width="65%" height="65%" alt=""></td>
                        @if(auth()->user()) 
                        <td style="color: black; font-size: 15px;">
                            <a href="/edit_sistem_solusi/{{$solusi->id_solusi}}">Edit</a>
                            <a href="/hapus_sistem_solusi/{{$solusi->id_solusi}}">Hapus</a>
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