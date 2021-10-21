@extends('layouts.layout')
@section('content')
    <div class="container" style="padding-top: 7%; padding-bottom: 3%;">
        <div class="row">
            <div class="col-md text-center">
                <img src="assets/images/user.png" alt="user" width="20%" height="75%">
            </div>
            <form action="/postlogin" method="POST" class="was-validated">
                {{csrf_field()}}  
                <div class="form-group">
                    <label for="name">Nama :</label>
                    <input type="name" class="form-control" id="name" placeholder="" name="name" required>
                </div>
                <div class="form-group">
                    <label for="tlp">Password :</label>
                    <input type="password" class="form-control" id="tlp" placeholder="" name="password" required>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@include('sweetalert::alert')
@stop