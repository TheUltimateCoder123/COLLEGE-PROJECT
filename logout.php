<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body background="image\bg.jpg" style="margin-top: 30px;text-align: center;">
<?php
include "database/connect.php";
session_start();
	if (isset($_SESSION['UserFullName'])){

		$sql = "select * from login_activity";
		$res = mysqli_query($conn,$sql);

		if($res){
			$row = mysqli_fetch_assoc($res);
			$name = $row['Name'];
			$pass = $row['Password'];
			$message = "Log out";
			echo $name;
			$sql1 = "insert into login_activity (Name,Password,Date,Message) values('$name','$pass',NOW(),'$message')";
			$res1 = mysqli_query($conn,$sql1);
		}
		session_destroy();
		echo "<h1 style='color:#f4f4f4;text-align:center;'>Logout is Sucessfull.You will be soon redirected to homepage.If Not Click <br>Click <a style='text-decoration:none;color:#ec0e0e;'href='index.php'>here</a> if no response.</h1>";
		header('Refresh: 2; index.php');
	}
?>
</body>
</html>
