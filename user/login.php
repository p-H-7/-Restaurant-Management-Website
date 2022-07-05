<?php
	if(isset($_POST['submit'])) 
     {
     	include_once 'connection.php';
     $email = 	 mysqli_real_escape_string($conn,$_POST['email']);
     $passwd = mysqli_real_escape_string($conn,$_POST['password']);
	
        		$sql = "select Name,ID from user where email = '$email' and password = '$passwd'";
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
                         $_SESSION["id"]=$key["ID"];
                    }
                	?>
                	<script type="text/javascript">
                		
                	window.location="index.php";
                	</script>
                	<?php
                }
                else
                {
                    $sql = "select Name,ID from admin where email = '$email' and Pasword = '$passwd'";
                //echo $sql;
                 $count1=0;
                $result = mysqli_query($conn,$sql);
                $count1= mysqli_num_rows($result);
                    if($count1 >0)
                    {
                            session_start();
                            $multi_array = array();
                            while($row = mysqli_fetch_assoc($result))
                            {
                                $multi_array[] = $row;  
                            }
                            foreach($multi_array as $key){
                                 $_SESSION["user"]=$key['Name'];
                                 $_SESSION["id"]=$key["ID"];
                            }
                            ?>
                            <script type="text/javascript">
                                alert('login');
                            window.location="../admin/index.php";
                            </script>
                            <?php

                        }
                        else{
                	?>
                	<script type="text/javascript">
                		alert('Invalid Details');
                	window.location="login1.php";
                	</script>
                	<?php
                        }
                }
    }
?>
