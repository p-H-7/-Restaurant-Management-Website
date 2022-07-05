<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, intial-scale=1, user-scalable=no"/>
  <title>Mt night canteen</title>
  <link rel="stylesheet" type="text/css" href="css/backgroundimage.css">
 <link rel="stylesheet" type="text/css" href="css/style.css">
 <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
 <link href='https://fonts.googleapis.com/css?family=Alegreya Sans SC' rel='stylesheet'> 
<link rel="stylesheet" type="text/css" href="css/table.css">
</head>
<body>
<div class="page-bg"><img src="Back.jpeg" width = "2000" height="1000"></div>
	<nav>
		<div class="toggle">
			<i class="fa fa-bars menu" aria-hidden="true"></i>
		</div>
		<ul>
			<li> <a href="index.php"><img src="MT.gif" width="250" height="250"></a></li>
			<li><a href="index.php">HOME</a></li>

			<?php 
			if(isset($_SESSION['user']))
			{
			?>
				<li><a href="menuOrd.php">PlaceOrder</a></li>
				<li><a href="orders.php">YourOrder</a></li>
				<li><a href="feedback.php">Feedback</a></li>
				<li style="float:right;"><a href="logout.php">LogOut</a></li>
				<li style="float:right;"><a href="profile.php"> <?php echo $_SESSION['user'];?> </a></li>
			<?php }else {?>
				<li><a href="about.php">About us</a></li>
				<li style="float:right;"><a href="login1.php">Login</a></li>
				<li style="float:right;"><a href="sigup1.php">SignUp</a></li>
			<?php } ?>

		</ul>
		<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
		
		<script type="text/javascript">
			$(document).ready(function(){
				$('.menu').click(function(){
					$('ul').toggleClass('active');
				})

			})
		</script>
	</nav>
</body>
</html>
