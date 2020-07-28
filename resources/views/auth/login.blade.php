
@extends('layouts.app')
@section('content')
    
<div class="row">
    <div class="col-md-4 col-md-offset-4 text-center logo-margin ">
      <img src="" alt=""/>
    </div>
    <div class="col-md-4 col-md-offset-4" >
        <div class="login-panel panel panel-default" >
            <div class="panel-heading">
                <h3 class="panel-title">Please Sign In</h3>
            </div>
            <div class="panel-body" >
                <form role="form" method="post" action="{{ route('login') }}">
                    @csrf
                    <fieldset>
                        <div class="form-group">
                            
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus style="border-radius:15px 30px 20px">
                            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-group">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" style="border-radius:15px 30px 20px">
                            @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="checkbox">
                            
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                        </div>
                        <!-- Change this to a button or input when using this as a form -->
                        <input type="submit" class="btn btn-lg btn-success btn-block" name="log" value="Login">
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
@endsection



    


