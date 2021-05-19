@extends('konten')
@section('content')
<!-- work section -->

<div class="col-md-8">
       <h2 class="classic-title">
          <span class="dongker-color">Berita Mentor</span>
      </h2>
      <div class="row">
        <div class="card-body">
            <div class="table-responsive" >
                <tbody>
                    @foreach ($news as $a)
                    <div class="col-md-4 image-service-box">
                        <img class="img-thumbnail" src="{{asset($a->image)}}" alt="" />
                        <h5 style="margin-bottom: 50px;" class="post-title text-justify"><a href="">{{$a->title}}</a></h5>
                    </div>
                    @endforeach
                </tbody>

            </div>
        </div>     
    </div>
</div>
@endsection 



