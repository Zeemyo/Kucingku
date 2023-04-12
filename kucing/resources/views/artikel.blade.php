@extends('frontend')

@section('Content')

<main id="main">



  <!-- ======= Category Section ======= -->
 <!-- <section id="skills" class="skills section-bg">
    <div class="container">

      <div class="section-title">
        <h2>Category</h2>
      </div>


      <div class="card-body table-responsive p-0" style="height: 300px;">
        <table class="table table-head-fixed text-nowrap">
          <thead>
            <tr>
              <th>Name</th>


            </tr>
          </thead>
          <tbody>
            @foreach($category as $category)
            <tr>
              <td>{{ $category->name }}</td>

            </tr>
            <tr>
              @endforeach

          </tbody>
        </table>
      </div>
  </section><! End Category Section -->


  <!-- ======= artikel Section ======= -->
  <section id="artikel" class="services section-bg">
    <div class="container">

      <div class="section-title">
        <h2>artikel</h2>
      </div>






      <!-- artikel List -->

      @foreach($artikel as $artikel)


        <div class="card mb-2">
            <div class="card-body p-2 p-sm-3">
                <div class="media artikel-item">
                    <a href="#artikel" data-toggle="collapse" data-target=".artikel-content"><img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="mr-3 rounded-circle" width="50" alt="User" /></a>
                    <div class="media-body">

                        <h6><a href="{{ url('readmoreartikel/'.$artikel->id) }}" data-toggle="collapse" class="text-body">{{ $artikel->title }}</a></h6>


                        <p class="text-secondary">
                            {{ $description = substr($artikel->description, 0, 100) }}
                            <a href="{{ url('readmoreartikel/'.$artikel->id) }}" data-toggle="collapse" class="text-body">....readmore</a>
                        </p>
                        <p class="text-muted"><a href="javascript:void(0)"></a> post <span class="text-secondary font-weight-bold">{{$artikel->updated_at->diffForHumans()}}</span></p>

                        <!-- <p class="text-muted"><a href="#" class="d-block"></a> posts</p> -->
                    </div>



                </div>

            </div>
        </div>
        @endforeach
      <!-- /artikel List -->

    </div>
  </section><!-- End artikel Section -->






  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact section-bg">
    <div class="container">

      <div class="section-title">
        <h2>Contact</h2>

      </div>
<!--
      <div class="row"> -->

        <div class="col-lg-4 col-md-4">
          <div class="contact-about">
            <div class="social-links">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>



          </div>
        </div>

      </div>

    </div>
  </section><!-- End Contact Section -->

</main><!-- End #main -->
@stop
