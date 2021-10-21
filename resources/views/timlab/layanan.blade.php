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
    <section style="background:white; width:100%">
        <div class="row" style="padding-left: 5%; padding-right: 5%; padding-top: 7%; padding-bottom: 3%;">
            <div class="col-md">
                <h1 style="color: #E8410E; font-weight: bold; font-size: 35px;">Layanan</h1><br>
                <p style="color: black; font-size: 20px; line-height: 1.2">TIMLAB menawarkan layanan layanan untuk membantu Anda merancang dan membangun solusi khusus untuk memenuhi kebutuhan Anda.</p>
                <p style="color: black; font-size: 20px; line-height: 1.2">Pilih dari kategori aplikasi di bawah ini dan <a href="/beli_custom">klik tautan</a> untuk mengirimkan informasi tentang kebutuhan dukungan desain aplikasi Anda kepada kami. Tim teknik desain kami akan meninjau informasi Anda dan menghubungi Anda dengan rekomendasi produk dan informasi tambahan.</p>
            </div>
        </div>
    </section>
    <div class="row" style="padding-left: 5%; padding-right: 5%; padding-top: 3%; padding-bottom: 2%;">
        @foreach($layanan as $layanan)
        <div class="col-md-4">
            <div>
                <div><p class="text-center" style="color: #E8410E; font-size: 20px; font-weight:bold; line-height: 1.2">{{$layanan->layanan}}</p></div>
                <div><p class="text-center" style="color: black; font-size: 20px; padding-bottom:3%; line-height: 1.2">{{$layanan->deskripsi_layanan}}</p></div>
            </div>
        </div>
        @endforeach
    </div>
    <section style="background:white; width:100%">
        <div class="row text-center" style="padding-left: 5%; padding-right: 5%; padding-top: 3%; padding-bottom: 3%;">
            <div class="col-md">
                <h1 style="color: #E8410E; font-weight: bold; font-size: 35px;">Sampaikan pendapat Anda agar kami bisa membantu</h1><br>
                <p style="color: black; font-size: 20px; line-height: 1.2">Di sini kami telah menyusun daftar topik yang terkait dengan penawaran teknologi kami. Klik untuk melanjutkan membaca berdasarkan bidang yang Anda minati.</p>
            </div>
        </div>
        <div class="container" style="padding-bottom:3%; font-size:15px; color:black;">
            <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed justify-content-center" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        Produk apa saja yang bisa di servis?
                    </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            Semua kategori produk kami (antena, pemancar, sistem solusi)
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                            Berapa harga servisnya?
                        </button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            Harga bervariasi tergantung kompleksitas sistemnya      
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                            Apakah bisa konsultasi dulu?
                        </button>
                    </h2>
                    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            Bisa, silahkan hubungi kontak yang tertera di website kami      
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                            Apakah ada garansi setelah servis?
                        </button>
                    </h2>
                    <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            Ada      
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingFive">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                            Apakah bisa servis selain produk TIMLAB?
                        </button>
                    </h2>
                    <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            Bisa, kami menerima produk lain di luar produk TIMLAB       
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> 
</div>
@include('sweetalert::alert')
@stop