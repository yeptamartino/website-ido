<!doctype html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en" class="no-js"> <![endif]-->
<html lang="en">

<!-- Start Head Section -->
@include('layouts.head')
<!-- End Head Section -->

<body>

  <!-- Full Body Container -->
  <div id="container">

    <!-- Start Header Section -->
    @include('layouts.header')
    <!-- End Header Section -->

    <!-- Start Home Page Slider -->
    <section id="home">
      <!-- Carousel -->
      <div id="main-slide" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#main-slide" data-slide-to="0" class="active"></li>
          <li data-target="#main-slide" data-slide-to="1"></li>
          <li data-target="#main-slide" data-slide-to="2"></li>
        </ol>
        <!--/ Indicators end-->

        <!-- Carousel inner -->
        <div class="carousel-inner">
          <div class="item active">
            <img class="img-responsive" src="{{url('/')}}/user-them/images/slider/wipon.jpg" alt="slider">
            <div class="slider-content">
              <div class="col-md-12 text-center">
                <h2 class="animated2">
                  <span</span>
                </h2>
                <h3 class="animated3 white">
                 <span>Malam Api Unggun Retret Mentor</span>
               </h3>
             </div>
           </div>
         </div>
         <!--/ Carousel item end -->
         <div class="item">
          <img class="img-responsive" src="{{url('/')}}/user-them/images/slider/wipon1.jpg" alt="slider">
          <div class="slider-content">
            <div class="col-md-12 text-center">
              <h2 class="animated4 white">
                <span></span>
              </h2>
              <h3 class="animated5 white">
                <span>Retret Mentor 5.0</span>
              </h3>
            </div>
          </div>
        </div>
        <!--/ Carousel item end -->
        <div class="item">
          <img class="img-responsive" src="{{url('/')}}/user-them/images/slider/wipon2.jpg" alt="slider">
          <div class="slider-content">
            <div class="col-md-12 text-center">
              <h3 class="animated7 white">
                <span></span>
              </h3>
              <h3 class="animated8 white">
                <span>Juara 1 Baperin Adek Tingkat</span>
              </h3>
            </div>
          </div>
        </div>

        <div class="item">
          <img class="img-responsive" src="{{url('/')}}/user-them/images/slider/wipon3.jpg" alt="slider">
          <div class="slider-content">
            <div class="col-md-12 text-center">
              <h2 class="animated7 white">
                <span></span>
              </h2>
              <h3 class="animated8 white">
                <span>Sesi Wawancara Perekrutan Mentor Baru</span>
              </h3>
            </div>
          </div>
        </div>

        <!--/ Carousel item end -->
      </div>
      <!-- Carousel inner end-->

      <!-- Controls -->
      <a class="left carousel-control" href="{{url('/')}}/user-them/#main-slide" data-slide="prev">
        <span><i class="fa fa-angle-left"></i></span>
      </a>
      <a class="right carousel-control" href="{{url('/')}}/user-them/#main-slide" data-slide="next">
        <span><i class="fa fa-angle-right"></i></span>
      </a>
    </div>
    <!-- /carousel -->
  </section>
  <!-- End Home Page Slider -->


  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <!-- Start Portfolio Section -->
        <div class="section full-width-portfolio" style="border-top:0; border-bottom:0; background:#fff;">

          <!-- Start Big Heading -->
          <div class="big-title text-center" data-animation="fadeInDown" data-animation-delay="01">
            <h1>Berita <strong>Terkini</strong></h1>
          </div>
          <!-- End Big Heading -->

          <p class="text-center">Berikut ini adalah beberapa berita terbaru mengenai program Mentoring IDO: </p>


          <div class="row">
            <div class="card-body">
              <div class="table-responsive" >
                <tbody>
                  @if(count($news) > 0)
                  @foreach ($news as $a)
                  <div class="col-md-3 image-service-box">
                    <img class="img-thumbnail" src="{{asset($a->image)}}" alt="" />
                   
                    <b class="black-color"><a href="berita-terbaru/{{ $a->id }}">{{$a->title}}</a></b>
                    <b class="media-date fa fa-clock-o"> 2 jam yang lalu</b>

                  </div>
                  @endforeach
                  @else
                     <tr>
                      <h4 class="text-center">Belum Ada Berita.. !!</h4>
                    </tr>
                    @endif
                </tbody>

              </div>
            </div>     
          </div>



        </div>
      </div>
      <div class="col-md-4">

      </div>
    </div>
  </div>
  <!-- End Portfolio Section -->


  <!-- Start Testimonials Section -->
  <div>
    <div class="container">
      <div class="row">
        <div class="col-md-8">

          <!-- Start Recent Posts Carousel -->
          <div class="latest-posts">
            <h2 class="classic-title"><span>Kegiatan Mendatang</span></h2>
            <div class="latest-posts-classic custom-carousel touch-carousel" data-appeared-items="2">

              <!-- Posts 1 -->
              <div class="post-row item">
               <div class="service-box service-icon-left-more">
                <div class="service-icon">
                 <h3><b class="dongker-color">#1</b></h3>
               </div>
               <div class="service-content">
                <h4><b class="black-color"><a href="">Pelantikan Mentor Baru</a></b></h4>
                <p><a class="read-more" href="{{url('/')}}/user-them/#">Selengkapnya... </a></p>
                <b class="media-date fa fa-calendar"> 1 Mei 2020</b>
              </div>
            </div>
          </div>

          <div class="post-row item">
           <div class="service-box service-icon-left-more">
            <div class="service-icon">
             <h3><b class="dongker-color">#2</b></h3>
           </div>
           <div class="service-content">
            <h4><b class="black-color"><a href="">Memperingati Ulangtahun IDO</a></b></h4>
            <p><a class="read-more" href="{{url('/')}}/user-them/#">Selengkapnya... </a></p>
            <b class="media-date fa fa-calendar"> 10 Mei 2020</b>
          </div>
        </div>
      </div>

      <div class="post-row item">
       <div class="service-box service-icon-left-more">
        <div class="service-icon">
         <h3><b class="dongker-color">#3</b></h3>
       </div>
       <div class="service-content">
        <h4><b class="black-color"><a href="">Merayakan 17 Agustusan</a></b></h4>
        <p><a class="read-more" href="{{url('/')}}/user-them/#">Selengkapnya... </a></p>
        <b class="media-date fa fa-calendar"> 17 Agustus 2020</b>
      </div>
    </div>
  </div>
</div>
</div>
<!-- End Recent Posts Carousel -->

</div>

<div class="col-md-4">

  <!-- Classic Heading -->
  <h2 class="classic-title"><span>Info Mentor</span></h2>

  <!-- Start Testimonials Carousel -->
  <div class="custom-carousel show-one-slide touch-carousel" data-appeared-items="1">
    <!-- Testimonial 1 -->
    <div class="classic-testimonials item">
      <div class="testimonial-content">
        <div class="service-box service-icon-left-more">
          <div class="service-icon">
            <h3><b class="dongker-color">#1</b></h3>
          </div>
          <div class="service-content">
            <h4><b class="black-color">Retret Mentor Di Pantai Siung</b></h4>
            <b class="media-date fa fa-calendar"> 10 Mei - 13 Mei</b>
          </div>
        </div>
      </div>

    </div>
    <!-- Testimonial 2 -->
    <div class="classic-testimonials item">
      <div class="testimonial-content">
        <div class="service-box service-icon-left-more">
          <div class="service-icon">
            <h3><b class="dongker-color">#2</b></h3>
          </div>
          <div class="service-content">
            <h4><b class="black-color">Pembekalan Mentor Baru</b></h4>
            <b class="media-date fa fa-calendar"> 10 Agustus - 1 September</b>
          </div>
        </div>
      </div>
    </div>
    <!-- Testimonial 3 -->
    <div class="classic-testimonials item">
      <div class="testimonial-content">
        <div class="service-box service-icon-left-more">
          <div class="service-icon">
            <h3><b class="dongker-color">#3</b></h3>
          </div>
          <div class="service-content">
            <h4><b class="black-color">Ibadah Mentor Bulanan</b></h4>
            <b class="media-date fa fa-calendar"> 10 Desember - 1 Januari</b>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Testimonials Carousel -->

</div>
</div>
</div>
</div>
<!-- End Testimonials Section -->


    <!-- Start Client/Partner Section -->
    <div class="partner">
      <div class="container">
        <div class="row">

          <!-- Start Big Heading -->
          <div class="big-title text-center">
            <h1>Para Mentor<strong></strong></h1>
            <!-- <p class="title-desc"> S M A Negeri 1 Witaponda</p> -->
          </div>
          <!-- End Big Heading -->

          <!--Start Clients Carousel-->
          <div class="our-clients">
            <div class="clients-carousel custom-carousel touch-carousel navigation-3" data-appeared-items="5" data-navigation="true">

              <!-- Client 1 -->
               @foreach($mentor as $n)
              <div class="client-item item">
                <a><img src="{{asset($n->photo)}}" alt="" /></a>
              </div>
              @endforeach

            

            </div>
          </div>
          <!-- End Clients Carousel -->
        </div>
        <!-- .row -->
      </div>
      <!-- .container -->
    </div>
    <!-- End Client/Partner Section -->


    <!-- Start Footer Section -->
    @include('layouts.footer')
    <!-- End Footer Section -->

  </div>
  <!-- End Full Body Container -->

  <!-- Go To Top Link -->
  <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

      <div id="loader">
        <div class="spinner">
          <div class="dot1"></div>
          <div class="dot2"></div>
        </div>
      </div>

      <script type="text/javascript" src="{{url('/')}}/user-them/js/script.js"></script>

    </body>

    </html>