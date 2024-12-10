@extends('layouts.master')

@section('main-konten')

<section id="test" class="test section">
  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <!-- <h2>TEST MBTI<br></h2> -->
    <!-- <p>Silahkan mengikuti test berikut dengan menjawab pertanyaan yang diberikan. Tidak ada jawaban yang benar atau salah, jadi silahkan memilih jawaban yang paling sesuai dengan diri Anda.</p> -->
  </div>
  <!-- End Section Title -->


  <!-- Section Question -->
  <!-- <section class="form-section"> -->

  <div class="containerqs form-center mt-3">
    <form action="{{ route('test.store') }}" class="form-quest" method="POST">

      @csrf
      <fieldset>
        <div class="listqs">
          <div class="questionqs">
            <h2>{{$currentIndex + 1}}. {{ $currentQuestion['text'] }}</h2>
          </div>


          @foreach ($currentQuestion['options'] as $jawaban)
          <div class="optionsqs">
            <button type="submit" name="answer" class="optionqs-button" value="{{$jawaban ['value'] }}">
              {{$jawaban['label']}}
            </button>
          </div>

          @endforeach
        </div>
      </fieldset>
      <div class="navigationqs">
        <button class="navqs-button" id="prevqs-button">←</button>
        <button class="navqs-button" id="nextqs-button">→</button>
      </div>

      <input type="hidden" name="index" value="{{ $currentIndex }}">

    </form>
  </div><!-- End Section Question -->

  <!-- </section> -->

</section>




@endsection