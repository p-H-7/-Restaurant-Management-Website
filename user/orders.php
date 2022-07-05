<?php
	include 'connection.php';
	session_start();
	include 'main.php';

?>
<!DOCTYPE html>
<html>
<head>
	<title>Orders</title>
	<link rel="stylesheet" type="text/css" href="css/table.css">
</head>
<body>
	<center>
	
		<?php
			if(isset($_SESSION['user']))
			{
				$uid =  $_SESSION['id'];
				$total =0;
				//echo $_SESSION['id'];
			$result=mysqli_query($conn,"select * from order_list where customer_id = '$uid'");
			$row1 = mysqli_fetch_array($result);
			//echo $uid;
			$order=$row1['order_id'];
			//echo $order;
			$res=mysqli_query($conn,"select * from order_details where order_id = '$order'");
			//$row2 = mysqli_fetch_array($res);
			$con = mysqli_num_rows($res);
			//echo $con;
			if($con > 0)
				{
					?>
					<h1>Order of Food</h1>
	<table border="1px">
		<tr>
			<th>OrderId</th>
			<th>ItemID</th>
			<th>Quantity</th>
			<th>Name</th>
		</tr>
					<?php

			while ($row = mysqli_fetch_array($res)) {
				echo "<tr>";
				echo "<td>"; echo $row['order_id'];   echo "</td>";
				echo "<td>"; echo $row['item_id']; echo "</td>";
				echo "<td>"; echo $row['quantity']; echo "</td>";
				echo "<td>"; echo $row['item_name']; echo "</td>";
				echo "</tr>";
				}
				echo "</table>";
			}else{
					echo "<h1>No Food Orders</h1>";
				}
			}
			else{
				?>
				<script type="text/javascript">
					alert("Please login");
					window.location="index.php";
				</script>
				<?php
			}
		?>
		</center>
</body>
</html>
