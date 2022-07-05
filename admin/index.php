<?php
	session_start();
	?>

<!DOCTYPE html>
<html>
<head>
	<title>MT food centre</title>
</head>
<body>
	<?php
	include 'main.php';
	if(isset($_SESSION['user']))
	{
		
		include 'orders.php';
		//include 't_orders.php';
		
	}else{
		?>
		<a href="signup.php">SignUp</a>
		<a href="login.php">Login</a>
		<?php
	}
	include 'footer.php';
	?>
</body>
</html>
