<?php
include 'connection.php';
 		if(isset($_POST['submit']))
 		{
 		//echo hello;
 	
	 $name =  mysqli_real_escape_string($conn,$_POST['Name']);
	   $email = 	 mysqli_real_escape_string($conn,$_POST['email']);
	 $passwd = mysqli_real_escape_string($conn,$_POST['password']);
   	$phone =  mysqli_real_escape_string($conn,$_POST['phone']);
	 $address = mysqli_real_escape_string($conn,$_POST['address']);
	
	//echo $name;
       // $sql = "insert into `user` (`ID`,`Name`,`email`,`password`,`phone`,`address`) values ('$ID','$name','$email','$passwd','$phone','$address')";
                 
               // $result = mysqli_query($conn,$sql);
               // echo $result;
                if(true)
                {
					?>
					<script type="text/javascript">
						alert("Sign Up successfull");
						window.location="login1.php";
					</script>
					<?php
					//include("login.html");

		}
		else{
					?>
					<script type="text/javascript">
						alert("Sorry! Not successful");
						window.location="sigup1.php";
					</script>
					<?php
		}
	}
	
?>
