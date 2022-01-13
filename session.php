<?php
//Start session
session_start();

//Check session user
if (isset($_SESSION['UserFullName'])!=null){
	echo "<b><p class='hemantd' style='text-align:right;font-size:25px;'><i class='fas fa-user-tie'></i>&nbsp;".$_SESSION['UserFullName']."  &nbsp;|&nbsp; <a class='homeh' href='index.php' >Home </a>";
	$login_status="yes";
	$uid=$_SESSION['UserID'];
	$utype=$_SESSION['UserType'];
	if($utype=='Admin'){
		echo "&nbsp;|&nbsp; <a class='homeh' href='admin_manage.php'>Admin Management</a>";
		echo "&nbsp;|&nbsp; <a class='homeh' href='my_profile.php'>My Profile</a>";
		echo "&nbsp;|&nbsp; <a class='homeh' href='my_booking.php'>My Booking</a>";
		echo "&nbsp;|&nbsp; <a class='homeh' href='change_password.php'>Change Password</a>";
		echo "&nbsp;|&nbsp; <a class='homeh' href='log.php'>Log Activity</a>";
		echo "&nbsp;|&nbsp; <a class='homeh' href='logout.php'>Logout <i class='fas fa-sign-out-alt'></i></a></p></b>";
	}
	else if ($utype=='Student'){
		echo "&nbsp;|&nbsp; <a class='homeh' href='my_profile.php'>My Profile</a>";
		echo "&nbsp;|&nbsp; <a class='homeh' href='my_booking.php'>My Booking</a>";
		echo "&nbsp;|&nbsp; <a  class='homeh' href='change_password.php'>Change Password</a>";
		echo "&nbsp;|&nbsp; <a  class='homeh' href='logout.php'>Logout</a></p></b>";
	}
	else{
		echo "&nbsp;|&nbsp; <a href='logout.php' >&nbsp;Logout</a></p></b>";
	}
}
else{
	echo "<b><p class='hemantd'style='text-align:right;font-size:25px;'><i class='fas fa-users'></i> Guest ";
	echo "&nbsp;|&nbsp; <a class='homeh' href='index.php'>Home</a>";
	echo "&nbsp;|&nbsp; <a class='homeh' href='login_register.php'>Login </a>";
	echo "&nbsp;|&nbsp; <a class='homeh' href='login_register.php'>Register</a></p></b>";
		$login_status="no";
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>


	<style>
     .hemantd{
        color:#f4f4f4;
		padding:1rem;
		color:#3ff113;
		
	 }
	 .homeh{
		 text-decoration:none;
		 color:#f4f4f4;
		
	 }
	 .homeh:hover{
		 text-decoration:none;
		 color:#ee4b19;
		
	 }


	</style>
</head>
<body>
	
</body>
</html>