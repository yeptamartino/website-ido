@extends('admin-them')
@section('title', 'Sliders Table')
@section('container')

<div class="content-wrapper">
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        @include('flash::message')       
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Sliders Table</h3>
            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
              </button>
              <div class="btn-group">
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Separated link</a></li>
                </ul>
              </div>
              <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
          </div>
          
          <div class="box-body">
            <div class="row">
              <div class="col-md-12">
                <div class="row">
                  <div class="col-xs-12">
                    <a href="/sliders/create" class="btn btn-success btn-xs">
                      <i class="glyphicon glyphicon-plus"></i>
                    </a>
                    
                    <div class="box-header">
                    </div>

                    <form action="{{url('sliders')}} ">
                      <div class="input-group input-group-sm hidden-xs" style="width: 250px;">
                        <input type="text" name="search" class="form-control" placeholder="Search..." autocomplete="off"/>
                        <span class="input-group-btn">
                          <button type='submit' class="btn btn-primary"><i class="fa fa-search"></i>
                          </button>
                        </span>
                      </div>
                    </form>

                    <div class="box-header">
                    </div>

                    <div class="box-body table-responsive no-padding">
                      <table class="table table-hover table-bordered">
                        <tr>
                          <th>No</th>
                          <th>Images</th>
                          <th>Title</th>
                          <th>Description</th>
                          <th>Actions</th>
                        </tr>
                        @foreach($slider as $s)
                        <tr>
                          <td>{{$loop->iteration}}</td>
                          <td><img src="{{asset($s->image)}}" class="img-fluid" style="width: 50px"></td>
                          <td>{{$s->title}}</td>
                          <td>{{$s->description}}</td>
                          <td>
                            <a href="sliders/{{ $s->id }}" class="btn btn-xs btn-primary">
                              <i class="glyphicon glyphicon-eye-open"></i>
                            </a>
                            <a  href="/sliders/{{ $s->id}}/edit" class="btn btn-xs btn-warning">
                              <i class="glyphicon glyphicon-edit"></i>
                            </a>
                            <form action="/sliders/{{ $s->id }}" method="post" style="display: inline-block;">
                             @method('delete')
                             @csrf
                             <button type="submit" class="btn btn-xs  btn-danger" value="delete" 
                                     onclick="return confirm('Are You Sure?')" type="submit" >
                              <i class="glyphicon glyphicon-trash"></i>
                            </button>
                           </form>
                         </td>
                       </tr>
                       @endforeach
                     </table>
                   </div>
                   
                 </div>
               </div>
             </div>
           </div>
         </div>
       </div>

     </div>
   </div>
 </section>
</div>

@endsection

