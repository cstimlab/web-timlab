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
            <h1 style="color: #E8410E; font-weight: bold; font-size: 35px;">Visi dan Misi</h1><br>
            <p style="color: black; font-size: 20px; line-height: 1.2">Perusahaan dalam negeri dengan teknologi tinggi bergerak di bidang radio telekomunikasi yang mendukung pembangunan infrastruktur telekomunikasi Indonesia.</p>
            <p style="color: black; font-size: 20px; line-height: 1.2">Menjadi perusahaan yang mandiri yang dapat menciptakan lapangan kerja luas bagi masyarakat Indonesia.</p>
        </div>
    </div>
    <div class="row" style="padding-left: 5%; padding-right: 5%; padding-bottom: 3%;">
        <div class="col-md">
            <h1 style="color: #E8410E; font-weight: bold; font-size: 35px;">Profil Perusahaan</h1><br>
            <p style="color: black; font-size: 20px; line-height: 1.2">TIMLAB adalah unit usaha dari PT. Techen Indonesia Makmur yang dan bergerak dalam bidang radio telekomunikasi.</p>
            <p style="color: black; font-size: 20px; line-height: 1.2">Tujuan dan visi yang kuat untuk dapat bersaing dengan kompetitor yang ada karena kami memiliki kemampuan dan pengalaman panjang dalam penelitian dan pengembangan komunikasi radio dan produksi peralatan komunikasi radio sejak tahun 2002. Merk lokal yang menawarkan produk inovatif untuk menjawab kebutuhan calon pelanggan akan produk inovatif.</p>
            <p style="color: black; font-size: 20px; line-height: 1.2">Teknologi beamforming system dalam  antenna array, serta teknologi berbasis SDR (Software Defined Radio) menjadi basis  pengembangangan usaha untuk menyediakan solusi bagi kebutuhan skala kecil, menengah maupun besar dalam teknologi telekomunikasi dan IT.</p>
        </div>
    </div>
    <div class="row" style="padding-left: 5%; padding-right: 5%; padding-bottom: 3%;">
        <div class="col-md">
            <h1 style="color: #E8410E; font-weight: bold; font-size: 35px;">Komentar & Saran</h1>
        </div>
        <form action="/store_komen" method="POST" class="was-validated">
            {{csrf_field()}}  
            <div class="form-group">
                <label for="nama_depan">Nama Depan :</label>
                <input type="text" class="form-control" id="nama_depan" placeholder="" name="nama_depan" required>
            </div>
            <div class="form-group">
                <label for="nama_belakang">Nama Belakang :</label>
                <input type="text" class="form-control" id="nama_belakang" placeholder="" name="nama_belakang" required>
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
                <label for="komen">Komentar :</label>
                <textarea class="form-control" id="komen" name="komen" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@include('sweetalert::alert')
@stop