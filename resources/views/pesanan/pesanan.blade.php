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
            <h1 style="color: #E8410E; font-weight: bold; font-size: 35px;">Pesanan</h1><br>
        </div>
    </div>
    <div class="container">
        <div class="table-responsive table-hover" style="padding-bottom: 3%;">
            <table class="table" width="100%">
                <thead>
                    <tr>
                        <th align="center" width="15%" style="color: black; font-size: 20px;"><b>Nama Barang</b></th>
                        <th align="center" width="15%" style="color: black; font-size: 20px;"><b>Jumlah</b></th>
                        <th align="center" width="15%" style="color: black; font-size: 20px;"><b>Nama Pembeli</b></th>
                        <th align="center" width="15%" style="color: black; font-size: 20px;"><b>Email</b></th>
                        <th align="center" width="15%" style="color: black; font-size: 20px;"><b>Tlp</b></th>
                        <th align="center" width="15%" style="color: black; font-size: 20px;"><b>Status</b></th>
                        @if(auth()->user()) 
                        <th align="center" width="10%" style="color: black; font-size: 20px;"><b>Aksi</b></th>
                        @endif
                    </tr>
                </thead>
                <tbody>
                    @foreach($beli as $beli)
                    <tr>
                        <td style="color: black; font-size: 15px;">{{$beli->nama_barang}}</td>
                        <td style="color: black; font-size: 15px;">{{$beli->jumlah}}</td>
                        <td style="color: black; font-size: 15px;">{{$beli->name}}</td>
                        <td style="color: black; font-size: 15px;">{{$beli->email}}</td>
                        <td style="color: black; font-size: 15px;">{{$beli->tlp}}</td>
                        <td style="color: black; font-size: 15px;">{{$beli->status}}</td>
                        <td style="color: black; font-size: 15px;">
                            <a href="/edit_status/{{$beli->id_beli}}">Edit Status</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="row text-center" style="padding-top: 7%; padding-bottom: 3%;">
        <div class="col-md">
            <h1 style="color: #E8410E; font-weight: bold; font-size: 35px;">Pesanan Custom</h1><br>
        </div>
    </div>
    <div class="container">
        <div class="table-responsive table-hover" style="padding-bottom: 3%;">
            <table class="table" width="100%">
                <thead>
                    <tr>
                        <th align="center" width="15%" style="color: black; font-size: 20px;"><b>Nama Barang Custom</b></th>
                        <th align="center" width="15%" style="color: black; font-size: 20px;"><b>Jumlah</b></th>
                        <th align="center" width="15%" style="color: black; font-size: 20px;"><b>Nama Pembeli</b></th>
                        <th align="center" width="15%" style="color: black; font-size: 20px;"><b>Email</b></th>
                        <th align="center" width="15%" style="color: black; font-size: 20px;"><b>Tlp</b></th>
                        <th align="center" width="15%" style="color: black; font-size: 20px;"><b>Status</b></th>
                        @if(auth()->user()) 
                        <th align="center" width="10%" style="color: black; font-size: 20px;"><b>Aksi</b></th>
                        @endif
                    </tr>
                </thead>
                <tbody>
                    @foreach($order as $order)
                    <tr>
                        <td style="color: black; font-size: 15px;">{{$order->barang_order}}</td>
                        <td style="color: black; font-size: 15px;">{{$order->jumlah}}</td>
                        <td style="color: black; font-size: 15px;">{{$order->name}}</td>
                        <td style="color: black; font-size: 15px;">{{$order->email}}</td>
                        <td style="color: black; font-size: 15px;">{{$order->tlp}}</td>
                        <td style="color: black; font-size: 15px;">{{$order->status}}</td>
                        <td style="color: black; font-size: 15px;">
                            <a href="/edit_status_custom/{{$order->id_order}}">Edit Status</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@include('sweetalert::alert')
@stop