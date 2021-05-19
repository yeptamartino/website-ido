@extends('konten')
@section('content')
<!-- work section -->

<div class="col-md-8">
 <!-- <h2 class="classic-title">
  <span class="dongker-color">Berita Sekolah</span>
</h2> -->

<div class="row">
  <div class="card-body">
  <div class="col-md-12">
      <b class="media-date" style="margin-bottom: 30px">Kabar Berita | I D O</b>
    <!-- Start Social Links -->
    <ul class="social-list">
       <li>
        <a class="facebook itl-tooltip" data-placement="bottom" title="Facebook" href="{{url('/')}}/user-them/#"><i class="fa fa-facebook"></i></a>
      </li>
      <li>
        <a class="instgram itl-tooltip" data-placement="bottom" title="Instagram" href="{{url('/')}}/user-them/#"><i class="fa fa-instagram"></i></a>
      </li>
       <li>
        <a class="twitter itl-tooltip" data-placement="bottom" title="Twitter" href="{{url('/')}}/user-them/#"><i class="fa fa-twitter"></i></a>
      </li>
      <li>
        <a class="google itl-tooltip" data-placement="bottom" title="vimeo" href="{{url('/')}}/user-them/#"><i class="fa fa-youtube"></i></a>
      </li>
    </ul>
  </div>
  </div>
  <!-- End Social Links -->
</div>
<div class="row">
  <div class="card-body">
    <div class="table-responsive" >
      <tbody>
        <div class="col-md-12">
          <b class="media-date"> {!! $news->created_at->format('l, d F Y H:i') !!}</b>
          <h2 class="post-title text-justify" style="margin-bottom: 50px; color: #21409a;">{!! $news->title !!}</h2>
          
          <div class="form-group"> 
            <p><img src="{{asset($news->image)}}" class="img-fluid"></p>
          </div>


          <div class="form-group">
            <p>{!! $news->description !!}</p>
          </div>

            <div class="form-group">
            <p>{!! $news->date !!}</p>
          </div>

        </div>
      </tbody>

    </div>
  </div>     
</div>
</div>
@endsection 




