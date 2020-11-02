@extends('layouts.lab_app')
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
    <section class="content">

          <div class="container-fluid">
            <div class="row">
            <div class="col-12">
                
                <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Patient Test Result</h3>
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
                
                  <table class="table table-hover">
                      <thead>
                          <tr>
                          <th>Card No</th>
                          <th>Names</th>
                          <th>D.O.B</th>
                          <th>Phone Number</th>
                          <th>Location</th>
                          <th>Test</th>
                          <th>Result</th>
                          <th>Amount Paid</th>
                          <th>Balance</th>
                          <th>Action</th>
                          </tr>
                      </thead>
                      <tbody>
                          <td>check</td>
                          <td>check</td>
                          <td>check</td>
                          <td>check</td>
                          <td>check</td>
                          <td>check</td>
                          <td>check</td>
                          <td>check</td>
                          <td>check</td>
                          <td><button data-toggle="modal" data-target="#test">
                          <i class="fas fa-eye text-green"></i>
                          </button></td>
                      </tbody>
                    </table>
    
                 
                   </div>
               
                </div>
                
              </div>
            </div>
            
          </div>

        </section>
        <!-- Add Drug Modal Form -->

        <div class="modal fade" id="test" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">TEST RESULT</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form>
            <div class="modal-body">
            <p><b>Patient ID:</b></p><hr>
            <p><b>Patient Name:</b></p><hr>
            <p><b>Speciment:</b></p><hr>
            <p><b>Investigation:</b></p><hr>
            <div class="form-group">
                <label>Result: </label>
                <textarea type="text" class="form-control" name="nameOfDrug"  placeholder="Result"></textarea>
            </div>
            
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Save</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- end of Add Drug Modal -->
@endsection
