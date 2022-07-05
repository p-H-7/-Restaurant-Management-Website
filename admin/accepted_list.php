<?php
	include 'config.php';
	session_start();
	include 'main.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Accepted list</title>
</head>
<body>
	<?php
			if(isset($_SESSION['user']))
			{?>
	<center>
	<h1>Accepted Orders</h1>
	<table border="1px">
		<tr>
			<th>BillId</th>
			<th>OrderId</th>
			<th>Total price</th>
			
		</tr>
		<?php
			$total = 0;
			$result=mysqli_query($conn,"select * from order_details inner join payment on order_details.order_id=payment.order_id");
			while ($row = mysqli_fetch_array($result)) {
			
				echo "<tr>";
				echo "<td>"; echo $row['bill_id'];   echo "</td>";
				echo "<td>"; echo $row['order_id']; echo "</td>";
				echo "<td>"; echo $row['price']; echo "</td>";
				echo "";
				$price = mysqli_query($conn,"select * from order_details where id = ".$row['order_id'].""); 

				while($p = mysqli_fetch_array($price))
				{
					echo "price".$p['price'];
				$total = $total + $p['price'] * $row['quantity'];
				}
				echo "</tr>";
			}

			echo "<tr>";
		}else{
			?>
			<script type="text/javascript">
				alert("login please");
				window.location="index.php";
			</script>
			<?php
		}
		?>
	</table>
	<?php
	echo $total;
	?>
</body>
</html>
