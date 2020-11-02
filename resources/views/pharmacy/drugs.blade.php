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
              <!--<div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="admin-index">Home</a></li>
                  <li class="breadcrumb-item active">Pharmacy Dashboard</li>
                </ol>
              </div> /.col -->
            </div><!-- /.row -->
          </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <!-- Main content -->
        <section class="content">
                 <!-- Drugs inventory table -->
<div class="container-fluid">
            <button data-toggle="modal" data-target="#addDrugs">
                  Add
              </button>
            <div class="row">
            <div class="col-12">
                
                <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Drugs Inventory</h3>
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
                          <th>ID</th>
                          <th>Name</th>
                          <th>Make</th>
                          <th>Strength</th>
                          <th>Expiry Date</th>
                          <th>Type</th>
                          <th>Total in Stock</th>
                          <th>Total Added</th>
                          <th>Unit Price</th>
                          </tr>
                      </thead>
                      @foreach ($consultancies as $consultancy)
                      <tbody>
                          <td>{{$drugs->id}}</td>
                          <td>{{$drugs->id}}</td>
                          <td>{{$drugs->id}}</td>
                          <td>{{$drugs->id}}</td>
                          <td>{{$drugs->id}}</td>
                          <td>{{$drugs->id}}</td>
                          <td>{{$drugs->id}}</td>
                          <td>{{$drugs->id}}</td>
                          <td>{{$drugs->id}}</td>
                          
                      </tbody>
                    </table>
                      @endforeach
                    @else
                    <p>No record found</p>
                    @endif 
                  

<!-- Add Drug Modal Form -->

            <div class="modal fade" id="addDrugs" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Drugs</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="/pharmacy-store" method="POST">
      @csrf
            <div class="modal-body">
        
            <input type="text" name="hospital_id" value='1'>
                <input type="text" name="user_id" value='1'>
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" name="nameOfDrug"  placeholder="Name of Drug">
            </div>
            <div class="form-group">
                <label>Make</label>
                <input type="text" class="form-control" name="drugMake"  placeholder="Make of Drug">
            </div>
            <div class="form-group">
                <label>Drug Strength</label>
                <input type="text" class="form-control" name="drugStrength"  placeholder="Stength of Drug">
            </div>
            <div class="form-group">
                <label>Expiry Date</label>
                <input type="text" class="form-control" name="expDate"  placeholder="Expiry Date">
            </div>
            <div class="form-group">
                <label>Drug Type</label>
                <input type="text" class="form-control" name="drugType"  placeholder="Type">
            </div>
            <div class="form-group">
                <label>Quantity</label>
                <input type="text" class="form-control" name="quantity"  placeholder="Quantity">
            </div>
            <div class="form-group">
                <label>Unit Price</label>
                <input type="text" class="form-control" name="unitPrice"  placeholder="Unity Price">
            </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Add</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- end of Add Drug Modal -->

        </section>
      </div>
        
      <!-- /.content-wrapper -->
@endsection