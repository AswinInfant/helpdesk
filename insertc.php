<?php
	$name=filter_input(INPUT_POST,'Name');
	$year=filter_input(INPUT_POST,'Year');
	$domain=filter_input(INPUT_POST,'Domain');
	$proidea=filter_input(INPUT_POST,'Idea');
	$status=filter_input(INPUT_POST,'Status');
	$duration=filter_input(INPUT_POST,'Duration');
	$contact=filter_input(INPUT_POST,'Contact');
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
		$sql="INSERT INTO details(Name,Year,Domain,Proidea,Status,Duration,Contact) 
		values('$name','$year','$domain','$proidea','$status','$duration','$contact')";
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