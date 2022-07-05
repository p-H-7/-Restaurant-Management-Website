<?php 
session_start();
include 'main.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Menu</title>
	<style type="text/css">
		td{
			text-align: center;
			padding: 5px;
		}
	</style>
</head>
<body>
	<center>
	<h1>Feedback</h1>
	
<?php
 	
 	include 'config.php';
 	if(isset($_SESSION['user'])){
 		if(isset($_POST['submit']))
 		{
 			$res = mysqli_query($conn,"select * from Feedback");
 		echo "<table align: 'center'; border=1px>";
 		echo "<tr>";
 		echo "<th>Id</th>";
 		echo "<th>feedback_given</th>";
 		echo "</tr>";
 		while ($row = mysqli_fetch_array($res)) {
 			echo "<tr>";
 			echo "<td>"; echo $row["customer_id"]; echo "</td>";
 			echo "<td>"; echo $row["feedback_"]; echo "</td>";
 			echo "<tr>";
 		}//
 		echo "</table";

 		}else{
 		$res = mysqli_query($conn,"select * from Feedback");
 		echo "<table align: 'center'; border=1px>";
 		echo "<tr>";
 		echo "<th>Id</th>";
 		echo "<th>feedback_given</th>";
 		echo "</tr>";
 		while ($row = mysqli_fetch_array($res)) {
 			echo "<tr>";
 			echo "<td>"; echo $row["customer_id"]; echo "</td>";
 			echo "<td>"; echo $row["feedback_"]; echo "</td>";
 			echo "<tr>";
 		}//
 		echo "</table";
 		}
 	}
 ?>
</body>
