 <?php
If(isset($_POST['order']) && !isset($_SESSION['username'])){

session_start();
require 'dbconfig/config.php'; 

$recname = $_POST['name'];
$payment = $_POST['payment'];
$payment_method = $_POST['paymeth'];
$addr = $_POST['add'];
$buyer = $_SESSION['username'];
date_default_timezone_set('Asia/Colombo');
$date = date("Y/m/d   h:i:s a");



	$reg ="insert into orderinfo(buyer,reciver_name,reciver_add,payment_method,payment,date) values ('$buyer','$recname','$addr','$payment_method','$payment','$date');";
	$reg = mysqli_query($conn,$reg);
	if($reg){
       foreach ($_SESSION["cart"] as $keys => $value){
                unset($_SESSION["cart"][$keys]);
                $_SESSION['itemcount']= $_SESSION['itemcount']-1;}
					header("refresh:3;url=index.php");
}
    
}

else{
	header("location:index.php");
	}
?>
<html>

<center><h2 style="font-size: 60px; color:#b30000; margin-top:250px;">Thank you <?php echo $_SESSION['username'];?> !!<br> Your order has been recieved.<br>
Rederecting...</h2></center>
</html>
