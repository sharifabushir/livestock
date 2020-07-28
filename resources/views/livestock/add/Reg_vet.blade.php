
@extends('layouts.dashboad')

  {{-- <h1 class="page-header">Registration</h1> --}}
  @section('page-header')
  @if (Session::has('success'))
      <div class="alert alert-success">
          <ul>
              <li>{{Session::get('success')}}</li>
          </ul>
      </div>
  @else
      
    Registration
  @endif
@endsection

  @section('content')
  <!-- Form Elements -->
  <div class="panel panel-default">
      <div class="panel-heading">
          Veterinarian
      </div>
      <div class="panel-body">
          <div class="row">
              <div class="col-lg-12">
                  <form role="form" method="post" action="{{route('store-veterinarian')}}" enctype="multipart/form-data">
                    @csrf
                      <div class="form-group col-sm-6">
                          <label>FULLNAME</label>
                          <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" placeholder="FULLNAME" name="name">
                          @error('name')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                         @enderror
                      </div>
                      <div class="form-group col-sm-6">
                          <label>PHONE</label>
                          <input type="text" class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone') }}"  placeholder="PHONE" name="phone">
                          @error('phone')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                         @enderror
                      </div>
                      <div class="form-group col-sm-6">
                          <label>LOCATION</label>
                          <input type="text" class="form-control @error('location') is-invalid @enderror"  value="{{ old('location') }}" placeholder="LOCATION" name="location">
                          @error('location')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                         @enderror
                      </div>
                      <div class="form-group col-sm-6">
                          <label>EMAIL</label>
                          <input type="email" class="form-control @error('email') is-invalid @enderror"  value="{{ old('email') }}" placeholder="EMAIL" name="email">
                          @error('email')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                         @enderror
                      </div>
                      <div class="form-group col-sm-6">
                          <label>USERNAME</label>
                          <input type="text" class="form-control  @error('username') is-invalid @enderror" value="{{ old('username') }}" placeholder="USERNAME" name="username">
                          @error('username')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                         @enderror
                      </div>
                      <div class="form-group col-sm-6">
                          <label>PASSWORD</label>
                          <input type="password" class="form-control  @error('password') is-invalid @enderror" value="{{ old('password') }}" placeholder="PASSWORD" name="password">
                          @error('password')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                         @enderror
                      </div>
                      <div class="form-group col-sm-6">
                          <label>GENDER</label>
                              <br>
                          <label class="radio-inline">
                              <input type="radio" name="gender" id="optionsRadiosInline2" value="male">male
                          </label>
                          <label class="radio-inline">
                              <input type="radio" name="gender" id="optionsRadiosInline3" value="female">female
                          </label>
                      </div>
                      <div class="form-group col-sm-6">
                          <label>Image</label>
                          <input  type="file" name="photo" class="form-control"  >
                      </div>
                      <div class="col-md-12">
                      <button type="submit" name="btnvet" class="btn btn-primary">Save</button>
                      <button type="reset" class="btn btn-success">Cancel</button>
                    </div>
                  </form>
              </div>
  
          </div>
      </div>
  </div>
   <!-- End Form Elements -->
    
@endsection
