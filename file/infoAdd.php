<?php
require 'connection.php';
session_start();
if(!isset($_SESSION['hid']))
{
	header('location:login.php');
}
else {
	if(isset($_POST['add'])){
		$hid=$_SESSION['hid'];
		$bg=$_POST['bg'];
		$numbags=$_POST['numbags'];
		$check_data = mysqli_query($conn, "SELECT hid, numbags FROM bloodinfo where hid='$hid' && bg='$bg'");
		if(mysqli_num_rows($check_data) > 0){
			$numbags=$numbags+mysqli_fetch_array($check_data)['numbags'];
			$sql = "UPDATE bloodinfo SET numbags = '$numbags' WHERE hid='$hid' && bg='$bg'";
			if ($conn->query($sql) === TRUE) {
			$msg = "You have added record successfully.";
			header( "location:../bloodinfo.php?msg=".$msg );
		} else {
			$error = "Error: " . $sql . "<br>" . $conn->error;
            header( "location:../bloodinfo.php?error=".$error );
		}
		$conn->close();

}else{
		$sql = "INSERT INTO bloodinfo (bg, hid, numbags) VALUES ('$bg', '$hid','$numbags')";
		if ($conn->query($sql) === TRUE) {
			$msg = "You have added record successfully.";
			header( "location:../bloodinfo.php?msg=".$msg );
		} else {
			$error = "Error: " . $sql . "<br>" . $conn->error;
            header( "location:../bloodinfo.php?error=".$error );
		}
		$conn->close();
	}
}
}
?>