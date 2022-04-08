<?php
if(isset($_POST['submit'])){

	$name=$_POST['Name'];
	$email=$_POST['Feed'];
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
	else
	{
		$sql="INSERT INTO fback(Name,Feed) 
		values('$name','$email')";
		if($conn->query($sql))
		{
			echo "<script>alert('feedback recorded successfully')</script>";
			echo "<script>location.href='indexxxxx.html'</script>";
		}
		else
		{
			
			echo "Error".$sql."<br>".$conn->error;
		}
		$conn->close();
	}
	
	}  

?>