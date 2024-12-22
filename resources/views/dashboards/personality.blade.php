@extends('layouts.master')

@section('main-konten')

<!-- Services Section -->
<section id="services" class="services section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        
        <h2>Tipe Kepribadian MBTI</h2>
        <div class="" style="text-align:justify">
            <p>
                Selamat datang di halaman eksplorasi kami tentang kepribadian manusia, sebuah kerangka dalam memahami preferensi psikologis individu dan bagaimana hal tersebut mempengaruhi interaksi manusia dengan dunia sekitar. Inti dari sistem ini adalah agar kita dapat memahami perbedaan antara introvert dan ekstrovert, logika dan perasaan, sensor dan intuisi, penilaian dan persepsi. Masing-masing dari 16 tipe kepribadian memiliki cara pandang unik untuk melihat lingkungan kita, membimbing perilaku, hubungan, dan bahkan pilihan karir.
            </p><br>
            <p>
                Sebelum membahas lebih dalam tentang 16 tipe kepribadian ada baiknya kita mengenal MBTI. MBTI adalah singkatan dari Myers-Briggs Type Indicator yaitu sebuah tes psikologi yang digunakan untuk mengidentifikasi preferensi psikologis seseorang. Tes ini berdasarkan teori psikologi yang dikembangkan oleh Carl Jung tentang fungsi kognitif manusia. MBTI dapat membantu individu untuk memperoleh pemahaman yang lebih baik tentang kemampuan mereka dalam berinteraksi dengan orang lain, memecahkan masalah, hingga menentukan pilihan karir. Selain itu MBTI juga dapat membantu individu memahami karakteristik orang lain sehingga dapat membangun hubungan yang lebih baik, baik itu hubungan pertemanan maupun percintaan.
            </p>
        </div>

        <!-- End Section Title -->

        <div class="container section-title" data-aos="fade-up">
            <h2>Kategori MBTI</h2>
            <h5>MBTI mengkategorikan individu ke dalam 16 tipe kepribadian yang berbeda berdasarkan dimensi psikologis yaitu:</h5>
            <ul style="text-align:justify">
                <li>Ekstrovert (E) atau Introvert (I) <br>
                    Ekstrovert atau kepribadian terbuka memperoleh energi melalui interaksi dengan orang lain. Sedangkan Introvert atau kepribadian tertutup memperoleh energi melalui kegiatan yang dilakukannya sendiri.
                </li>

                <li>Sensing (S) atau Intuitive (N) <br>
                    Ini adalah cara individu mengumpulkan dan memproses informasi. Individu dengan dimensi Sensing lebih berfokus pada fakta dan detail. Sedangkan individu dengan dimensi intuituve lebih berfokus pada pola dan konsep.
                </li>
                <li>Thinking(T) atau Feeling (F) <br>
                    Ini adalah cara individu dalam membuat keputusan. Individu dengan dimensi Thinking membuat keputusan berdasarkan logika dan analisis. Sedangkan individu dengan dimensi Feeling membuat keputusan berdasarkan nilai-nilai dan emosi.
                </li>
                <li>Judging (J) atau Perceiving (P) <br>
                    ni adalah cara individu mengatur hidup mereka. Individu dengan dimensi Judging lebih terstruktur dan memiliki jadwal yang terorganisir. Sedangkan individu dengan dimensi Perceiving lebih terbuka dan fleksibel dalam menghadapi perubahan.
                </li>
            </ul>

        </div>
    </div>

    <div class="container">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>16 Tipe Kepribadian MBTI</h2>
        </div><!-- End Section Title -->

        <div class="row gy-4">
            @foreach ($personalityType as $personality)
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="service-item  position-relative">
                    <div class="icon">
                        <img src="{{$personality->image}}" class="img-fluid" />
                    </div>
                    <h3>{{$personality->type}}</h3>
                    <p>{{$personality->description}}</p>
                    <!-- <a href="/detail" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a><br> -->
                    <a href="{{ route('personality-details', ['type' => $personality->type]) }}" class="readmore stretched-link">Detail <i class="bi bi-arrow-right"></i></a>
                </div>
            </div><!-- End Service Item -->
            @endforeach
        </div>

   
    </div>
</section>
<!-- /Services Section -->



@endsection