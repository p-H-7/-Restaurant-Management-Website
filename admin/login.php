<!DOCTYPE html>
<html>
<head>
	<title>login</title>
</head>
<body>
	<center>
		<h1>Login</h1>
	<form action="login.php" method="post" name="login.php">
		<input type="text" name="Name" placeholder="Name"><br>
		<input type="password" name="Password" placeholder="Password"><br>
		<input type="submit" name="submit" value="login">
	</form>
	</center>
</body>
</html>
<?php
	if(isset($_POST['submit'])) 
     {
     	include_once 'config.php';
     $name = 	 mysqli_real_escape_string($conn,$_POST['Name']);
     $passwd = mysqli_real_escape_string($conn,$_POST['Password']);
	
	
        		$sql = "select Name,ID from admin where Name='$name' and Pasword='$passwd'";
        		//echo $sql;
                 $count=0;
                $result = mysqli_query($conn,$sql);
                $count = mysqli_num_rows($result);
               echo $count;
                if($count > 0)
                {

                	session_start();
					$multi_array = array();
					while($row = mysqli_fetch_assoc($result))
					{
						$multi_array[] = $row;	
					}
					foreach($multi_array as $key){
						 $_SESSION["user"]=$key['Name'];
                        $_SESSION['id']=$key['ID'];
					}
                	?>
                	<script type="text/javascript">
                		alert('login');
                	window.location="index.php"
                	</script>
                	<?php
                }else
                {
                	?>
                	<script type="text/javascript">
                		alert('not');
                	window.location="login.php";
                	</script>
                	<?php
                }
    }
?>
