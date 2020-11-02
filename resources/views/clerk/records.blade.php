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
                    <h3 class="card-title">Patient Record</h3>
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
                          <th>Location</th>
                          <th>Amount Paid</th>
                          <th>Balance</th>
                          <th>Satus</th>
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
                        <td>{{$patient->residArea}}</td>
                        <td></td>
                        <td></td>
                        <td></td>
                       <td><button data-toggle="modal" data-target="#payBill{{$patient->id}}">
                        <i class="fas fa-eye text-blue"></i>
                        </button>
                        </td>
                      </tbody>
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
        
@endsection