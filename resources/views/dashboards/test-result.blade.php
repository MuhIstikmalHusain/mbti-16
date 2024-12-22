@extends('layouts.master')

@section('main-konten')
<section id="test" class="test section">
    <div class="section-title" data-aos="fade-up">
        <!-- Page Title -->
        <div class="page-title1">
            <div class="heading">
                <div class="row d-flex justify-content-center text-center">
                    <div class="col-lg-8">
                        <h1>Test Result</h1>
                        <p class="mb-0">Terimakasih telah mengikuti Tes MBTI ini. Berikut adalah hasil test anda</p>
                    </div>
                </div>
            </div>
        </div><!-- End Page Title -->


        <h2>Tipe Kepribadian Anda Adalah <a href="{{ route('personality-details', ['type' => $personality->type]) }}">{{$type}}</a></h2>
        <div>
            <img src="{{asset($personality->image)}}" alt="" class="img-fluid services-img" style="width: 200px; height: auto;">
        </div>
        <p>{{$personality->description}}</p>


    </div>

    <div class="containerqs form-center">

        <h3>Berdasarkan Cara Anda Menyalurkan Energi</h3>
        <p>Total nilai "I" (Introvert) : {{ $countI }}</p>
        <p>Total nilai "E" (Ekstrovert) : {{ $countE }}</p>
        <h3>Anda adalah Seseorang yang {{ $questionEnergi }}</h3><br>

        <h3>Berdasarkan Cara Anda Menerima Informasi</h3>
        <p>Total nilai "N" (Intuitiv) : {{ $countN }}</p>
        <p>Total nilai "S" (Sensing) : {{ $countS }}</p>
        <h3>Anda adalah Seseorang yang {{ $questionInformasi }}</h3><br>

        <h3>Berdasarkan Cara Anda Membuat Keputusan</h3>
        <p>Total nilai "T" (Thinking) : {{ $countT }}</p>
        <p>Total nilai "F" (Feeling) : {{ $countF }}</p>
        <h3>Anda adalah Seseorang yang {{ $questionChoose }}</h3><br>

        <h3>Berdasarkan Cara Anda Menyikapi Dunia Luar</h3>
        <p>Total nilai "J" (Judging) : {{ $countJ }}</p>
        <p>Total nilai "P" (Perceiving) : {{ $countP }}</p>
        <h3>Anda adalah Seseorang yang {{ $questionPerspektif }}</h3><br>

    </div>
    <div class="container form-center">
        <a href="/test" class="btn-get-started">Kembali Ke Tes</a>
    </div>

</section>
@endsection