<?php 
session_start();
if (isset($_SESSION['hid'])) {
  header("location:bloodrequest.php");
}elseif (isset($_SESSION['rid'])) {
  header("location:sentrequest.php");
}else{
?>
<!DOCTYPE html>
<html>
<head>
  <style>
    body{
      background: url(image/RBC7.jpg) no-repeat center;
   
    background-size: cover;
    min-height: 0;
    height: 650px;
  }
.login-form{
    width: calc(100% - 20px);
    max-height: 650px;
    max-width: 450px;
    background-color: white;
}
</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<?php $title="Bloodbank | Login"; ?>
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
      <a class="nav-link" href="login.php" style="color:white;letter-spacing: 2px">LOGIN</a>
    </li>
   <li class="nav-item" style="padding:0px">
      <a class="nav-link" href="register.php" style="color:white;letter-spacing: 2px">SIGN UP</a>
    </li>
  </ul>
</div>
</div>
</nav>

    <div class="container cont">
      
      <?php require 'message.php'; ?>

      <div class="row justify-content-center">
        <div class="col-lg-4 col-md-5 col-sm-6 col-xs-7 mb-5">

          <div class="card rounded">
            <ul class="nav nav-tabs justify-content-center bg-light" style="padding: 20px;">
      <li class="nav-item">
        <a class="nav-link active" data-toggle="tab" href="#hospitals">Hospitals</a>
      </li>
     <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#receivers">User</a>
     </li>
    </ul>

    <div class="tab-content">
       <div class="tab-pane container active" id="hospitals">
        <form action="file/hospitalLogin.php" class="login-form" method="post">
          <label class="text-muted font-weight-bold" class="text-muted font-weight-bold">Hospital Email</label>
          <input type="email" name="hemail" placeholder="Hospital Email" class="form-control mb-4">
          <label class="text-muted font-weight-bold" class="text-muted font-weight-bold">Hospital Password</label>
          <input type="password" name="hpassword" placeholder="Hospital Password" class="form-control mb-4">
          <input type="submit" name="hlogin" value="Login" class="btn btn-primary btn-block mb-4">
        </form>
       </div>


      <div class="tab-pane container fade" id="receivers">
         <form action="file/receiverLogin.php" class="login-form" method="post">
          <label class="text-muted font-weight-bold" class="text-muted font-weight-bold">User Email</label>
          <input type="email" name="remail" placeholder="User Email" class="form-control mb-4">
          <label class="text-muted font-weight-bold" class="text-muted font-weight-bold">User Password</label>
          <input type="password" name="rpassword" placeholder="User Password" class="form-control mb-4">
          <input type="submit" name="rlogin" value="Login" class="btn btn-primary btn-block mb-4">
        </form>
      </div>

    </div>
    <a href="register.php" class="text-center mb-4" title="Click here">Don't have account?</a>
    <a href="main.php" class="text-center mb-4" title="Click here">Back to home</a>
</div>
</div>
</div>
</div>
<?php //require 'footer.php' ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
</body>
</html>
<?php } ?>