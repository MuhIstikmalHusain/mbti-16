@extends('layouts.master')

@section('main-konten')
<!-- Contact Section -->
<section id="contact" class="contact section">

  <!-- Section Title -->
  <div class="container section-title mt-3" data-aos="fade-up">
    <h2>Contact</h2>
    <p>Jika ada pertanyaan silahkan hubungi Kami</p>
  </div><!-- End Section Title -->

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row gx-lg-0 gy-4">

      <div class="col-lg-4">
        <div class="info-container d-flex flex-column align-items-center justify-content-center">
          <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
            <i class="bi bi-geo-alt flex-shrink-0"></i>
            <div>
              <h3>Alamat</h3>
              <p>A108 Adam Street, New York, NY 535022</p>
            </div>
          </div><!-- End Info Item -->

          <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
            <i class="bi bi-telephone flex-shrink-0"></i>
            <div>
              <h3>No Handphone</h3>
              <p>+62 8125 3007 645</p>
            </div>
          </div><!-- End Info Item -->

          <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
            <i class="bi bi-envelope flex-shrink-0"></i>
            <div>
              <h3>Email</h3>
              <p>mbti16@gmail.com</p>
            </div>
          </div><!-- End Info Item -->

          <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
            <i class="bi bi-clock flex-shrink-0"></i>
            <div>
              <h3>Waktu Oprasioonal</h3>
              <p>Senin-Juma'at: 08.00 - 22.00</p>
            </div>
          </div><!-- End Info Item -->

        </div>

      </div>

      <div class="col-lg-8">
        <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade" data-aos-delay="100">
          <div class="row gy-4">

            <div class="col-md-6">
              <input type="text" name="name" class="form-control" placeholder="Masukkan Nama Anda" required="">
            </div>

            <div class="col-md-6 ">
              <input type="email" class="form-control" name="email" placeholder="Masukkan Alamat Email Anda" required="">
            </div>

            <div class="col-md-12">
              <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
            </div>

            <div class="col-md-12">
              <textarea class="form-control" name="message" rows="8" placeholder="Masukkan Pesan" required=""></textarea>
            </div>

            <div class="col-md-12 text-center">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Pesan Anda telah terkirim. Terimakasih!</div>

              <button type="submit">Kirim Pesan</button>
            </div>

          </div>
        </form>
      </div><!-- End Contact Form -->

    </div>

  </div>

</section><!-- /Contact Section -->

@endsection