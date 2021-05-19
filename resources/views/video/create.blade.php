@extends('admin-them')
@section('title', 'Create Video')
@section('container')

<div class="content-wrapper">
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box">
          <div class="box-header with-border">
            <h3 class="box-title">Create Video</h3>
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

                    <form method="post" action="/videos" enctype="multipart/form-data">
                      @csrf
                     
                   <div class="form-group">
                       <label for="url">Input URL Video From Youtube </label>
                       <input type="text" class="form-control @error('url') is-invalid
                       @enderror" id="url" placeholder="Enter url"  name="url" value="{{ old('url')}}">
                       @error ('url')
                       <div class="invalid-feedback">{{$message}}</div>
                       @enderror
                   </div>
                  
                   <button type="submit" class="btn btn-primary">Add</button>
                   <a href="/videos" class="btn btn-default">Back</a>
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

