@extends('layouts.layout')
@section('content')
    <br>
    <div class="container">
      <h2>Update Proses</h2>
      <br>
      <form action="/edit_status_custom/{{$order->id_order}}/update" method="POST" class="was-validated">
        {{csrf_field()}}  
        <div class="form-group">
            <label for="status">Proses Pesanan :</label>
            <select name="status" id="status" class="form-control">
                <option value="Belum Di Proses" @if($order->status == 'Belum Di Proses') selected @endif>Belum Di Proses</option>
                <option value="Proses" @if($order->status == 'Proses') selected @endif>Proses</option>
                <option value="Selesai Proses" @if($order->status == 'Selesai Proses') selected @endif>Selesai Proses</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
    </div>
@stop
