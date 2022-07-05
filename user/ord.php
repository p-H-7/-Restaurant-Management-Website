<?php
//prompt function
function prompt(){
    echo("<script type='text/javascript'> var answer = prompt('Please enter the Quantity:'); </script>");

    $answer = "<script type='text/javascript'> document.write(answer); </script>";
    return($answer);
}
?>

<?php
include 'connection.php';
session_start();
include 'main.php';	

$quantity = prompt();

$id1=$_GET["id"];
echo $id1;
$sql = "select * from item where item_id='$id1'";

$result=mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);


$id2 = $_SESSION['id'];
echo $id2;

$ud = mysqli_query($conn,"select * from user where ID='$id2'");
echo $quantity;
//echo $ud;

//$total = $quantity * $row['price'];
//echo $total;

//$sql = "insert into `order_list`(`order_id`,`customer_id`) values('','$id2')";
//$sql2 = "insert into `order_details`(`order_id`,`item_id`,`quantity`,`item_name`) values('','$row['item_id']','$quantity','$row['item_name']')";
//echo $sql;
//mysqli_query($conn,$sql);
//$final=mysqli_query($conn,$sql2);

?>
	<script type="text/javascript">
		alert("Your order successfully placed");
		window.location="menuOrd.php"; 
	</script>


