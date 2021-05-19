@extends('admin-them')
@section('title', 'Mentor Tables')
@section('container')

<div class="content-wrapper">
  <section class="content">
    <div class="row">
      <div class="col-md-12">
       @include('flash::message') 
       <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Mentor Tables</h3>
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
                  <a href="/mentors/create" class="btn btn-success btn-xs">
                    <i class="glyphicon glyphicon-plus"></i>
                  </a>

                  <div class="box-header">
                  </div>

                  <form action="{{url('mentors')}} ">
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
                        <th>Photo</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Telephone</th>
                        <th>Description</th>
                        <th>Actions</th>
                      </tr>
                      @foreach($mentor as $n)
                      <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>
                          <a type="button" data-toggle="modal" data-target="#staticBackdrop">
                           <img src="{asset('images/no-photo.jpg')}}" class="img-fluid" style="max-width: 100px;">
                         </a>
                       </td>
                       <!-- Modal -->
                       <div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h4><b>Photo</b></h4>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                             <img src="{asset('images/no-photo.jpg')}}" class="img-fluid" style="width: 300px">
                           </div>
                           <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <td>{{$n->name}}</td>
                    <td>{{$n->telephone}}</td>
                    <td>{{$n->email}}</td>
                    <td>{{$n->description}}</td>
                    <td>
                      <a href="mentors/{{ $n->id }}" class="btn btn-xs btn-primary">
                        <i class="glyphicon glyphicon-eye-open"></i>
                      </a>
                      <a  href="/mentors/{{ $n->id}}/edit" class="btn btn-xs btn-warning">
                        <i class="glyphicon glyphicon-edit"></i>
                      </a>
                      <form action="/mentors/{{ $n->id }}" method="post" style="display: inline-block;">
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
             <div class="pull-left">
              {{ $mentor->appends($_GET)->links() }}
            </div>
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

