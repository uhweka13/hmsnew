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
                  <li class="breadcrumb-item"><a href="doctor-index">Home</a></li>
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
                    <h3 class="card-title">Patient's records</h3>
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
                  @if (count($records) > 0)
                  <table class="table table-hover">
                      <thead>
                          <tr>
                          <th>ID</th>
                          <th>Names</th>
                          <th>Age</th>
                          <th>Gender</th>
                          <th>Phone Number</th>
                          <th>State</th>
                          <th>Location</th>
                          <th>Action</th>
                          </tr>
                      </thead>
                      @foreach ($records as $record)
                    <tbody>
                        <tr>
                        <td>{{$record->id}}</td>                      
                         <td>{{$record->fName}}&nbsp;{{$record->mName}}&nbsp;{{$record->lName}}</td>
                        <td>{{$record->age}}</td>
                        <td>{{$record->gender}}</td>
                        <td>{{$record->phone}}</td>
                        <td>{{$record->state}}</td>
                        <td>{{$record->residArea}}</td>
                        <td>
                        <button data-toggle="modal" data-target="#display{{$record->id}}">
                          <i class="fas fa-eye text-green"></i>
                          </button>
                        </td>
                    <!-- Delete news modal-->
                    <div class="modal fade" id="display{{$record->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                        aria-hidden="true">
  
                        <!-- Change class .modal-sm to change the size of the modal -->
                        <div class="modal-dialog modal-md" role="document">
  
  
                          <div class="modal-content">
                            <div class="modal-header">
                              <h4>Patient's Diagnose</h4>
                            </div>
                            <div class="modal-body">
                               <p>{{$record->diagnose}}</p>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
                            </div> 
                          </div>
                        </div>
                      </div>
                      {{-- delete --}}
                        </tr>
                    </tbody>
                                            
                      @endforeach
                    </table>
    
                  @else
                      <p>No record found</p>
                  @endif
                </div>
                <!-- /.card-body -->
                {{$records->links()}}
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
