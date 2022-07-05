<?php 
session_start();
include 'main.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Feedback</title>
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
	<form action="" method="post">
		
		<input type="text" name="s2" placeholder="Feedback">
		<input type="submit" name="submit" value="Submit">
	</form>
 <?php
 	include 'connection.php';
 	if(isset($_SESSION['user'])){
 		if(isset($_POST['submit']))
 		{
 			$id=$_SESSION['id'];
 			$sql= "insert into `Feedback`(`customer_id`,`feedback_`) values ('$id','$_POST[s2]')";
 			mysqli_query($conn,$sql);
 			?>
			<script type="text/javascript">
				alert("Thank you for your Feedback.");
			</script>

			<?php
			}
	}
	else{
		?>
		<script type="text/javascript">
			alert("Could not enter");
			window.location="../user/index.php";
		</script>
		<?php
	}	
			
