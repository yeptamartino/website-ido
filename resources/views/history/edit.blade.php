@extends('admin-them')
@section('title', 'Edit Histories')
@section('head')
  <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.css" rel="stylesheet">
@endsection

@section('script')
  <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.js"></script>
  <script>
    $(document).ready(function() {
      $('#description').summernote();
    });
  </script>
@endsection
@section('container')

<div class="content-wrapper">
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-warning">
                    <div class="box-header with-border">
                        <h3 class="box-title">Edit Histories</h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                    class="fa fa-minus"></i>
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
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i
                                    class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <form method="post" action="/histories/{{ $history->id }}"
                                            enctype="multipart/form-data">
                                            @method('patch')
                                            @csrf
                                           
                                            <div class="form-group">
                                                <label for="description">History</label>
                                                 <textarea id="description" class="form-control" name="description" placeholder="Enter History...">{!! $history->description !!}</textarea>
                                                @error ('description')
                                                <div class="invalid-feedback">{{$message}}</div>
                                                @enderror
                                            </div>
                                            <button type="submit" class="btn btn-primary">Update</button>
                                            <a href="/histories" class="btn btn-default">Back</a>
                                        </form>
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