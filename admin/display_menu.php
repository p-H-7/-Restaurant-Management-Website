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
	<h1>Menu</h1>
	<form action="" method="post">
		<input type="text" name="s1" placeholder="Name of food item">
		<input type="submit" name="submit" value="search food item">
	</form>
 <?php
 	
 	include 'config.php';
 	if(isset($_SESSION['user'])){
 		if(isset($_POST['submit']))
 		{
 			$res = mysqli_query($conn,"select * from item");
 		echo "<table align: 'center'; border=1px>";
 		echo "<tr>";
 		echo "<th>Id</th>";
 		echo "<th>Item name</th>";
 		echo "<th>Price</th>";
 		echo "<th>Description</th>";
 		echo "<th>Delete</th>";
 		echo "</tr>";
 		while ($row = mysqli_fetch_array($res)) {
 			echo "<tr>";
 			echo "<td>"; echo $row["item_id"]; echo "</td>";
 			echo "<td>"; echo $row["item_name"]; echo "</td>";
 			echo "<td>"; echo $row["price"]; echo "</td>";
 			echo "<td>"; echo $row["description"]; echo "</td>";
 			echo "<td>"; ?> <a href="delete.php?id=<?php echo $row['item_id'];?>">Delete</a><?php echo "</td>"; 
 			echo "<tr>";
 		}//
 		echo "</table";

 		}else{
 		$res = mysqli_query($conn,"select * from item");
 		echo "<table align: 'center'; border=1px>";
 		echo "<tr>";
 		echo "<th>Id</th>";
 		echo "<th>Item name</th>";
 		echo "<th>Price</th>";
 		echo "<th>Description</th>";
 		echo "</tr>";
 		while ($row = mysqli_fetch_array($res)) {
 			echo "<tr>";
 			echo "<td>"; echo $row["item_id"]; echo "</td>";
 			echo "<td>"; echo $row["item_name"]; echo "</td>";
 			echo "<td>"; echo $row["price"]; echo "</td>";
 			echo "<tr>";
 		}//
 		echo "</table";
 		}
 	}
 ?>
</body>
</html>
