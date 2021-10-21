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
            <h1 style="color: #E8410E; font-weight: bold; font-size: 35px;">Edit Data Solusi</h1>
        </div>
        <form action="/update_solusi/{{$solusi->id_solusi}}/{{auth()->user()->name}}" method="POST" class="was-validated" enctype="multipart/form-data">
            {{csrf_field()}}  
            <div class="form-group">
                <label for="solusi">Solusi :</label>
                <input type="text" class="form-control" id="solusi" value="{{$solusi->solusi}}" name="solusi" required>
            </div>
            <div class="form-group">
                <label for="foto_solusi">Foto Solusi :</label>
                <input type="file" class="form-control" id="foto_solusi" value="{{$solusi->foto_solusi}}" name="foto_solusi">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@stop
