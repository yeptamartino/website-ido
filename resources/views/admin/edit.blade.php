@extends('admin-them')
@section('title', 'Edit Admin')
@section('container')

<div class="content-wrapper">
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-warning">
                    <div class="box-header with-border">
                        <h3 class="box-title">Edit Admin</h3>
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
                                        <form method="post" action="/admins/{{ $admin->id }}"
                                            enctype="multipart/form-data">
                                            @method('patch')
                                            @csrf
                                            <div class="form-group">
                                                <label for="photo">Photo</label>
                                                <input type="file" class="form-control @error('photo') is-invalid
                                                @enderror" id="photo" placeholder="Input photo" name="photo" value="{{ $admin->photo }}">
                                                @error ('photo')
                                                <div class="invalid-feedback">{{$message}}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="name">Name</label>
                                                <input type="text" class="form-control @error('name') is-invalid
                                                @enderror" id="name" placeholder="Enter Name" name="name" value="{{$admin->name}}">
                                                @error ('name')
                                                <div class="invalid-feedback">{{$message}}</div>
                                                @enderror
                                            </div>
                                          
                                            <div class="form-group">
                                                <label for="telephone">Telephone</label>
                                                <input type="number" class="form-control @error('telephone') is-invalid
                                                @enderror" id="telephone" placeholder="Enter Telephone" name="telephone" value="{{$admin->telephone}}">
                                                @error ('telephone')
                                                <div class="invalid-feedback">{{$message}}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input type="email" class="form-control @error('email') is-invalid
                                                @enderror" id="email" placeholder="Enter Email" name="email" value="{{$admin->email}}">
                                                @error ('email')
                                                <div class="invalid-feedback">{{$message}}</div>
                                                @enderror
                                            </div>
                                              <div class="form-group">
                                                <label for="address">Address</label>
                                                <input type="text" class="form-control @error('address') is-invalid
                                                @enderror" id="address" placeholder="Enter Address" name="address" value="{{$admin->address}}">
                                                @error ('address')
                                                <div class="invalid-feedback">{{$message}}</div>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label for="password">Password</label>
                                                <input type="password" class="form-control  @error('password') is-invalid
                                                @enderror" id="password" placeholder="Enter Password" name="password" value="{{ $admin->password }}">
                                                @error ('password')
                                                <div class="invalid-feedback">{{$message}}</div>
                                                @enderror
                                            </div>
                                            <button type="submit" class="btn btn-primary">Update</button>
                                            <a href="/admins" class="btn btn-default">Back</a>
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
