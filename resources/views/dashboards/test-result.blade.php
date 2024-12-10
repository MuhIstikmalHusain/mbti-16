@extends('layouts.master')

@section('main-konten')
<section id="test" class="test section">
    <div class="container section-title" data-aos="fade-up">
        <h2>TEST RESULT<br></h2>
        <p>Terimakasih telah mengikuti test ini. Berikut adalah hasil Test Anda</p>
        <p> </p>
        <h2>Tipe Kepribadian Anda Adalah <a href="/tipe-kepribadian">{{$type}}</a></h2>

    </div>

    <div class="containerqs form-center">
<!--         
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
        <h3>Anda adalah Seseorang yang {{ $questionPerspektif }}</h3><br> -->

        <a href="/test" class="btn-get-started">Kembali Ke Tes</a>
    </div>

</section>
@endsection