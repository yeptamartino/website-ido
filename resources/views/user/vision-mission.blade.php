@extends('konten')
@section('content')
<!-- work section -->
<section>
    <div class="col-md-8">
        <h2 class="classic-title">
          <span class="dongker-color">Visi & Misi</span>
      </h2>
      <div class="row">
        <div class="card-body">
            <div class="table-responsive" style="margin-bottom: 100px;">
                <tbody>
                    @foreach ($vision_mission as $a)
                    <tr>
                        <div class="col-md-12 text-justify">
                            <td class="text-justify">{!!$a->description!!}</td>          
                        </div>
                    </tr>
                    @endforeach
                </tbody>

            </div>
        </div>     
    </div>
</div>
</section>
@endsection 



