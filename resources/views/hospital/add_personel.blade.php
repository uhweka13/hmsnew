@extends('layouts.hospital_app')
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
                  <li class="breadcrumb-item active">Admin</li>
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
                <button type="button" data-toggle="modal" data-target="#modalAddPersonel" class="btn btn-md btn-default">Add</button>
                <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Personnel</h3>
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
                  @if (count($result['personels']) > 0)
                  <table class="table table-hover">
                      <thead>
                          <tr>
                          <th>ID</th>
                          <th>Names</th>
                          <th>Email Address</th>
                          <th>Phone Number</th>
                          <th>Location</th>
                          <th>Role</th>
                          <th>Department</th>
                          <th>Action</th>
                          </tr>
                      </thead>
                      @foreach ($result['personels'] as $personel)

                    <tbody>
                        <tr>
                        <td>{{$personel->id}}</td>                      
                         <td>{{$personel->fName}}&nbsp;{{$personel->mName}}&nbsp;{{$personel->lName}}</td>
                        <td>{{$personel->email}}</td>
                        <td>{{$personel->phone}}</td>
                        <td>{{$personel->residArea}}</td>
                        <td>{{$personel->role}}</td>
                        <td>{{$personel->department}}</td>
                        <td>
                    <button data-toggle="modal" data-target="#delete{{$personel->id}}">
                        <i class="fas fa-eject text-red"></i>
                        </button>
                        </td>
                        <!-- Delete news modal-->
                      <div class="modal fade" id="delete{{$personel->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                      aria-hidden="true">

                      <!-- Change class .modal-sm to change the size of the modal -->
                      <div class="modal-dialog modal-sm" role="document">


                        <div class="modal-content">
                          <div class="modal-body">
                              <form action="/deletePersonel" method="post" id="deleteUser">
                                @csrf
                              <input name="personelId" id="id" type="hidden" value="{{$personel->id}}">
                              <h5>Are you sure delete Personnel?</h5>
                              <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
                            <button type="submit" type="submit" class="btn btn-danger btn-sm pull-right">Delete</button>
                              </form>
                            
                          </div>
                          
                        </div>
                      </div>
                    </div>
                    <!-- Delete News modal -->
                        </tr>
                    </tbody>
                                            
                      @endforeach
                    </table>
    
                  @else
                      <p>No record found</p>
                  @endif
                </div>
                <!-- /.card-body -->
                {{$result['personels']->links()}}
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
        <h4 class="modal-title w-100 font-weight-bold">Add a personel</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
<div class="modal-body mx-3">
  <form method="POST" action="/add-personel" role="form" id="tutorForm">
    @csrf
         <div class="md-form mb-4">
            <input type="text" id="form3" name="fName" class="form-control form-control validate" placeholder="Firstname">
    
        </div>
        <div class="md-form mb-4">
            <input type="text" id="form3" name="mName" class="form-control form-control-sm validate" placeholder="Middlename">
        </div>
        <div class="md-form mb-4">
            <input type="text" id="form3" name="lName" class="form-control form-control-sm validate" placeholder="Lastname">
            
        </div>
        <div class="md-form mb-4">
            <input type="email" id="form2" name="email" class="form-control form-control-sm validate" placeholder="Email">
        </div>
        <div class="md-form mb-4">
            <input type="text" id="form2" name="phone" class="form-control form-control-sm validate" placeholder="Phone">
        </div>
        <div class="md-form mb-4">
            <input type="text" id="form3" name="residArea" class="form-control form-control-sm validate" placeholder="Residential area">
        
        </div>
        <div class="md-form mb-4">
            <select name="role" id="" class="form-control form-control-sm validated">
                <option value="" disabled selected>Choose role</option>
                <option value="doctor">Doctor</option>
                <option value="Nurse">Nurse</option>
                <option value="pharmacy">Pharmacy</option>
                <option value="Clerk">Clerk</option>
                <option value="Others">Others</option>
            </select>
        </div>
        <div class="md-form mb-4">
          <select name="department" id="" class="form-control form-control-sm validated">
              <option value="" disabled selected>Choose department</option>
              @if (count($result['departments']) > 0)
                  @foreach ($result['departments'] as $department)
                 <option value="{{$department->name}}">{{$department->name}}</option>
                  @endforeach
              @else
                  <p>No record</p>
              @endif
          </select>
      </div>
      <div class="md-form mb-4">
        <select name="gender" id="" class="form-control form-control-sm validated">
            <option value="" disabled selected>Choose gender</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
        </select>
    </div>
          <div class="md-form mb-4">
                    <input type="password" id="form3" name="password" class="form-control form-control-sm validate" placeholder="Password">
            </div>
            <div class="md-form mb-4">
                    <input type="password" id="form3" name="confirmPassword" class="form-control form-control-sm validate" placeholder="Comfirm-password">
           </div>
  </form>

</div>
<div class="modal-footer d-flex justify-content-center">
<button class="btn btn-default" type="submit" form="tutorForm">Add<i class="fas fa-paper-plane-o ml-1"></i></button>
</div>
</div>
</div>
</div>
@endsection
