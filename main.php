<?php 
    session_start();

    ?>
<!DOCTYPE html>
<html>
<?php $title="Blood Bank Management System | home page"; ?>
<?php require 'head.php'; ?>
<head>
  <title></title>
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/styles.css"> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  
</head>
<body style="color:black">
<nav class="navbar navbar-expand-md navbar-custom navbar-dark sticky-top" style="border-bottom: 5px solid black; background-color: black;padding-bottom:10px ;padding-top:10px ">
<div class="container-fluid">
  <a class="" style="font-size:25px;color:white;font-weight: bold;">BLOOD BANK SYSTEM</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarResponsive">
<ul class="navbar-nav ml-auto" style="padding-left:5px;padding-right:100px">

    <li  style="padding-right:60px;padding-top:px;color:white">
      <a class="nav-link" href="main.php" style="color:white;letter-spacing: 2px" >HOME</a>
    </li>
    </li>
   <li class="nav-item" style="padding-right:60px">
      <a class="nav-link" href="index.php" style="color:white;letter-spacing: 2px">LOGIN</a>
    </li>
   <li class="nav-item" style="padding:0px">
      <a class="nav-link" href="index.php" style="color:white;letter-spacing: 2px">SIGN UP</a>
    </li>
  </ul>
</div>
</div>
</nav>

<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="image/RBC6.jpg" alt="Los Angeles" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="image/cc1.jpg" alt="Chicago" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="image/blog-4.png" alt="New York" width="1100" height="500">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<section class="my-5">
  <div class="py-5">
    <h2 class="text-center"></h2>
  </div>

  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-12">
        <img src="image/about1.png" class="img-fluid aboutimg">
      </div>
      <div class="col-lg-6 col-md-6 col-12">
      <h2>BLOOD - "I'm here to save you!"</h2>
      <p class="py-3">We believe Every life counts!, Every life matters. Time is the thing we have and don't. Our goal is to make blood available in less time and save your precious life!</p>
      <a href="about.php"> </a> 
      </div>
    </div>
  </div>
</section>


<div class= "footer" id="footer" style="text-align: center;padding-top: 2%;font-size: 15px;background-color:black;color:white;">

<div class="container">
    <div class="row" style="background-color:;color:white;">
   
        <div class=" fadeInUp">
            <div class="d-block text-center block-7">
            <div class="d-flex justify-content-center align-items-center ">
                <b>GENERAL ENQUIRIES</b>
            </div>
            <div class="media-body">
                Call +919876543210,<BR>+911234567890,<br>+919876543210
                </div>
            </div>
            </div>
        
    </div>
    <br><br>
  
    <div style="display: grid;">
      <div style="grid-column:1;grid-row:1;">© 2022, Blood Bank </div>
          <div style="grid-column:2;float: right;">GIVE BLOOD SAVE LIVES.</div>
    </div>
    <br><br>
</div>
</div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
</body>
</html>