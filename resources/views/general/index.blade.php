<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
    <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- JQVMap -->
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="{{ asset('../../plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') }}">
  <!-- Toastr -->
  <link rel="stylesheet" href="{{ asset('../../plugins/toastr/toastr.min.css') }}">
  <link rel="stylesheet" href="{{ asset('plugins/jqvmap/jqvmap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker.css') }}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.css') }}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body>

    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark primary-color">

        <!-- Navbar brand -->
        <a class="navbar-brand" href="/">FlandCare</a>

        <!-- Collapse button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
        aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
    
        <!-- Collapsible content -->
        <div class="collapse navbar-collapse" id="basicExampleNav">
    
        <!-- Links -->
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
            <a class="nav-link" href="/">Home
                <span class="sr-only">(current)</span>
            </a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Features</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="/billing/index">Billing</a>
            </li>
    
            <!-- Dropdown -->
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">Hospital</a>
            <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#">In progress</a>
                <a class="dropdown-item" href="#">In progress</a>
                <a class="dropdown-item" href="#">In progress</a>
            </div>
            </li>
    
        </ul>
        <!-- Links -->
    
        <form class="form-inline">
            <div class="md-form my-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            </div>
        </form>
        </div>
        <!-- Collapsible content -->
    
    </nav>
    <!--/.Navbar-->
    <div>

       
        <!-- Jumbotron -->
            <div class="jumbotron p-0" style="height: 400px; background-image: url('img/headbackhms.png'); background-size: 100%; background-repeat: no-repeat; background-color: #fff;">

                <!-- Card image -->
                <div class="view overlay rounded-top">
                {{-- <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(134).jpg" class="img-fluid" alt="Sample image"> --}}
                <a href="#">
                    <div class="mask rgba-white-slight"></div>
                </a>
                </div>
            
                <!-- Card content -->
                <div class="card-body text-center mb-3">
            
                <!-- Title -->
                <h3 class="h3 my-4"><strong>Hospital Management Solution</strong></h3>
                <!-- Text -->
                <p class="card-text py-2">Manage medical facilities all in one place.</p>
                <!-- Button -->
                <a href="/login" style="border-radius: 50px;" class="btn btn-outline-secondary btn-rounded waves-effect">Get Started</a>
            
                </div>
            
            </div>
            <!-- Jumbotron -->
    </div>
    <div class="container-fluid">
        <h4 class="text-uppercase font-weight-bold text-center">ABOUT US</h4>

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-6 mb-4">

        <!--Card-->
        <div class="card default-color-dark">

          <!--Card image-->
          <div class="view" style="height: 300px; background-image: url('img/health.png'); background-size: 100%; background-repeat: no-repeat; background-color: #fff;">
            {{-- <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(125).jpg" class="card-img-top" alt="photo"> --}}
            <a href="#">
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>

          <!--Card content-->
          <div class="card-body text-center">
            <!--Title-->
             <!--Title-->
             <h4 class="card-title white-text">MISSION</h4>
             <!--Text-->
             <p class="card-text white-text">To make Health Facilities readily available to people and to ease communications between health institutions 
               and Patients easily by leveraging on technology</p>
            <a href="#" class="btn btn-outline-white btn-md waves-effect">MORE</a>
          </div>

        </div>
        <!--/.Card-->

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-6 mb-4">

        <!--Card-->
        <div class="card primary-color-dark">

          <!--Card image-->
          <div class="view" style="height: 300px; background-image: url('img/health3.jpg'); background-size: 100%; background-repeat: no-repeat; background-color: #fff;">
            {{-- <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(122).jpg" class="card-img-top" alt="photo"> --}}
            <a href="#">
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>

          <!--Card content-->
          <div class="card-body text-center">
            <!--Title-->
            <h4 class="card-title white-text">VISION</h4>
            <!--Text-->
            <p class="card-text white-text">To provide global health solution without compromising standards</p>
            <a href="#" class="btn btn-outline-white btn-md waves-effect">MORE</a>
          </div>

        </div>
        <!--/.Card-->

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

    <h4 class="text-uppercase font-weight-bold text-center">OUR SERVICES</h4>

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-lg-4 col-md-12 mb-4">

        <!--Card Primary-->
        <div class="card mdb-color text-center z-depth-2">
          <div class="card-body">
            <h3 class="text-uppercase font-weight-bold cyan-text mt-2 mb-3"><strong>LABORATORIES</strong></h3>
            <p class="white-text mb-0">Our Laboratories  have standard Equipments that can cater for all your tests needs</p>
          </div>
        </div>
        <!--/.Card Primary-->

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-lg-4 col-md-6 mb-4">

        <!--Card Primary-->
        <div class="card red darken-4 text-center z-depth-2">
          <div class="card-body">
            <h3 class="text-uppercase font-weight-bold light-green-text mt-2 mb-3"><strong>X-RAY/SCANNING</strong></h3>
            <p class="white-text mb-0">Good and standard x-Ray and Ultrasound Scan</p>
          </div>
        </div>
        <!--/.Card Primary-->

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-lg-4 col-md-6 mb-4">

        <!--Card Primary-->
        <div class="card light-blue darken-1 text-center z-depth-2">
          <div class="card-body">
            <h3 class="text-uppercase font-weight-bold purple-text mt-2 mb-3"><strong>AMBULANCE SERVICES</strong></h3>
            <p class="white-text mb-0">Our Ambulance Service Providers gives the best Ambulance Services</p>
          </div>
        </div>
        <!--/.Card Primary-->

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->
 <!-- Grid row -->
 <div class="row">

  <!-- Grid column -->
  <div class="col-lg-4 col-md-12 mb-4">

    <!--Card Primary-->
    <div class="card mdb-color text-center z-depth-2">
      <div class="card-body">
        <h3 class="text-uppercase font-weight-bold cyan-text mt-2 mb-3"><strong>SPECIALIST HOSPITAL</strong></h3>
        <p class="white-text mb-0">You have access to tertiary hospitals here </p>
      </div>
    </div>
    <!--/.Card Primary-->

  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="col-lg-4 col-md-6 mb-4">

    <!--Card Primary-->
    <div class="card red darken-4 text-center z-depth-2">
      <div class="card-body">
        <h3 class="text-uppercase font-weight-bold light-green-text mt-2 mb-3"><strong>CLINIC</strong></h3>
        <p class="white-text mb-0">Our Clinics provide both primary and secondary healthcare </p>
      </div>
    </div>
    <!--/.Card Primary-->

  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="col-lg-4 col-md-6 mb-4">

    <!--Card Primary-->
    <div class="card light-blue darken-1 text-center z-depth-2">
      <div class="card-body">
        <h3 class="text-uppercase font-weight-bold purple-text mt-2 mb-3"><strong>PHARMACY</strong></h3>
        <p class="white-text mb-0">Get Drugs from trusted Phamacies around the globe </p>
      </div>
    </div>
    <!--/.Card Primary-->

  </div>
  <!-- Grid column -->

</div>
<!-- Grid row -->

    </div>

    <!--Billing -->
    <h4 class="text-uppercase font-weight-bold text-center">BILLING</h4>
    <h5 class="font-weight-bold text-center">Click on 
    <a href="/login" style="border-radius: 50px;" class="btn btn-rounded waves-effect">Get Started</a>
    to get started with free trial</h5>
    <p class="font-weight-bold text-center">Make a transfer to UBA 1018921974 Datiyi Space Communications <br>
    and then call the suport Center on 07082886732 </p>

<!-- Grid row -->
<div class="row">

  <!-- Grid column -->
  <div class="col-lg-4 col-md-12 mb-4">

    <!--Card Primary-->
    <div class="card mdb-color text-center z-depth-2">
      <div class="card-body">
        <h3 class="text-uppercase font-weight-bold cyan-text mt-2 mb-3"><strong>Standard</strong></h3>
        <p class="white-text mb-0">Billing for small Chemists or pharmacies for keeping inventory of sales</p>
        <h6 class="white-text mb-0">N5,000.00 per Annum</h6>
        <h4 class="white-text mb-0">Features</h4>
        <ul class="white-text mb-0">
        <li>Inventory</li>
        <li>Sales</li>
        </ul>
        <button type="button" data-toggle="modal" data-target="#standard" class="btn btn-outline-white btn-md waves-effect">Pay</button>
      </div>
    </div>
    <!--/.Card Primary-->

  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="col-lg-4 col-md-6 mb-4">

    <!--Card Primary-->
    <div class="card red darken-4 text-center z-depth-2">
      <div class="card-body">
        <h3 class="text-uppercase font-weight-bold light-green-text mt-2 mb-3"><strong>Premium</strong></h3>
        <p class="white-text mb-0">Billing for Clinics for keeping inventory of sales</p>
        <h6 class="white-text mb-0">N20,000.00 per Annum</h6>
        <h4 class="white-text mb-0">Features</h4>
        <ul class="white-text mb-0">
        <li>Inventory</li>
        <li>Sales</li>
        <li>Manage Personnel</li>
        <li>Manage Departments</li>
        <li>Manage Patients</li>
        </ul>
        <button type="button" data-toggle="modal" data-target="#premium" class="btn btn-outline-white btn-md waves-effect">Pay</button>
        
      </div>
    </div>
    <!--/.Card Primary-->

  </div>
 
  <div class="col-lg-4 col-md-6 mb-4">

    <!--Card Primary-->
    <div class="card light-blue darken-1 text-center z-depth-2">
      <div class="card-body">
        <h3 class="text-uppercase font-weight-bold purple-text mt-2 mb-3"><strong>Gold</strong></h3>
        <p class="white-text mb-0">Billing for Hospitals for keeping inventory of sales</p>
        <h6 class="white-text mb-0">N50,000.00 per Annum</h6>
        <h4 class="white-text mb-0">Features</h4>
        <ul class="white-text mb-0">
        <li>Inventory</li>
        <li>Sales</li>
        <li>Manage Personnel</li>
        <li>Manage Departments</li>
        <li>Manage Patients</li>
        <li>Provide online Consultancy</li>
        </ul>
        <button type="button" data-toggle="modal" data-target="#gold" class="btn btn-outline-white btn-md waves-effect">Pay</button>
      </div>
    </div>
    <!--/.Card Primary-->

  </div>
  <!-- Grid column -->

</div>
<!-- Grid row -->
<!-- Grid row -->


    <!--End Billing -->
<!-- Standard Billing Modal-->
  <div class="modal fade" id="standard" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                <label>Patient ID: </label>
                
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
        <!-- End Standard Billing Modal -->
  
    <!-- Footer -->
    <footer class="page-footer font-small teal pt-4">

      <!-- Footer Text -->
      <div class="container-fluid text-center text-md-left">

        <!-- Grid row -->
        <div class="row">

          <!-- Grid column -->
          <div class="col-md-12 mt-md-0 mt-3">

            <!-- Content -->
            <h5 class="text-uppercase font-weight-bold text-center">Address</h5>
            <p class="text-center">No 3 Daholpya, Along Abuja Road, 
              Jos South, Plateau State</p>
              <h6 class="text-uppercase font-weight-bold text-center">Email:flandcarecall@gmail.com</h6>
              <h6 class="text-uppercase font-weight-bold text-center">Phone Number: 07082886732</h6>
          </div>

        </div>
        <!-- Grid row -->

      </div>
      <!-- Footer Text -->

      <!-- Copyright -->
      <div class="footer-copyright text-center py-3">© 2020 Copyright:
        <a href="">FlandCare</a>
      </div>
      <!-- Copyright -->

    </footer>
    <!-- Footer -->


    


    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
</body>
</html> 