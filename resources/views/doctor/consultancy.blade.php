@extends('layouts.doctor_app')
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
                  <li class="breadcrumb-item active">Doctor</li>
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
                    <h3 class="card-title">Patients on consultancy</h3>
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
                          <th>Card No.</th>
                          <th>Names</th>
                          <th>Gender</th>
                          <th>Phone Number</th>
                          <th>State</th>
                          <th>Location</th>
                          <th>Action</th>
                          </tr>
                      </thead>
                      @foreach ($consultancies as $consultancy)

                    <tbody>
                        <tr>
                        <td>{{$consultancy->id}}</td>                      
                         <td>{{$consultancy->fName}}&nbsp;{{$consultancy->mName}}&nbsp;{{$consultancy->lName}}</td>
                        <td>{{$consultancy->email}}</td>
                        <td>{{$consultancy->gender}}</td>
                        <td>{{$consultancy->phone}}</td>
                        <td>{{$consultancy->state}}</td>
                        <td>{{$consultancy->residArea}}</td>
                        <td>
                        <button data-toggle="modal" data-target="#booking{{$consultancy->id}}">
                          <i class="fas fa-user text-green"></i>
                          </button>
                          <button data-toggle="modal" data-target="#labRequest{{$consultancy->id}}">
                          <i class="fas fa-user text-green"></i>
                          </button>
                          <button data-toggle="modal" data-target="#prescription{{$consultancy->id}}">
                          <i class="fas fa-user text-green"></i>
                          </button>
                          <button data-toggle="modal" data-target="#vital{{$consultancy->id}}">
                            <i class="fas fa-eye text-blue"></i>
                            </button>
                            <button data-toggle="modal" data-target="#labResult{{$consultancy->id}}">
                            <i class="fas fa-eye text-red"></i>
                            </button>
                        </td>
                     <!-- Booking modal-->
                     <div class="modal fade" id="booking{{$consultancy->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                      aria-hidden="true">
                      <!-- Change class .modal-sm to change the size of the modal -->
                      <div class="modal-dialog modal-md" role="document">
                        <div class="modal-content">
                          <div class="modal-body">
                              <form action="/diagnose" method="post" id="booking">
                                @csrf
                              <input name="patientId" id="id" type="hidden" value="{{$consultancy->id}}">

                              <div class="form-group">
                                <label for="diagnose">Body Temperature </label>
                                <input type="text" id="form3" name="temp" class="form-control form-control-sm validate" placeholder="Body Temperature">
                          </div>
                              
                              <div class="form-group">
                                <label for="diagnose">Repository Rate</label>
                                <input type="text" id="form3" name="respo" class="form-control form-control-sm validate" placeholder="Repository Rate">
                          </div>
                            
                              <div class="form-group">
                                <label for="diagnose">Blood Pressure</label>
                                <input type="text" id="form3" name="pressure" class="form-control form-control-sm validate" placeholder="Blood Pressure">
                          </div>

                              <div class="form-group">
                                <label for="diagnose">Pulse Rate</label>
                                <input type="text" id="form3" name="pulse" class="form-control form-control-sm validate" placeholder="Pulse Rate">                     
                           </div>

                              <div class="form-group">
                                <label for="diagnose">Doctor's Note</label>
                                <textarea name="diagnose" id="diagnose" class="form-control" placeholder="Doctors diagnose"></textarea>
                              </div>
                              <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
                            <button  type="submit" class="btn btn-info btn-sm pull-right">Diagnose</button>
                              </form>
                            
                          </div>
                          
                        </div>
                      </div>
                    </div>
                    <!-- Modal for Drug Prescription -->
<div class="modal fade" id="prescription{{$consultancy->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Drug Prescription</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form>
            <div class="modal-body">
            <input name="patientId" id="id" type="hidden" value="{{$consultancy->id}}">
                
            <div class="form-group">
                <label>Name of Drug</label>
                <input type="text" class="form-control" name="nameOfSpeciment"  placeholder="Name of Drug">
            </div>
            <div class="form-group">
                <label>Dosage</label>
                <input type="text" class="form-control" name="exRequest"  placeholder="Dosage">
            </div>
            <div class="form-group">
                <label>strength</label>
                <input type="text" class="form-control" name="exRequest"  placeholder="Dosage">
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Prescribe</button>
      </div>
      </form>
    </div>
  </div>
</div>
                   <!-- Modal for Lab Result -->
<div class="modal fade" id="labResult{{$consultancy->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Lab Investigation</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form>
            <div class="modal-body">
            <div class="form-group">
                <label>Patient ID: <b>{{$consultancy->id}}</b></label>
                
            </div>
                
            <div class="form-group">
                <label>Name of Speciment</label>
                <!--<input type="text" class="form-control" name="nameOfSpeciment"  placeholder="Name of Speciment"> -->
            </div>
            <div class="form-group">
                <label>Examination Requested</label>
                
            </div>
            <div class="form-group">
                <label>Name of Lab</label>
                
            </div>
            <div class="form-group">
                <label>Result</label>
                
            </div>
      </div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-primary">Send Request</button> -->
      </div>
      </form>
    </div>
  </div>
</div>
<!-- end of laboratory investigation -->
<!-- Modal for Lab request -->
<div class="modal fade" id="labRequest{{$consultancy->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Request Lab Investigation</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action = "/doctor-lab" method = "POST">
      @csrf
            <div class="modal-body">
            
            <input name="patientId"  id="id" type="hidden" value="{{$consultancy->id}}">
            <span>Patient No: <p> {{$consultancy->id}}</p></span>
            <div class="form-group">
               
                <label>Name of Speciment</label>
                <input type="text" class="form-control" name="nameOfSpeciment"  placeholder="Name of Speciment">
            </div>
            <div class="form-group">
                <label>Examination Requested</label>
                <input type="text" class="form-control" name="exRequest"  placeholder="Examination Requested">
            </div>
            <div class="form-group">
                <label>Name of Lab</label>
                <input type="text" class="form-control" name="labName"  placeholder="Name of Lab">
            </div>
      </div>
      <div class="modal-footer">
      <button type="submit" type="submit" class="btn btn-info btn-sm pull-right">Send Request</button>
      </div>
      </form>
    </div>
  </div>
</div> 
                    <!-- Vital modal-->
                    <div class="modal fade" id="vital{{$consultancy->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                      aria-hidden="true">
                       Change class .modal-sm to change the size of the modal 
                      <div class="modal-dialog modal-md" role="document">
                        <div class="modal-content">
                          <div class="modal-body">
                            <h4>Patient's Vitals</h4>
                          <p><b>Body Temp:</b>{{$consultancy->id}}</p> <hr>
                          <p><b>Respiration:</b> {{$consultancy->respo}}</p><hr>
                          <p><b>Blood Pressure:</b> {{$consultancy->pressure}}</p> <hr>
                          <p><b>Pulse:</b> {{$consultancy->pulse}}</p> <hr>
                          <p><b>Nurse Note:</b> {{$consultancy->note}}</p>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
                          </div>
                        </div>
                      </div>
                    </div> 
                    <!-- Vital modal -->
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
        
         <!-- Laboratory Investigations -->
        







        </section>
        </div>
      <!-- /.content-wrapper -->
@endsection
