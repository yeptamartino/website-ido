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
    <div>
      <div class="container">
        <div class="row" style="margin-top: 35px;">
         @yield('content')
         <div class="col-md-4">
          <h2 class="classic-title">
            <span class="dongker-color">Info Mentor</span>
          </h2>
          <div class="row">
            <div class="col-md-12 service-box service-icon-left-more">

              <div class="service-box service-icon-left-more">
                <div class="service-icon">
                  <h3><b class="grey-color">#1</b></h3>
                </div>
                <div class="service-content">
                  <h4><b class="black-color">Retret Mentor</b></h4>
                  <b class="media-date fa fa-calendar"> 10 Mei - 1 Juli</b>
                </div>
              </div>
            </div>
          </div>
          <h2 class="classic-title">
            <span class="dongker-color">Berita Terbaru</span>
          </h2>
          <div class="row">
            <div class="col-md-12 service-box service-icon-left-more">
              @foreach ($news_content as $a)
              <div class="service-box service-icon-left-more">
                <div class="service-icon">
                 <h3><b class="grey-color">#{{$loop->iteration}}</b></h3>
               </div>
               <div class="service-content">
                <h4><b class="black-color"><a href="/berita-terbaru/{{ $a->id }}">{{$a->title}}</a></b></h4>
                <b class="media-date fa fa-calendar"> {{$a->created_at->diffForHumans()}}</b>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="section" style="background:#fff;">
    <div class="container">
    </div>
  </div>
</div>
</div>
<!-- Start Footer Section -->
@include('layouts.footer')
<!-- End Footer Section -->
</div>
<a href="{{url('/')}}/user-them/#" class="back-to-top"><i class="fa fa-angle-up"></i></a>
<div id="loader">
  <div class="spinner">
    <div class="dot1"></div>
    <div class="dot2"></div>
  </div>
</div>
<script type="text/javascript" src="{{url('/')}}/user-them/js/script.js"></script>
</div>
</body>
</html>