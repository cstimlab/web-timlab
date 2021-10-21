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
    <div class="row" style="padding-left: 5%; padding-right: 5%; padding-top: 7%; padding-bottom: 3%;">
        <div class="col-md">
            <h1 style="color: #E8410E; font-weight: bold; font-size: 35px;">Penawaran Utama Kami</h1><br>
            <p style="color: black; font-size: 20px; line-height: 1.2">Portofolio produk dan solusi kami yang komprehensif memberikan kedalaman dan keluasan untuk membantu memenuhi kebutuhan Anda yang dapat disesuaikan saat Anda ingin tetap menjadi yang terdepan dalam lingkungan yang bergerak cepat ini.</p>
            <p style="color: black; font-size: 20px; line-height: 1.2">Cari tahu bagaimana kami mendukung unit pemerintah, penyedia layanan komunikasi menangani konsumen dan perusahaan dengan menjelajahi penawaran utama kami atau melihat-lihat produk dan solusi kami.</p>
        </div>
    </div>
    <div class="row" style="padding-left: 5%; padding-right: 5%; padding-bottom: 3%;">
        <div class="col-md">
            <h1 style="color: #E8410E; font-weight: bold; font-size: 35px;">Produk dan Solusi</h1><br>
            <p style="color: black; font-size: 20px; line-height: 1.2">
                Bagi mereka yang membutuhkan produk efektif untuk melayani masyarakat agar memiliki 'layanan andal' dengan 'budget terjangkau’
                dalam Radio Komunikasi, produk TIMLAB yang dirancang untuk bekerja, menjalankan bisnis, dan belajar
                dari jarak jauh untuk melakukan aktivitas, dapat membantu menyelesaikan masalah sehari-hari Anda.
            </p>
            <p style="color: black; font-size: 20px; line-height: 1.2">Pilih produk dan kami akan mencarikan solusi terbaik untuk Anda</p>
        </div>
    </div>
    <div class="row justify-content-md-center" style="padding-left: 5%; padding-right: 5%; padding-bottom: 3%;">
        <div class="col-md" style="text-align: center;">
            <a href="/sistem_antenna">										
                <h1 style="color: #E8410E; font-weight: bold; font-size: 35px;">Sistem Antenna</h1><br>
                <p style="color: black; font-size: 20px; line-height: 1.2">Pengalaman Yang Lebih Fleksibel</p><br>
                <span style="font-size: 15px;">Selengkapnya ></span>
            </a><br>
        </div>
        <div class="col-md" style="text-align: center;">
            <a href="/sistem_solusi">
                <h1 style="color: #E8410E; font-weight: bold; font-size: 35px;">Sistem Solusi</h1><br>										
                <p style="color: black; font-size: 20px; line-height: 1.2">Menyelesaikan Masalah Dengan Cepat dan Tepat</p><br>
                <span style="font-size: 15px;">Selengkapnya ></span>
            </a><br>
        </div>
    </div>
    <div class="row justify-content-md-center" style="padding-left: 5%; padding-right: 5%; padding-bottom: 3%;">
      <div><h1 style="text-align:center;color: #E8410E; font-weight: bold; padding-bottom: 2%; font-size: 35px;">Layanan</h1></div>
      @foreach($layanan as $layanan)
        <div class="col-md" style="text-align: center;">
            <a href="/sistem_antenna">										
                <p style="color: black; font-size: 20px; line-height: 1.2">{{$layanan->layanan}}</p><br>
            </a><br>
        </div>
      @endforeach
    </div>
    <center>
    <div class="row" style="padding-left: 5%; padding-right: 5%;">
        <div class="col-md">
            <h1 style="color: #E8410E; font-weight: bold; font-size: 35px;">Topik Terkini</h1><br>
        </div>
    </div>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
      </ol>
      <div class="carousel-inner" style="padding-bottom:5%;">
        <div class="carousel-item active">
          <img class="d-block w-50" src="assets/images/Group 1.png" alt="First slide">
          <div class="carousel-caption d-none d-md-block">
            <a style="font-size: 20px;" href="/topic">Selengkapnya ></a>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-50" src="assets/images/Group 2.png" alt="Second slide">
          <div class="carousel-caption d-none d-md-block">
            <a style="font-size: 20px;" href="/topic">Selengkapnya ></a>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-50" src="assets/images/Group 3.png" alt="Third slide">
          <div class="carousel-caption d-none d-md-block">
            <a style="font-size: 20px;" href="/topic">Selengkapnya ></a>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-50" src="assets/images/Group 4.png" alt="Four slide">
          <div class="carousel-caption d-none d-md-block">
            <a style="font-size: 20px;" href="/topic">Selengkapnya ></a>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" style="padding-left: 14%;" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" style="padding-right: 14%;"href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><br>
    </center>
</div>
@include('sweetalert::alert')
@stop