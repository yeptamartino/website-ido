@extends('konten')
@section('content')
<div class="col-md-8">
  <div class="our-clients">
    <h2 class="classic-title">
      <span class="dongker-color">Galeri Video </span>
    </h2>
    <div class="table-responsive" style="margin-bottom: 100px;">
      <tbody>
        @foreach ($galery_video as $v)
        <div class="col-md-4" style="margin-bottom: 30px;">
          <iframe width="288" height="187" src="https://www.youtube.com/embed/{{$v->url}}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen>
          </iframe>
        </div>
        @endforeach
      </tbody>
    </div>
  </div>
</div>
@endsection 



