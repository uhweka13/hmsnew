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
                  <li class="breadcrumb-item active">Laboratory Dashboard</li>
                </ol>
              </div><!-- /.col -->
            </div><!-- /.row -->
          </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <!-- Main content -->
        <section class="content">
             
<!-- Consumables table -->
<div class="container-fluid">
              <button data-toggle="modal" data-target="#addConsumable">
                  Add
              </button>
            <div class="row">
            <div class="col-12">
                
                <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Lab Consumables</h3>
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
                          <th>ID</th>
                          <th>Name</th>
                          <th>Make</th>
                          <th>Expiry Date</th>
                          <th>Type</th>
                          <th>Total in Stock</th>
                          <th>Total Added</th>
                          <th>Unit Price</th>
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
                          
                      </tbody>
                       
                    </table>



            <div class="modal fade" id="addConsumable" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Lab Consumable</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="/add-consumables-lab" method="POST" role="form">
      @csrf
            <div class="modal-body">
            
                <input type="text" name="hospital_id" value='1'>
                <input type="text" name="user_id" value='1'>

            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" name="cName"  placeholder="Name of Consumable">
            </div>
            <div class="form-group">
                <label>Make</label>
                <input type="text" class="form-control" name="cMake"  placeholder="Make of Consumable">
            </div>
            <div class="form-group">
                <label>Expiry Date</label>
                <input type="text" class="form-control" name="expDate"  placeholder="Expiry Date">
            </div>
            <div class="form-group">
                <label>Type</label>
                <input type="text" class="form-control" name="type"  placeholder="Type">
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
        </section>
        </div>
        
      <!-- /.content-wrapper -->
@endsection