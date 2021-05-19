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