

@extends('admin-them')
@section('title', 'Daftar announcements')
@section('container')

<div class="content-wrapper">
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box">
          <div class="box-header with-border">
            <h3 class="box-title">Announcements Table</h3>
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
                    <div class="box-header">
                    </div>

                    <form method="post" action="/announcements" enctype="multipart/form-data">
                      @csrf
                   <div class="form-group">
                       <label for="title">Title</label>
                       <input type="text" class="form-control @error('title') is-invalid
                       @enderror" id="title" placeholder="Masukan Title"  name="title" value="{{ old('title')}}">
                       @error ('title')
                       <div class="invalid-feedback">{{$message}}</div>
                       @enderror
                   </div>
                   <div class="form-group">
                       <label for="description">Description</label>
                       <input type="text" class="form-control  @error('description') is-invalid
                       @enderror" id="description" placeholder="Masukan Description"  name="description" value="{{ old('description')}}">
                       @error ('description')
                       <div class="invalid-feedback">{{$message}}</div>
                       @enderror
                   </div>
                  
                   <button type="submit" class="btn btn-primary">Add</button>
                   <a href="/announcements" class="btn btn-default">Back</a>
               </form>

                    <div class="box-header">
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

