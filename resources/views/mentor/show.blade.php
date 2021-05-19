@extends('admin-them')
@section('title', 'Mentor Details')
@section('container')

<div class="content-wrapper">
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Mentor Details</h3>
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
                                        <div class="form-group">
                                            <b>Name:</b>
                                            <p>{!! $mentor->name !!}</p>
                                        </div>
                                        <div class="form-group">
                                            <b>Telephone:</b>
                                            <p>{!! $mentor->telephone !!}</p>
                                        </div>
                                        <div class="form-group">
                                            <b>Email:</b>
                                            <p>{!! $mentor->email !!}</p>
                                        </div>
                                        <div class="form-group">
                                            <b>Photo:</b>
                                            <p><img src="{{asset($mentor->photo)}}" class="img-fluid" style="width: 300px"></p>
                                        </div>
                                        <a href="/mentors" class="btn btn-default">Back</a>
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
