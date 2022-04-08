<?php
session_start();

// Define $username and $password
$username = $_POST['User'];
$password = $_POST['Pass'];
$host="localhost";
	$dbusername="root";
	$dbpassword="";
	$dbname="helpdesk";
	$conn=new mysqli ($host,$dbusername,$dbpassword,$dbname);
	if(mysqli_connect_error())
	{
		die('Connect Error ('. mysqli_connect_errno() .') '
			.mysqli_connect_error());
	}
	$query = "SELECT * from log where User='".$username."' and Pass='".$password."'";
	$result=mysqli_query($conn,$query);
	$check=mysqli_fetch_array($result);
	if(isset($check))
	{
		echo "<script>alert('success')</script>";
		
		echo "<script>location.href='indexxxxx.html'</script>";
	}
	else
	{
		echo "<script>alert('unsuccess')</script>";
	}
	$conn->close();
?>
