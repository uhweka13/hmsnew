@extends('layouts.clerk_app')
@section('content')
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
          <div class="container-fluid">
              @include('include.message')
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1 class="m-0 text-dark">Dashboard</h1>
              </div><!-- /.col -->
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="admin-index">Home</a></li>
                  <li class="breadcrumb-item active">Clerk</li>
                </ol>
              </div><!-- /.col -->
            </div><!-- /.row -->
          </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <!-- Main content -->
        <section class="content">
          <div class="container-fluid">
            <div class="row">
            <div class="col-12">
                
                <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Pay Bills</h3>
                    <div class="card-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">
                        <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
    
                        <div class="input-group-append">
                        <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                        </div>
                    </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                  @if (count($patients ?? '') > 0)
                  <table class="table table-hover">
                      <thead>
                          <tr>
                          <th>Card No</th>
                          <th>Names</th>
                          <th>D.O.B</th>
                          <th>Phone Number</th>
                          <th>State</th>
                          <th>Location</th>
                          <th>Action</th>
                          </tr>
                      </thead>
                      @foreach ($patients ?? '' as $patient)

                    <tbody>
                        <tr>
                        <td>{{$patient->id}}</td>                      
                         <td>{{$patient->fName}}&nbsp;{{$patient->mName}}&nbsp;{{$patient->lName}}</td>
                        <td>{{$patient->age}}</td>
                        <td>{{$patient->phone}}</td>
                        <td>{{$patient->state}}</td>
                        <td>{{$patient->residArea}}</td>
                        <td>
                    <button data-toggle="modal" data-target="#payBill{{$patient->id}}">
                        <i class="fas fa-edit text-blue"></i>
                        </button>
                        <!--
                          <button data-toggle="modal" data-target="#edit{{$patient->id}}">
                            <i class="fas fa-edit text-blue"></i>
                            </button> -->
                        </td>
                                            <!-- Delete News modal -->
                   <!-- Edit Patient's records -->
                  <div class="modal fade" id="payBill{{$patient->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header text-center">
                      <h4 class="modal-title w-100 font-weight-bold">Pay Patient Bill</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
              <div class="modal-body mx-3">
                <form method="POST" action="#" role="form" id="patientForm">
                  @csrf
                      <div class="md-form mb-4">
                      <input type="hidden" name="patientId" value="{{$patient->id}}">
                      <p><b>Card No:</b>{{$patient->id}}</p>
                      <p><b>Patient Name:</b>  {{$patient->fName}}{{$patient->mName}}{{$patient->lName}}</p>
                      </div>
                      <hr>
                      <div class="md-form mb-4">
            <select name="state" id="" class="form-control form-control-sm validated">
                <option value="" disabled selected>Choose Payment Method</option>
                <option value="cash">Pay with Cash</option>
                      <option value="debitCard">Debit Card</option>
                      <option value="bankTransfer">Bank Transfer</option>
                     
            </select>
        </div>
                      
               

              </div>
              <div class="modal-footer d-flex justify-content-center">
              <button class="btn btn-default" type="submit" form="patientForm">Pay<i class="fas fa-paper-plane-o ml-1"></i></button>
              </form>
              </div>
              </div>
              </div>
              </div>

                        </tr>
                    </tbody>
                                            
                      @endforeach
                    </table>
    
                  @else
                      <p>No record found</p>
                  @endif
                </div>
                <!-- /.card-body -->
                {{$patients ?? ''->links()}}
                </div>
                <!-- /.card -->
            </div>
            </div>
            <!-- /.row -->
        </div>
        </section>
        </div>
      <!-- /.content-wrapper -->
  <div class="modal fade" id="modalAddPersonel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Add a patient</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
<div class="modal-body mx-3">
  <form method="POST" action="/add-patient-clerk" role="form" id="addPatientForm">
    @csrf
         <div class="md-form mb-4">
            
            <input type="text" id="form3" name="fName" class="form-control form-control-sm validate" placeholder="Firstname">
        </div>
        <div class="md-form mb-4">
            <input type="text" id="form3" name="mName" class="form-control form-control-sm validate" placeholder="Middlename">
        </div>
        <div class="md-form mb-4">
            <input type="text" id="form3" name="lName" class="form-control form-control-sm validate" placeholder="Lastname">
        </div>
        <div class="md-form mb-4">
            <input type="date" id="form2" name="age" class="form-control form-control-sm validate" placeholder="Age">
        </div>
        <div class="md-form mb-4">
          <input type="text" id="form2" name="phone" class="form-control form-control-sm validate" placeholder="Phone">
      </div>
        <div class="md-form mb-4">
            <input type="text" id="form3" name="residArea" class="form-control form-control-sm validate" placeholder="Residential Address">
            
        </div>
        <div class="md-form mb-4">
            <select name="state" id="" class="form-control form-control-sm validated">
                <option value="" disabled selected>Choose State</option>
                <option value="Abia">Abia Umuahia</option>
                      <option value="Adamawa">Adamawa Yola</option>
                      <option value="Akwa Ibom">Akwa Ibom Uyo</option>
                      <option value="Anambra">Anambra Awka</option>
                      <option value="Bauchi">Bauchi Bauchi</option>
                      <option value="Bayelsa">Bayelsa Yenagoa</option>
                      <option value="Benue">Benue Makurdi</option>
                      <option value="Borno">Borno Maiduguri</option>
                      <option value="Cross">Cross River Calabar</option>
                      <option value="Delta">Delta Asaba</option>
                      <option value="Ebonyi">Ebonyi Abakaliki</option>
                      <option value="Edo">Edo Benin City</option>
                      <option value="Ekiti">Ekiti Ado - Ekiti</option>
                      <option value="Enugu">Enugu Enugu</option>
                      <option value="Gombe">Gombe Gombe	</option>
                      <option value="Imo">Imo Owerri</option>
                      <option value="Abia">Abia Umuahia</option>
                      <option value="Adamawa">Adamawa Yola</option>
                      <option value="Akwa">Akwa Ibom Uyo</option>
                      <option value="Anambra">Anambra Awka</option>
                      <option value="Bauchi">Bauchi Bauchi</option>
                      <option value="Jigawa">Jigawa Dutse</option>
                      <option value="Kaduna">Kaduna Kaduna</option>
                      <option value="Kano">Kano Kano</option>
                      <option value="Katsina">Katsina Katsina</option>
                      <option value="Kebbi">Kebbi Birnin Kebbi</option>
                      <option value="Kogi">Kogi	Lokoja</option>
                      <option value="Kwara">Kwara Ilorin</option>
                      <option value="Lagos">Lagos Ikeja</option>
                      <option value="Nasarawa">Nasarawa Lafia</option>
                      <option value="Ogun">Ogun Abeokuta</option>
                      <option value="Ondo">Ondo Akure</option>
                      <option value="Osun">Osun Oshogbo</option>
                      <option value="Oyo">Oyo Ibadan</option>
                      <option value="Plateau">Plateau Jos</option>
                      <option value="Rivers">Rivers Port Harcourt</option>
                      <option value="Sokoto">Sokoto Sokoto</option>
                      <option value="Taraba">Taraba Jalingo</option>
                      <option value="Yobe">Yobe Damaturu</option>
                      <option value="Zamfara">Zamfara Gusau</option>
                      <option value="Abuja">Abuja FCT</option>
            </select>
        </div>
        <div class="md-form mb-4">
          <select name="gender" id="" class="form-control form-control-sm validated">
              <option value="" disabled selected>Choose Gender</option>
              <option value="male">Male</option>
              <option value="female">Female</option>
          </select>
      </div>
          {{-- <div class="md-form mb-4">
                    <input type="password" id="form3" name="password" class="form-control form-control-sm validate" placeholder="Password">
            </div>
            <div class="md-form mb-4">
                    <input type="password" id="form3" name="confirmPassword" class="form-control form-control-sm validate" placeholder="Comfirmpassword">
            </div> --}}
  </form>

</div>
<div class="modal-footer d-flex justify-content-center">
<button class="btn btn-default" type="submit" form="addPatientForm">Add<i class="fas fa-paper-plane-o ml-1"></i></button>
</div>
</div>
</div>
</div>
@endsection