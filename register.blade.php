@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
           <div class="card">
           <!-- Default form register -->
<form class="text-center border border-light p-5"action="{{ route('register') }}" method="post">
    @csrf
    <p class="h4 mb-4">Sign up</p>

    <div class="form-row">
        <div class="col">
            <div class="form-group" style="display: flex; flex-direction: row;">
            <!-- First name -->
            <button class="btn-sm" style="border: none; background-color: transparent; border-top: 1px solid rgb(194, 190, 190); border-bottom: 1px solid rgb(194, 190, 190); border-left: 1px solid rgb(194, 190, 190); border-radius: 0px;" disabled><i class="fas fa-user"></i></button>
            <input id="name" type="text" class="form-control form-control-sm @error('name') is-invalid @enderror" name="fName" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="First name" style="border-radius: 0px;">
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group" style="display: flex; flex-direction: row;">
            <!-- Middle name -->
            <button class="btn-sm" style="border: none; background-color: transparent; border-top: 1px solid rgb(194, 190, 190); border-bottom: 1px solid rgb(194, 190, 190); border-left: 1px solid rgb(194, 190, 190); border-radius: 0px;" disabled><i class="fas fa-user"></i></button>
            <input id="name" type="text" class="form-control form-control-sm @error('name') is-invalid @enderror" name="mName" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Middle name" style="border-radius: 0px;">
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            </div>
        </div>
    </div>

    <div class="form-row">
        <div class="col-md-6">
            <!-- Last name -->
            <div class="form-group" style="display: flex; flex-direction: row;">
                <button class="btn-sm" style="border: none; background-color: transparent; border-top: 1px solid rgb(194, 190, 190); border-bottom: 1px solid rgb(194, 190, 190); border-left: 1px solid rgb(194, 190, 190); border-radius: 0px;" disabled><i class="fas fa-user"></i></button>
                <input id="name" type="text" class="form-control form-control-sm @error('name') is-invalid @enderror" name="lName" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Last name" style="border-radius: 0px;">

            </div>
                    </div>
        <div class="col-md-6">
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

        </div>
    </div>
     <!-- Phone number -->
     <div class="form-group" style="display: flex; flex-direction: row;">
        <button class="btn-sm" style="border: none; background-color: transparent; border-top: 1px solid rgb(194, 190, 190); border-bottom: 1px solid rgb(194, 190, 190); border-left: 1px solid rgb(194, 190, 190); border-radius: 0px;" disabled><i class="fas fa-phone"></i></button>
        <input type="text" id="phone" class="form-control form-control-sm @error('phone') is-invalid @enderror" placeholder="Phone number" name="phone" value="{{ old('email') }}" required autocomplete="phone" style="border-radius: 0px;">
            @error('phone')
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
    
    <!-- Password -->
    <div class="form-group" style="display: flex; flex-direction: row;">
        <button class="btn-sm" style="border: none; background-color: transparent; border-top: 1px solid rgb(194, 190, 190); border-bottom: 1px solid rgb(194, 190, 190); border-left: 1px solid rgb(194, 190, 190); border-radius: 0px;" disabled><i class="fas fa-key"></i></button>
        <input id="password-confirm" type="password" class="form-control form-control-sm" name="password_confirmation" required autocomplete="new-password" placeholder="Comfirm-password" style="border-radius: 0px;">

    </div>
    
   

    <!-- Sign up button -->
    <button class="btn btn-info my-4 btn-sm btn-block" type="submit">Sign up</button>

    <!-- Social register -->
    <p>or sign up with:</p>

    <a href="#" class="mx-2" role="button"><i class="fab fa-facebook-f light-blue-text"></i></a>
    <a href="#" class="mx-2" role="button"><i class="fab fa-twitter light-blue-text"></i></a>
    <a href="#" class="mx-2" role="button"><i class="fab fa-linkedin-in light-blue-text"></i></a>
    <a href="#" class="mx-2" role="button"><i class="fab fa-github light-blue-text"></i></a>

    <hr>

    <!-- Terms of service -->
    <p>By clicking
        <em>Sign up</em> you agree to our
        <a href="" target="_blank">terms of service</a>

</form>
<!-- Default form register -->
           </div>
        </div>
    </div>
</div>
@endsection
