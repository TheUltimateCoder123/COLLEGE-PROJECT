<?php
	//Connect database
	include "database/connect.php";
	
	//Read session
	include 'session.php';
	$uid=$_SESSION['UserID'];
	if($uid=='' || $uid==null){
		$message="Please login to continue";
		echo "<script type='text/javascript'>alert('$message');</script>";
		header("Refresh: 0, login_register.php");
	}

	//Read button script
	include "top_button.html";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Activity</title>
	<style type="text/css">
		a:hover{
			font-size: 24px;
		}
		a{
			color: blue;
		}
		form{
			margin-left: 60px;
			margin-top: 15px;
			margin-right: 60px;
		}
		table{
			max-width:1200px;
			margin-bottom:50px;
			margin-left:auto;
			margin-right:auto;
			background-color: white;
			text-align:center;
		}
		th{
			background-color: #66CDAA;
			border:1px solid #66CDAA;
			font-size: 22px;
			text-align: center;
			padding-top: 10px ;
			padding-bottom: 10px ;
		}
		td{
			border:1px solid black;
			font-size: 20px;
			font-family: Times New Roman;
			text-align: center;
			padding-top: 5px ;
			padding-bottom: 5px ;
		}
		input[type=submit]{
			padding: 5px;
			color: black;
			border: none;
			background-color: #66CDAA;
			font-weight: 700;
			font-family: Times New Roman;
			font-size: 18px;
			text-align: center;
			width: 100px;
		}
		input[type=submit]:hover{
			background-color: #20B2AA;
		}
		div{
			margin: auto;
			padding-bottom: 1px;
			width: 70%;
			background-color: white;
		}
		hr{
			border-top: 5px dotted grey;
			border-bottom: none;
			border-left: none;
			border-right: none;
			width: 95%;
			padding-top: 10px
		}
        a.deleteh{
            text-decoration: none;
            color: white;
            background-color: red;
            padding: 10px 30px;
        }
	</style>
</head>
<body background="image\second.jpg">

	<button onclick="topFunction()" id="myBtn" title="Go to top"></button>

	<!--Sort according to name in ascending/descending order-->
	<!--Sort according to UserID by default-->
	<div id="view" align="center">
		<br>
		<p><span style="text-decoration: underline;font-weight: 900;font-size: 30px"> View All Log Activity</span></p>
		<hr>
		<form action="" method="POST" style="font-size: 20px;">
			
		</form>
		<hr>
		<table align="center" cellpadding="20px" cellspacing="6px">
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Password</th>
				<th>Date</th>
				<th>Message</th>
				<th>Operation</th>
			</tr>
			<?php

					$count=0;
					$conn = mysqli_connect($servername, $username, $password, $dbname);
					$read_user = "SELECT * FROM login_activity";
					$result_read_user = mysqli_query($conn, $read_user);
					if(mysqli_num_rows($result_read_user)>0){
						while($row = mysqli_fetch_array($result_read_user, MYSQLI_ASSOC)){
							$count=$count+1;
                            $id = $row['id'];
							echo "<tr>";
							echo "<td>".$count."</td>";
							echo "<td>".$row['Name']."</td>";
							echo "<td>".$row['Password']."</td>";
							echo "<td>".$row['Date']."</td>";
							echo "<td>".$row['Message']."</td>";
							echo "<td><a href='delete-log.php?id= $id' class = 'deleteh'>Delete</td>";
							echo "<tr>";
						}
					}
				
			?>
		</table>
	</div>
</body>
</html>