@extends('layouts.master')

@section('main-konten')

<main class="main">

  <!-- Hero Section -->
  <section id="hero" class="hero section accent-background">

    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
      <div class="row gy-5 justify-content-between">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h2><span>Selamat Datang di </span><span class="accent">MBTI-16</span></h2>
          <p>Sebuah Website untuk mempredikisi Tipe Kepribadian yang Kamu miliki dengan melakukan sebuah psikotest</p>
          <div class="d-flex">
            <a href="/test" class="btn-get-started">Mulai Tes</a>
          </div>
        </div>
        <div class="col-lg-5 order-1 order-lg-2">
          <img src="assets/img/analysis.svg" class="img-fluid" alt="">
        </div>
      </div>
    </div>

    <div class="icon-boxes position-relative" data-aos="fade-up" data-aos-delay="200">
      <div class="container position-relative">
        <div class="row gy-4 mt-5">

          <div class="col-xl-4 col-md-6">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-emoji-smile"></i></div>
              <h4 class="title">Jadilah diri Anda sepenuhnya dan beri jawaban sejujurnya untuk mengetahui tipe kepribadian Anda.</h4>

            </div>
          </div><!--End Icon Box -->

          <div class="col-xl-4 col-md-6">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-journal-richtext"></i></div>
              <h4 class="title">Pelajari cara tipe kepribadian Anda memengaruhi banyak aspek dalam hidup Anda.</h4>

            </div>
          </div><!--End Icon Box -->

          <div class="col-xl-4 col-md-6">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-people"></i></div>
              <h4 class="title">Melalui sadar sepenuhnya tentang siapa kamu akan membantumu untuk lebih baik membuat keputusan</h4>

            </div>
          </div><!--End Icon Box -->

        </div><!--End Icon Box -->

      </div>
    </div>
    </div>

  </section><!-- /Hero Section -->

  <!-- About Section -->
  <section id="about" class="about section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>MBTI-16<br></h2>
      <p>Tes Myers-Briggs Type Indicator (MBTI) untuk mengetahui gambaran kepribadian dan preferensi seseorang.</p>
    </div><!-- End Section Title -->

    <div class="container">

      <div class="row gy-4">
        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
          <h3>Kenapa kamu harus mengikuti tes MBTI?</h3>
          <img src="assets/img/manfaat-mbti.jpg" class="img-fluid rounded-4 mb-4" alt="">
          <!-- <p>Mengenali diri adalah pekerjaan yang sulit bagi kebanyakan orang. Melalui sadar sepenuhnya tentang siapa kamu dan bagaimana berhubungan dengan orang lain, akan membantumu untuk lebih baik membuat keputusan, mengurangi kesalahan komunikasi, mengerti diri lebih efektif, dan keterampilan bagus yang harus dimiliki. MBTI adalah alat ukur psikologi untuk itu. Kami menyediakannya gratis untukmu! Bila kamu ingin mengikut tes minat bakat dengan assestment lengkap dan interprestasi dari psikolog</p> -->
          <p>Salah satu keuntungan mengenal tipe kepribadian adalah mengetahui apa saja kelemahan diri sendiri. Paham akan kelemahan diri, memungkinkan Anda untuk berhati-hati dalam melakukan sesuatu dan tidak bertindak ceroboh pada situasi tertentu. Anda akan menemukan cara baru untuk mendekati masalah dan mencari solusinya. Misalnya, Anda termasuk orang yang mudah panik dan cemas. Mengetahui kekurangan ini, Anda tentu bisa mempelajari cara untuk menenangkan diri agar dapat mengatasi situasi tersebut dengan baik. Selain itu, Anda juga tahu kelebihan yang Anda miliki. Anda bisa mengembangkan kelebihan ini menjadi sebuah potensi, contohnya memperluas koneksi dengan orang banyak karena Anda orang yang cukup supel dan bisa menghidupkan suasana.</p>
        </div>
        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="250">
          <div class="content ps-0 ps-lg-5">
            <p>Tes MBTI dikembangkan oleh Katharine Cook Briggs dan Isabel Briggs Myers, berdasarkan teori kepribadian yang ditemukan oleh Carl Jung, psikolog asal Swiss. Tes ini dapat membantu seseorang untuk mengenal diri sendiri, mengetahui kelebihan dan kelemahannya, serta menemukan solusi yang lebih baik.</p>

            <p>Pada dasarnya, Tipe Kepribadian seseorang terbagi berdasarkan 4 Domain</p>
            <ul>
              <li><i class="bi bi-check-circle-fill"></i> <span>Bagaimana Seseorang Menyalurkan Energi (Ekstrofert/Introvert)</span></li>
              <li><i class="bi bi-check-circle-fill"></i> <span>Bagaimana Seseorang Menerima Informasi (Sensing/Intuitiv)</span></li>
              <li><i class="bi bi-check-circle-fill"></i> <span>Bagaimana Seseorang Membuat Keputusan (Thinking/Feeling)</span></li>
              <li><i class="bi bi-check-circle-fill"></i> <span>Bagamana Seseorang Menyikapi Dunia Luar (Judgingng/ Perceiving)</span></li>
            </ul>

            <h3>Ayo ikuti tes MBTI! Kenali diri lebih mendalam. Kembangkan potensimu.</h3>
            <p>Silahkan mengikuti test berikut dengan menjawab pertanyaan yang diberikan. Tidak ada jawaban yang benar atau salah, jadi silahkan memilih jawaban yang paling sesuai dengan diri Anda.</p>
            <div class="d-flex">
              <a href="/test" class="btn-get-started">Mulai Tes</a>
            </div>

          </div>
        </div>
      </div>

    </div>

  </section><!-- /About Section -->

  <!-- Faq Section -->
  <section id="faq" class="faq section">

    <div class="container">

      <div class="row gy-4">

        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
          <div class="content px-xl-5">
            <h3><span>Frequently Asked </span><strong>Questions</strong></h3>
            <p>
              Beberapa pertanyaan yang sering ditanyakan
            </p>
          </div>
        </div>

        <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">

          <div class="faq-container">
            <!-- Faq item 1 -->
            <div class="faq-item faq-active">
              <h3><span class="num">1.</span> <span>Apa saja jenis-jenis Kepribadian?</span></h3>
              <div class="faq-content">
                <p>Menurut Miyers Briggs, Pada dasarnya Tipe Kepribadian dibagi berdasarkan 4 Domain yaitu: Bagaimana Seseorang Menyalurkan Energi (Ekstrofert/Introvert), Bagaimana Seseorang Menerima Informasi (Sensing/Intuitiv), Bagaimana Seseorang Membuat Keputusan (Thinking/Feeling), dan Bagamana Seseorang Menyikapi Dunia Luar (Judgingng/Perceiving)</p>
              </div>
              <i class="faq-toggle bi bi-chevron-right"></i>
            </div><!-- End Faq item-->

            <!-- Faq item 2 -->
            <div class="faq-item">
              <h3><span class="num">2.</span> <span>Faktor apa saja yang membentuk tipe kepribadian seseorang?</span></h3>
              <div class="faq-content">
                <p>Faktor Yang Membentuk tipe Kepribadian yang pertama Bawaan (Dari Lahir), Pola Asuh Lingkungan, dan ada juga yang dibentuk dari lingkungan, misalnya orang itu punya potensi kepribadian berbeda tapi karena dia berada dalam lingkungan yang mayoritas orang yang introvert, dia bisa jadi ikut introvert.</p>
              </div>
              <i class="faq-toggle bi bi-chevron-right"></i>
            </div><!-- End Faq item-->

            <!-- Faq item 3 -->
            <div class="faq-item">
              <h3><span class="num">3.</span> <span>Bagaimana cara mengetahui tipe kepribadian seseorang?</span></h3>
              <div class="faq-content">
                <p>Untuk caranya jelas ada testnya. Dalam psikolog pasti akan kami test menggunakan alat test yang terstandarisasi dan tidak boleh dipakai oleh non-psikolog. Selain itu, psikolog juga melihat dari profile (Latar belakang) dari lingkungan, keluarga. Karena itu bisa menentukan kepribadian seseorang itu seperti apa. Kemudian juga dari Observasi/ Wawancara itu juga biasanya untuk menentukan atau mengetahui tipe kepribadian seseorang</p>
              </div>
              <i class="faq-toggle bi bi-chevron-right"></i>
            </div><!-- End Faq item-->

            <!-- Faq item 4 -->
            <div class="faq-item">
              <h3><span class="num">4.</span> <span>Apa Manfaat mengetahui tipe kepribadian?</span></h3>
              <div class="faq-content">
                <p>Yang utama adalah kita tau jati diri kita seperti apa. Nah ketika seseorang itu mengetahui jati dirinya seperti apa dia mengenali jati dirinya seperti apa maka dia tau bagaimana dia harus bersikap.</p>
              </div>
              <i class="faq-toggle bi bi-chevron-right"></i>
            </div><!-- End Faq item-->


          </div>

        </div>
      </div>

    </div>

  </section><!-- /Faq Section -->

</main>

@endsection