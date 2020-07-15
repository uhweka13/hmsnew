@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                      <!-- Default form register -->
                <form class="text-center border border-light p-5" method="POST" action="/login_control">
                    @csrf
                    <p class="h4 mb-4">Sign up</p>
                            <!-- Email Address-->
                            <div class="form-group" style="display: flex; flex-direction: row;">
                                <button class="btn-sm" style="border: none; background-color: transparent; border-top: 1px solid rgb(194, 190, 190); border-bottom: 1px solid rgb(194, 190, 190); border-left: 1px solid rgb(194, 190, 190); border-radius: 0px;" disabled><i class="far fa-envelope"></i></button>
                                <input id="email" type="email" class="form-control form-control-sm @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email" style="border-radius: 0px;">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                    <!-- Password --> 
                    <div class="form-group" style="display: flex; flex-direction: row;">
                        <button class="btn-sm" style="border: none; background-color: transparent; border-top: 1px solid rgb(194, 190, 190); border-bottom: 1px solid rgb(194, 190, 190); border-left: 1px solid rgb(194, 190, 190); border-radius: 0px;" disabled><i class="fas fa-key"></i></button>
                        <input id="password" type="password" class="form-control form-control-sm @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password" style="border-radius: 0px;">
                    {{-- <small id="defaultRegisterFormPasswordHelpBlock" class="form-text text-muted">
                        At least 8 characters and 1 digit
                    </small> --}}
                    </div>
                    <!-- Sign up button -->
                                    
                    <div class="form-group row">
                        <div class="col-md-6">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                    </div>

                    
                        
                            <button class="btn btn-info my-4 btn-sm btn-block" type="submit">Sign in</button>
                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        
                
                </form>
                <!-- Default form register -->



                    {{-- <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form> --}}
               
        </div>
    </div>
</div>
@endsection
