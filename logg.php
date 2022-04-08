<?php
	$user=filter_input(INPUT_POST,'uname');
	$pass=filter_input(INPUT_POST,'upass');
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
		$sql="INSERT INTO log(User,Pass) 
		values('$user','$pass')";
		if($conn->query($sql))
		{
			echo "<script>alert('record created successfully')</script>";
			echo "<script>location.href='indexxxxx.html'</script>";
		}
		else
		{
			
			echo "Error".$sql."<br>".$conn->error;
		}
		$conn->close();
	}   

?>