@extends('layouts.master')

@section('main-konten')

<section>
    <!-- Page Title -->
    <div class="page-title1">
        <div class="heading">
            <div class="row d-flex justify-content-center text-center">
                <div class="col-lg-8">
                    <h1>Detail Kepribadian MBTI</h1>
                    <p class="mb-0">MBTI dapat membantu individu untuk memperoleh pemahaman yang lebih baik tentang kemampuan mereka dalam berinteraksi dengan orang lain, memecahkan masalah, hingga menentukan pilihan karir. Selain itu MBTI juga dapat membantu individu memahami karakteristik orang lain sehingga dapat membangun hubungan yang lebih baik, baik itu hubungan pertemanan maupun percintaan.</p>
                </div>
            </div>
        </div>
    </div><!-- End Page Title -->
    <!-- Service Details Section -->
    <section id="service-details" class="service-details section">


        <div class="container">

            <div class="" data-aos="fade-up" data-aos-delay="200">
                <img src="{{asset($personality->image)}}" alt="" class="img-fluid services-img" style="width: 500px; height: auto; display: block; margin: auto;">
                <h2>{{$personality->type}}</h2>
                <p>{{$personality->description}}</p>
                <p>
                    {{$personality->karakteristik}}
                </p>

                <h1>Pilihan Karir Terbaik</h1>
                <p>
                    {{$personality->karrier}}
                </p>
            </div>

        </div>

    </section><!-- /Service Details Section -->
</section>

@endsection