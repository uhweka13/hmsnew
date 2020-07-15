@extends('layouts.app')
@section('content')
<section>
<div class="container">
<h3>Welcome to Fland Care Introduction Page</h3>
<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab"
      aria-controls="pills-home" aria-selected="true">Profile</a>
  </li>
  
  <li class="nav-item">
    <a class="nav-link" id="pills-addhospital-tab" data-toggle="pill" href="#pills-addhospital" role="tab"
      aria-controls="pills-contact" aria-selected="false">Want to add school?</a>
  </li>
</ul>
<div class="tab-content pt-2 pl-1" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
  <div class="alert alert-info" role="alert">
  <h4 class="alert-heading">Congratultions!</h4>
  <p>You have have successful registered</p>
  <hr>
  <p class="mb-0">Below is your system number. Make sure you forward it to admin for verification of the account</p>
</div>
    <p class="text-danger"><strong>System Number: {{Auth::user()->id}}</strong></p>
    <p> <strong>First Name:</strong>&nbsp;{{Auth::user()->fName}}</p>
    <p> <strong>Middle Name:</strong>&nbsp;{{Auth::user()->mName}}</p>
    <p> <strong>Last Name:</strong>&nbsp;{{Auth::user()->lName}}</p>
    <p> <strong>Email:</strong>&nbsp;{{Auth::user()->email}}</p>
    <p> <strong>Phone number:</strong>&nbsp;{{Auth::user()->phone}}</p>
    <form action="/uploadProfileImage" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
    <label for="profileImage"><strong>Upload your passport</strong></label>
    <input type="file" name="profileImage"class="form-control" >
    </div>
    <button type="submit" class="btn btn-sm btn-info">
    <i class="fas fa-upload"></i>
    </button>
    </form>

    </div>
  
  <div class="tab-pane fade" id="pills-addhospital" role="tabpanel" aria-labelledby="pills-addhospital-tab">
  <div class="alert alert-info" role="alert">
  <h4 class="alert-heading">Process of adding Hospital</h4>
  <p>Do not submit this form if you are not admin or a representative of the hospital. Every hospital 
  will be verify before the account can be activated!
  </p>
  <hr>
  <p class="mb-0">Below is your system number. Make sure you forward it to admin for verification of the account</p>
</div>
<!-- Default form register -->
<form class="text-center border border-light p-5" action="/add-hospital" method="POST" enctype="multipart/form-data">
  @csrf
    <p class="h4 mb-4">Add Hospital</p>
    <!-- Hospital type -->
    <select name="hType" id="hType" class="form-control">
    <option disabled selected>Hospital type</option>
    <option value="public">Public</option>
    <option value="private">Private</option>
    </select><br>
    <div class="form-row mb-4">
        <div class="col">
            <!-- Hospital Name -->
            <input type="text" id="defaultRegisterHospitalName" name="hName" class="form-control form-control-sm" placeholder="Hospital name">
        </div>
        <div class="col">
            <!-- Hospital Email -->
            <input type="email" id="defaultRegisterHospitalEmail" name="hEmail" class="form-control form-control-sm" placeholder="Hospital Email">
        </div>
    </div>
    <div class="form-row mb-4">
        <div class="col">
            <!-- Hospital Phone Number -->
            <input type="text" id="defaultRegisterHospitalPhoneNumber" name="hPhone" class="form-control form-control-sm" placeholder="Hospital phone">
        </div>
        <div class="col">
            <!-- Hospital State -->
            <select name="hState" id="hState" class="form-control form-control-sm">
                <option disabled selected>State</option>
                <option value="public">Public</option>
                <option value="private">Private</option>
            </select>
        </div>
    </div>
    <!-- Hospital year of establishement -->
    <input type="text" id="defaultRegisterFormEmail" name="hEstablish" class="form-control mb-4 form-control-sm" placeholder="Year of establishment">

    <!-- Password -->
    <input type="text" id="defaultRegisterFormPassword" name="hWebsite" class="form-control form-control-sm" placeholder="Hospital website">
    <small id="defaultRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
        Optional
    </small>

    <!-- Phone number -->
    <input type="text" id="hLocation" class="form-control form-control-sm" name="hLocation" placeholder="Hospital Location">
{{-- hospital logo --}}
  <div class="form-group">
  <label for="hospitalLogo" class="float-left"><strong>Upload Hospital Logo</strong></label>
  <input type="file" name="hLogo"class="form-control form-control-sm" >
  </div>
    <!-- Sign up button -->
    <button class="btn btn-info my-4 btn-sm" type="submit">Add</button>
</form>
<!-- Default form register -->
  </div>
</div>
</div>
</section>

@endsection