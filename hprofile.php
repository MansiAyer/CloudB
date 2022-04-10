<?php
require 'file/connection.php';
session_start();
if(!isset($_SESSION['hid']))
{
  header('location:login.php');
}
else {
	if(isset($_SESSION['hid'])){
		$id=$_SESSION['hid'];
		$sql = "SELECT * FROM hospitals WHERE id='$id'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_array($result);
	}
}
?>

<!DOCTYPE html>
<html>
<?php $title="Bloodbank | My Profile"; ?>

<style>
    body{
    background: url(jastimage/bb18.jpg) no-repeat center;
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
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<body style="color:black">
<nav class="navbar navbar-expand-md navbar-custom navbar-dark sticky-top" style="border-bottom: 5px solid black; background-color: black;padding-bottom:10px ;padding-top:10px ">
<div class="container-fluid">
  <a class="" href="hospitalpage.html" style="font-size:25px;color:white;font-weight: bold;">BLOOD BANK SYSTEM</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarResponsive">
</div>
</div>
</nav>

	<div class="container cont">

		<?php require 'message.php'; ?>

		<div class="row justify-content-center">
			<div class="col-lg-4 col-md-4 col-sm-6 mb-5">
				<div class="card">
					<div class="media justify-content-center mt-1">
						<img src="image/hospital.png" alt="profile" class="rounded-circle" width="70" height="60">
					</div>
					<div class="card-body">
					   <form action="file/updateprofile.php" method="post">
					   	<label class="text-muted font-weight-bold" class="text-muted font-weight-bold">Hospital Name</label>
						<input type="text" name="hname" value="<?php echo $row['hname']; ?>" class="form-control mb-3">
						<label class="text-muted font-weight-bold">Hospital Email</label>
						<input type="email" name="hemail" value="<?php echo $row['hemail']; ?>" class="form-control mb-3">
						<label class="text-muted font-weight-bold">Hospital Password</label>
						<input type="text" name="hpassword" value="<?php echo $row['hpassword']; ?>" class="form-control mb-3">
						<label class="text-muted font-weight-bold">Hospital Phone Number</label>
						<input type="text" name="hphone" value="<?php echo $row['hphone']; ?>" class="form-control mb-3">
						<label class="text-muted font-weight-bold">Hospital City</label>
						<input type="text" name="hcity" value="<?php echo $row['hcity']; ?>" class="form-control mb-3">
						<input type="submit" name="update" class="btn btn-block btn-primary" value="Update">
					   </form>
					</div>
					<a href="hospitalpage.html" class="text-center">Cancel</a><br>
				</div>
			</div>
		</div>
	</div>

</body>
</html>