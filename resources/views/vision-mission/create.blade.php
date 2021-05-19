@extends('admin-them')

<script src="https://cdn.ckeditor.com/ckeditor5/16.0.0/classic/ckeditor.js"></script>

@section('title', 'Create Vision & Mission')
@section('container')

<div class="content-wrapper">
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box">
          <div class="box-header with-border">
            <h3 class="box-title">Create Vision & Mission</h3>
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

                    <form method="post" action="/vision-missions" enctype="multipart/form-data">
                      @csrf

                      <div class="form-group">
                        <label for="description">Vision & Mission</label>
                        <textarea id="description" class="form-control" name="description" placeholder="Enter Vision & Mission..."></textarea>
                      </div>

                      <button type="submit" class="btn btn-primary">Add</button>
                      <a href="/vison-missions" class="btn btn-default">Back</a>
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



<script src="https://cdn.ckeditor.com/ckeditor5/[version.number]/[distribution]/ckeditor.js"></script>
<script>
  ClassicEditor
  .create( document.querySelector( '#description' ) )
  .then( description => {
    console.log( description );
  } )
  .catch( error => {
    console.error( error );
  } );
</script>

@endsection

