<?php
	include 'config.php';
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
		$sql="select * from order_details inner join order_list on order_list.order_id=order_details.order_id ";
		$result=mysqli_query($conn,$sql);
		$cou = mysqli_num_rows($result);
		if($cou > 0)
		{
	?>
	<h1>Orders</h1>
	<table border="1px">
		<tr>
			<th>OrderId</th>
			<th>ItemName</th>
			<th>Quantity</th>
		</tr>
		<?php
			
			while ($row = mysqli_fetch_array($result)) {
				echo "<tr>";
				echo "<td>"; echo $row['order_id'];   echo "</td>";
				echo "<td>"; echo $row['item_name']; echo "</td>";
				echo "<td>"; echo $row['quantity']; echo "</td>";
				echo "<td>"; echo $row['total']; echo "</td>";
				echo "</tr>";
			}

			echo "<tr>";
		}else{
			echo "<h1>No Food Orders</h1>";
		}
		?>
	</table>
	</center>
</body>
</html>
