@extends('admin-them')
@section('title', 'Message Deatails')
@section('container')

<div class="content-wrapper">
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Message Details</h3>
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
                                            <p>{!! $contact->name !!}</p>
                                        </div>
                                        <div class="form-group">
                                            <b>Email:</b>
                                            <p>{!! $contact->email !!}</p>
                                        </div>
                                        <div class="form-group">
                                            <b>Telephone:</b>
                                            <p>{!! $contact->telephone !!}</p>
                                        </div>
                                        <div class="form-group">
                                            <b>Subject:</b>
                                            <p>{!! $contact->subject !!}</p>
                                        </div>
                                        <div class="form-group">
                                            <b>Messages:</b>
                                            <p>{!! $contact->message !!}</p>
                                        </div>
                                        <a href="/contacts" class="btn btn-default">Back</a>
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