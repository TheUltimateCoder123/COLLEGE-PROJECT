<?php
	//Connect database
	include "database/connect.php";
	
	//Read session
	include 'session.php';

	//Read button script
	include "top_button.html";
?>

</!DOCTYPE html>
<html>
<head><link rel="stylesheet" href="index.css">
	<title>Fest Events</title>
	<!-- <style type="text/css">
	table{
    /* margin-left:60px
    margin-right:60px;
    text-align:justify;
    border-bottom:dashed;
    background-color: white; */
	/* border:2px solid red; */



}
	</style> -->
</head>
<body background="image\bg.jpg" >
	<button onclick="topFunction()" id="myBtn" title="Go to top"></button>
	<hr width="auto" size="10" style="background: #808000">
	<div class="top">
		<h1 class="titleh">FEST EVENTS</h1>
	</div>
	<hr width="auto" size="10" style="background: #808000">

	<!--Search event form-->
	<div class="search" style="text-align: center">
		<form action="event_detail.php" method="POST" >
			<input type="text" size="40" name="searchevent" placeholder="Enter event name to search event" style="font-size: 16px;padding: 10px" />
			<input type="submit" name="search" value="Search"/>
		</form>
	</div>
	<hr width="auto" size="4" style="background: #808000">

	<!--Display all event area-->
	<div class="content" align="center">
		<?php
			$conn = mysqli_connect($servername, $username, $password, $dbname);

			//Read all event
			$read_DB = "SELECT * FROM event_details ORDER BY EventDate DESC";
			$result = mysqli_query($conn, $read_DB);
			
			//Display all result
			if($result){
    			while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
    				echo "<form action='event_detail.php' method='POST'><table>";
        			echo "<tr><td><input class ='event_name'  type='text' name='eventname' value='".$row['EventName']."' size=60 readonly></td></tr>";
        			echo "<tr><td class='hello'><span class='eventregionh'><hr>". $row['EventDescription']."</td></tr>";
        			echo "<tr><td><br></td></tr>";
        			echo "<tr><td style='text-align:center'><input type='submit' name='more_detail' value='More Details'/></td></tr>";
        			echo "<tr><td><br></td></tr>";
        			echo "</table></form><br>";
    			}
			}
		?>
	</div>
</body>
</html>