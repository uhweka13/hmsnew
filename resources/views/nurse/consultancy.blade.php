@extends('layouts.nurse_app')
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
                  <li class="breadcrumb-item active">Nurse</li>
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
                    <h3 class="card-title">Patient on consultancy</h3>
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
                  @if (count($consultancies) > 0)
                  <table class="table table-hover">
                      <thead>
                          <tr>
                          
                          <th>Names</th>
                          <th>Age</th>
                          <th>Phone Number</th>
                          <th>State</th>
                          <th>Location</th>
                          <!-- <th>Action</th> -->
                          </tr>
                      </thead>
                      @foreach ($consultancies as $consultancy)

                    <tbody>
                        <tr>
                                            
                         <td>{{$consultancy->fName}}&nbsp;{{$consultancy->mName}}&nbsp;{{$consultancy->lName}}</td>
                        <td>{{$consultancy->age}}</td>
                        <td>{{$consultancy->phone}}</td>
                        <td>{{$consultancy->state}}</td>
                        <td>{{$consultancy->residArea}}</td>
                        <td>
                   <!-- <button data-toggle="modal" data-target="#delete{{$consultancy->id}}">
                        <i class="fas fa-eject text-red"></i>
                        </button>
                        <button data-toggle="modal" data-target="#booking{{$consultancy->id}}">
                          <i class="fas fa-eye text-green"></i>
                          </button>
                          <button data-toggle="modal" data-target="#vital{{$consultancy->id}}">
                            <i class="fas fa-eye text-blue"></i>
                            </button> -->
                        </td>
                     <!-- Booking modal-->
                     <div class="modal fade" id="booking{{$consultancy->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                      aria-hidden="true">
                      <!-- Change class .modal-sm to change the size of the modal -->
                      <div class="modal-dialog modal-md" role="document">
                        <div class="modal-content">
                          <div class="modal-body">
                              <form action="/booking" method="post" id="booking">
                                @csrf
                              <input name="patientId" id="id" type="hidden" value="{{$consultancy->id}}">
                              <h4 class="text-danger text-center">CARD NUMBER:{{$consultancy->id}}</h4>
                              <span>{{$consultancy->fName}}</span>&nbsp;<span>{{$consultancy->mName}}</span>&nbsp;{{$consultancy->lName}}<hr>
                              <span>{{$consultancy->age}}</span><hr>
                              <span>{{$consultancy->phone}}</span><hr>
                              <span>{{$consultancy->state}}</span><hr>
                              <span>{{$consultancy->residArea}}</span><hr>
                              <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
                            <button type="submit" type="submit" class="btn btn-danger btn-sm pull-right">unbook</button>
                              </form>
                            
                          </div>
                          
                        </div>
                      </div>
                    </div>
                    <!-- Delete News modal -->

                     <!-- Edit Patient's records -->
                  <div class="modal fade" id="vital{{$consultancy->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header text-center">
                          <h4 class="modal-title w-100 font-weight-bold">Patient Vital</h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                  <div class="modal-body mx-3">
                    <form method="POST" action="/patient-vital" role="form" id="patientVital">
                      @csrf
                          <div class="md-form mb-4">
                          <input type="hidden" name="patientId" value="{{$consultancy->id}}">
                          <input type="text" id="form3" name="temp" class="form-control form-control-sm validate" placeholder="Body Temperature">
                          </div>
                          <div class="md-form mb-4">
                              <input type="text" id="form3" name="respo" class="form-control form-control-sm validate" placeholder="Repository Rate">
                          </div>
                          <div class="md-form mb-4">
                              <input type="text" id="form3" name="pressure" class="form-control form-control-sm validate" placeholder="Blood Pressure">
                          </div>
                          <div class="md-form mb-4">
                            <input type="text" id="form3" name="pulse" class="form-control form-control-sm validate" placeholder="Pulse Rate">                     
                           </div>
                           <div class="md-form mb-4">
                            <textarea name="note" id="note" class="form-control" placeholder="Note..."></textarea>                    
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
                      <button class="btn btn-default" type="submit" form="patientVital">Proceed<i class="fas fa-paper-plane-o ml-1"></i></button>
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
                {{$consultancies->links()}}
                </div>
                <!-- /.card -->
            </div>
            </div>
            <!-- /.row -->
        </div>
        </section>
        </div>
      <!-- /.content-wrapper -->
@endsection
