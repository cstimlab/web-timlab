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
    <div class="row" style="padding-left: 5%; padding-right: 5%; padding-top: 7%; text-align:center; padding-bottom: 3%;">
        <div class="col-md">
            <h1 style="color: #E8410E; font-weight: bold; font-size: 40px;">Topic Terkini</h1><br>
        </div>
    </div>
    <div class="container text-center">
        <div class="row" style="padding-left: 5%; padding-right: 5%; padding-top: 3%;">
            @foreach($topic as $topic)
            <div class="col-md-6">
                <div>
                    <div><p style="color: #E8410E; font-size: 30px; font-weight:bold; line-height: 1.2">{{$topic->topic}}</p></div>
                    <div><a href="/topic" style=" font-size: 15px; font-weight:bold; padding-bottom:5%;">Selengkapnya ></a></div><br><br><br><br>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@stop