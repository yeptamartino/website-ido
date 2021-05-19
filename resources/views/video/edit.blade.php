@extends('admin-them')
@section('title', 'Edit Video')
@section('container')

<div class="content-wrapper">
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-warning">
                    <div class="box-header with-border">
                        <h3 class="box-title">Edit Video</h3>
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
                                        <form method="post" action="/videos/{{ $video->id }}"
                                            enctype="multipart/form-data">
                                            @method('patch')
                                            @csrf
                                           
                                            <div class="form-group">
                                                <label for="url">Input URL video From Youtube</label>
                                                <input type="text" class="form-control @error('url') is-invalid
                                                @enderror" id="url" placeholder="Enter url" name="url" value="{{$video->url}}">
                                                @error ('url')
                                                <div class="invalid-feedback">{{$message}}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <iframe width="288" height="187" src="https://www.youtube.com/embed/{{$video->url}}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen>
                                                </iframe>
                                            </div>
                                            
                                            <button type="submit" class="btn btn-primary">Update</button>
                                            <a href="/videos" class="btn btn-default">Back</a>
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