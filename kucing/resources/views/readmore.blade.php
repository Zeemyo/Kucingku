@extends('frontend')

@section('Content')


<main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Postingan Details</h2>
          <ol>
            <li>{{$postingan->updated_at->format('l j F Y')}}</li>

          </ol>
        </div>

      </div>
    </section><!-- Breadcrumbs Section -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-description">
              <h1>{{ $postingan->title }}</h1>
              <br>
              <div class="portfolio-details-slider swiper">
                <div class="swiper-wrapper align-items-center">

                  <div class="swiper-slide">
                    @if(isset($postingan->image))
                    <img src="{{ asset('imageUpload/'.$postingan->image) }}" height="auto" width="300px" >
                    @endif
                  </div>

                </div>
                <div class="swiper-pagination"></div>
              </div>
              <p>
                {{ $postingan->description }}
              </p>

          </div>

          </div>

          <div class="col-lg-12">
            <div class="portfolio-info">
              <h3>Comment</h3>
              <ul>
                @foreach ($postingan->comments as $comment)
                <li><a href="#">{{$comment->name}}</a> {{$comment->created_at->diffForHumans()}} <strong>{{$comment->comment}}</strong></li>
                @endforeach

              </ul>
            </div>

          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->






</main><!-- End #main -->
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>



@stop
