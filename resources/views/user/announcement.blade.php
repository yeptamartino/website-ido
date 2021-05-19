@extends('konten')
@section('content')
<!-- work section -->
<section>
    <div style="padding-top: 25px;" class="container">
        <div class="row">
            <div class="card-body">
                <div class="table-responsive" style="margin-bottom: 100px;">
                        <tbody>
                            @foreach ($announcement as $a)
                            <tr>
                                <div class="col-md-9 text-justify" style="margin-bottom:  30px">
                                    <td class="text-justify" ><h2><b>{!!$a->title!!}</b></h2></td>          
                                </div>
                                <div class="col-md-9 text-justify">
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



