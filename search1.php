<!DOCTYPE html>
<html>
<head>
	<style>
		body
		{	top: 50px;
			left: 5px;
			background-color:black;
			color:white;
			font-family: Helvetica;
		}
		table
		{
			width: 150px;
			height: 150px;
		}
		
		h2
		{	height: 50px;
			
			color: #000000;
		}
		th {
			height: 50px;
			width: 50px;
			background-color: #ba4c4c;
			color: white;
		}
		td{
			text-align: center;
		height: 50px;
		width: 50px;
		}
		
	</style>
</head>
<body>
	<table align="center" border="150px" width="400px">
		<tr>
			<th colspan="8"><h2>DETAILS</h2></th>
		</tr>
		<t>
			<th>NAME</th>
			<th>YEAR</th>
			<th>STATUS(%)</th>
			<th>IDEA</th>
			<th>CONTACT</th>
			
			
		</t>
		<?php
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
			{	$domain1=filter_input(INPUT_POST,'Domain');
				
				$sql="SELECT * FROM details where Domain='$domain1' order by Status";
				$result=$conn-> query($sql);
				if($result-> num_rows > 0)
				{
					while($row=$result->fetch_assoc())
					{
						echo "<tr><td>".$row["Name"]."</td><td>".$row["Year"]."</td><td>".$row["Status"]."</td><td>".$row["Proidea"]."</td><td>".$row["Contact"]."</td></tr>";
					}
					echo "</table>";
				}
				else
				{
					echo "<tr><td>0 result</td></tr>";
					echo "</table>";
				}
				$conn->close();
			}
		?>
	</table>
	
</body>
</html>