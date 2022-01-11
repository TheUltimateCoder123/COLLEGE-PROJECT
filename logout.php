<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body background="image\bg.jpg" style="margin-top: 30px;text-align: center;">
<?php
	session_start();
	if (isset($_SESSION['UserFullName'])){
		session_destroy();
		echo "<h1 style='color:#f4f4f4;text-align:center;'>Logout is Sucessfull.You will be soon redirected to homepage.If Not Click <br>Click <a style='text-decoration:none;color:#ec0e0e;'href='index.php'>here</a> if no response.</h1>";
		header('Refresh: 2; index.php');
	}
?>
</body>
</html>
