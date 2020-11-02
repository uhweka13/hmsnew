@extends('layouts.pharmacy_app')
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
                  <li class="breadcrumb-item active">Pharmacy Dashboard</li>
                </ol>
              </div><!-- /.col -->
            </div><!-- /.row -->
          </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <!-- Main content -->
        <section class="content">
                 <!-- Drugs inventory table -->
<div class="container-fluid">
            <div class="row">
            <div class="col-12">
                
                <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Dispense Drugs</h3>
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
                          <td><button data-toggle="modal" data-target="#prescription">
                          <i class="fas fa-eye text-green"></i>
                          </button></td>
                          
                      </tbody>
                    </table>

<!-- Dispense Drug Modal -->
<div class="modal fade" id="prescription" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">DISPENSE DRUGS</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form>
            <div class="modal-body">
            <p><b>Patient ID:</b></p>
            <p><b>Patient Name:</b></p><hr>
            <div class="form-group">
                <label>Name of Drug:</label>
                <input type="text" class="form-control" name="nameOfDrug"  placeholder="Name of Drug">
            </div>
            <div class="form-group">
                <label>Make of Drug</label>
                <input type="text" class="form-control" name="drugMake"  placeholder="Make of Drug">
            </div>
            <div class="form-group">
                <label>Drug Strength</label>
                <input type="text" class="form-control" name="drugStrength"  placeholder="Stength of Drug">
            </div>
            
            <div class="form-group">
                <label>Quantity</label>
                <input type="text" class="form-control" name="quantity"  placeholder="Quantity">
            </div>
            
      </div>
      
      <div class="modal-footer">
            <p><b>Unit Price:</b></p>
            <p><b>Total Amount:</b></p>
        <button type="button" class="btn btn-primary">Add</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!--End of Dispense Drug modal -->

        

        </section>
        </div>
        
      <!-- /.content-wrapper -->
@endsection