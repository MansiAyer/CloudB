<?php 
require 'file/connection.php'; 
session_start();
  if(!isset($_SESSION['rid']))
  {
  header('location:login.php');
  }
  else {
    $rid = $_SESSION['rid'];
    $sql = "SELECT blooddonate.*, hospitals.* from blooddonate, hospitals where rid='$rid' && blooddonate.hid=hospitals.id";
    $result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<style>
    body{
    background: url(image/p4.jpg) no-repeat center;
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
.footer {​​
position: fixed;
left: 0;
bottom: 0;
width: 100%;
background-color: white;
color: black;
text-align: center;
}​​
</style>
<?php $title="Bloodbank | Blood Donate"; ?>
<?php require 'head.php'; ?>


<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="color:black">
<nav class="navbar navbar-expand-md navbar-custom navbar-dark sticky-top" style="border-bottom: 5px solid black; background-color: black;padding-bottom:10px ;padding-top:10px ">
<div class="container-fluid">
  <a class="" href="Userpage.html" style="font-size:25px;color:white;font-weight: bold;">BLOOD BANK SYSTEM</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarResponsive">
</div>
</div>
</nav>


	<?php //require 'header.php'; ?>
	<div class="container cont">

		<a href="Userpage.html" class="btn btn-info text-center mb-4" title="Click here">Back to home</a>

		<?php require 'message.php'; ?>

	<table class="table table-responsive table-striped rounded mb-5">
		<tr><th colspan="9" class="title">Blood Donate</th></tr>
		<tr>
			<th>#</th>
			<th>Name</th>
			<th>Email</th>
			<th>City</th>
			<th>Phone</th>
			<th>Blood Group</th>
			<th>Status</th>
			<th colspan="2">Action</th>
		</tr>

		    <div>
                <?php
                if ($result) {
                    $row =mysqli_num_rows( $result);
                    if ($row) { //echo "<b> Total ".$row." </b>";
                }else echo '<b style="color:white;background-color:red;padding:7px;border-radius: 15px 50px;">No one has requested yet. </b>';
            }
            ?>
            </div>

		<?php while($row = mysqli_fetch_array($result)) { ?>

		<tr>
			<td><?php echo ++$counter;?></td>
			<td><?php echo $row['hname'];?></td>
			<td><?php echo $row['hemail'];?></td>
			<td><?php echo $row['hcity'];?></td>
			<td><?php echo $row['hphone'];?></td>
			<td><?php echo $row['bg'];?></td>
<td><?php echo 'You have '.$row['status'];?></td>
			<td><?php if($row['status'] == 'Accepted'){ ?> <a href="" class="btn btn-success disabled">Accepted</a> <?php }
			else{ ?>
				<a href="file/acceptd.php?donoid=<?php echo $row['donoid'];?>" class="btn btn-success">Accept</a>
			<?php } ?>
			</td>
			<td><?php if($row['status'] == 'Rejected'){ ?> <a href="" class="btn btn-danger disabled">Rejected</a> <?php }
			else{ ?>
				<a href="file/rejectd.php?donoid=<?php echo $row['donoid'];?>" class="btn btn-danger">Reject</a>
			<?php } ?>
			</td>
			
		</tr>
		<?php } ?>
	</table>

</div>
<?php //require 'footer.php'; ?>
</body>
</html>
<?php } ?>