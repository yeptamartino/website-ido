@extends('admin-them')
@section('title', 'Create Mentor')
@section('container')

<div class="content-wrapper">
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-success">
          <div class="box-header with-border">
            <h3 class="box-title">Create Mentor</h3>
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

                    <form method="post" action="/mentors" enctype="multipart/form-data">
                      @csrf
                      <div class="form-group">
                        <label for="photo">Photo</label>
                        <input type="file" class="form-control @error('photo') is-invalid
                        @enderror" id="photo" name="photo" value="{{ old('photo')}}">
                        @error ('photo')
                        <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control @error('name') is-invalid
                        @enderror" id="name" placeholder="Masukan name"  name="name" value="{{ old('name')}}">
                        @error ('name')
                        <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label for="telephone">Telephone</label>
                        <input type="number" class="form-control @error('telephone') is-invalid
                        @enderror" id="telephone" placeholder="Enter Telephone"  name="telephone" value="{{ old('telephone')}}">
                        @error ('telephone')
                        <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control @error('email') is-invalid
                        @enderror" id="email" placeholder="Enter Email"  name="email" value="{{ old('email')}}">
                        @error ('email')
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
                      <a href="/mentors" class="btn btn-default">Back</a>
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

