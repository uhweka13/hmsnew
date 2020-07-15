<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
</head>
<body>

    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark primary-color">

        <!-- Navbar brand -->
        <a class="navbar-brand" href="#">Navbar</a>
    
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
            <a class="nav-link" href="#">Home
                <span class="sr-only">(current)</span>
            </a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Features</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Pricing</a>
            </li>
    
            <!-- Dropdown -->
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">Dropdown</a>
            <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
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
            <div class="jumbotron p-0">

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
                <h3 class="card-title h3 my-4"><strong>Card title</strong></h3>
                <!-- Text -->
                <p class="card-text py-2">Some quick example text to build on the card title and make up the bulk of the card's</p>
                <!-- Button -->
                <a href="#" class="btn purple-gradient btn-rounded mb-4">Button</a>
            
                </div>
            
            </div>
            <!-- Jumbotron -->
    </div>
    <div class="container-fluid">
        <h4 class="text-center py-4">Two equal columns layout</h4>

<!-- Grid row -->
<div class="row">

  <!-- Grid column -->
  <div class="col-md-6 mb-4">

    <!--Card-->
    <div class="card default-color-dark">

      <!--Card image-->
      <div class="view">
        <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(125).jpg" class="card-img-top" alt="photo">
        <a href="#">
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>

      <!--Card content-->
      <div class="card-body text-center">
        <!--Title-->
        <h4 class="card-title white-text">News title</h4>
        <!--Text-->
        <p class="card-text white-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem
          accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et
          quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas.</p>
        <a href="#" class="btn btn-outline-white btn-md waves-effect">Button</a>
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
      <div class="view">
        <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(122).jpg" class="card-img-top" alt="photo">
        <a href="#">
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>

      <!--Card content-->
      <div class="card-body text-center">
        <!--Title-->
        <h4 class="card-title white-text">News title</h4>
        <!--Text-->
        <p class="card-text white-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem
          accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et
          quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas.</p>
        <a href="#" class="btn btn-outline-white btn-md waves-effect">Button</a>
      </div>

    </div>
    <!--/.Card-->

  </div>
  <!-- Grid column -->

</div>
<!-- Grid row -->

<h4 class="text-center py-4">Three equal columns layout</h4>

<!-- Grid row -->
<div class="row">

  <!-- Grid column -->
  <div class="col-lg-4 col-md-12 mb-4">

    <!--Card Primary-->
    <div class="card mdb-color text-center z-depth-2">
      <div class="card-body">
        <h3 class="text-uppercase font-weight-bold cyan-text mt-2 mb-3"><strong>First column</strong></h3>
        <p class="white-text mb-0">Ut enim ad minima veniam, quis nostrum exercita tionem ullam corporis
          suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur. Quis autem vel eum iure reprehenderit
          qui in ea voluptate non proident velit esse quam. </p>
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
        <h3 class="text-uppercase font-weight-bold light-green-text mt-2 mb-3"><strong>Second column</strong></h3>
        <p class="white-text mb-0">Ut enim ad minima veniam, quis nostrum exercita tionem ullam corporis
          suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur. Quis autem vel eum iure reprehenderit
          qui in ea voluptate non proident velit esse quam. </p>
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
        <h3 class="text-uppercase font-weight-bold purple-text mt-2 mb-3"><strong>Third column</strong></h3>
        <p class="white-text mb-0">Ut enim ad minima veniam, quis nostrum exercita tionem ullam corporis
          suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur. Quis autem vel eum iure reprehenderit
          qui in ea voluptate non proident velit esse quam. </p>
      </div>
    </div>
    <!--/.Card Primary-->

  </div>
  <!-- Grid column -->

</div>
<!-- Grid row -->


    </div>


    


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