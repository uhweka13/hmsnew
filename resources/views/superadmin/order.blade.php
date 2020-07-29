@extends('layouts.app_super')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Orders</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- /.row -->
        <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">HMS Orders</h3>
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
                  @if (count($hospitals) > 0)
                  <table class="table table-hover text-nowrap">
                    <thead>
                      <tr>
                        <th>H-ID</th>
                        <th>Location</th>
                        <th>Contact</th>
                        <th>Start date</th>
                        <th>End date</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($hospitals as $hospital)
                      <tr>
                      <td>{{$hospital->id}}</td>
                        <td>{{$hospital->hLocation}}</td>
                        <td>{{$hospital->hPhone}}</td>
                        <td>{{$hospital->hStartDate}}</td>
                        <td>{{$hospital->hEndDate}}</td>
                        <td>
                          <span class="tag tag-success">Approved</span>
                        </td>
                                    <!-- Central Modal Small -->
                        <td><button data-toggle="modal" data-target="#hmsapprovalmodal{{$hospital->id}}"><i class="fas fa-eye"></i></button>  <button data-toggle="modal" data-target="#hmsdeletemodal"><i class="fas fa-trash"></i></button></td>
                        <div class="modal fade" id="hmsapprovalmodal{{$hospital->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                          aria-hidden="true">
                          <!-- Change class .modal-sm to change the size of the modal -->
                          <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                              <h4 class="modal-title w-100" id="myModalLabel">Hospital Id <b>{{$hospital->id}}</b></h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <div class="row">
                                  <div class="col-md-6">
                                    {{$hospital->hType}} <hr>
                                    {{$hospital->hEmail}} <hr>
                                    {{$hospital->hWebsite}} <hr>
                                    {{$hospital->hEstablish}}
                                  </div>
                                  <div class="col-md-6">
                                    {{$hospital->hName}} <hr>  
                                    {{$hospital->hPhone}} <hr>
                                    {{$hospital->hState}} <hr>
                                    {{$hospital->hLocation}}
                                  </div>
                                </div>
                                {{-- form for approving hospital --}}
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                                <form action="/approve" method="post" id="approvalForm">
                                  @csrf
                                <input type="hidden" name="hId" value="{{$hospital->id}}">
                                <button type="submit" class="btn btn-primary btn-sm">Approve</button>
                                </form>
                                
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- Central Modal Small -->

                      </tr>  
                      @endforeach
                    </tbody>
                  </table>
                  @else
                     <p>No records</p> 
                  @endif
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
          </div>
          <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2012-2019 <a href="http://adminlte.io">Brightosoft</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 0.0.1
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
    
@endsection

