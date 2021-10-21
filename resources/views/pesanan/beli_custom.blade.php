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
            <h1 style="color: #E8410E; font-weight: bold; font-size: 35px;">Beli Sesuai Permintaan</h1>
        </div>
        <form action="/store_beli_custom" method="POST" class="was-validated">
            {{csrf_field()}}  
            <div class="form-group">
                <label for="name">Nama :</label>
                <input type="text" class="form-control" id="name" placeholder="" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Alamat Email :</label>
                <input type="email" class="form-control" id="email" placeholder="" name="email" required>
            </div>
            <div class="form-group">
                <label for="tlp">Nomor Telfon :</label>
                <input type="number" class="form-control" id="tlp" placeholder="" name="tlp" required>
            </div>
            <div class="form-group">
                <label for="barang_order">Barang Yang Diinginkan :</label>
                <textarea class="form-control" id="barang_order" name="barang_order" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@stop