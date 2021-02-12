<?php session_start(); 

if(!isset($_SESSION['username'])){
			header('location:index.php');
		  }
if (isset($_GET["action"])){
        if ($_GET["action"] == "delete"){
            foreach ($_SESSION["cart"] as $keys => $value){
                if ($value["product_id"] == $_GET["id"]){
                    unset($_SESSION["cart"][$keys]);
					$_SESSION['itemcount']= $_SESSION['itemcount']-1;
                    echo '<script>alert("Product has been Removed...!")</script>';
                    echo '<script>window.location="cart.php"</script>';
                }
            }
        }
    }

?>

<!DOCTYPE html>
<html>
    <head>
        
        <title>Classic Pizza</title>
		
		<!-- fonts links--> 
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
		<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
		<link href="styles/main.css" rel="stylesheet" type="text/css">
		<link href="styles/cart.css" rel="stylesheet" type="text/css">
		<link rel="icon" type="image/png" href="styles/images/logo.jpg"/>
		<script src="js/ordervalidation.js" language="javascript" type="text/javascript"></script>
    </head>
    
    <body>
    <header>
			<div><img id="logo" src="styles/images/logo.jpg" alt="logo"></div>
             <div class="nav__links">
                    <a href="index.php">HOME</a>
                    <a href="pizza.php">PIZZA</a>
					<a href="other.php">OTHER</a>
					<a href="promo.php">PROMO</a>
                    <a href="about.php">ABOUT</a>
                </div>
			
		
		<ul class="cta">			 
      <li>
        <?php 
		  
		  if(!isset($_SESSION['username'])){
			 echo'<a href="login.php"><span class="fas fa-sign-in-alt"></span> Sign-In</a>';
		  }else if($_SESSION['itemcount']!=0){
			   echo'<a href="cart.php"><span class="fas fa-shopping-basket"></span> '.$_SESSION['itemcount'].'</a>';
			  echo'<a href="profile.php"><span class="fas fa-user"></span> Hi '.$_SESSION['username'].'</a>';
		  }
		  else{
			   echo'<a href="cart.php"><span class="fas fa-shopping-basket"></span></a>';
			  echo'<a href="profile.php"><span class="fas fa-user"></span> Hi '.$_SESSION['username'].'</a>';
		  }
		  ?> 	
      </li>
    </ul>
    </header>
        <div class="push1"></div>
		
	  
	<div class="wrapper">

       <div class="items" >
	       
		   <?php if($_SESSION['itemcount']>0){?>

<div class="title"><h1>~ My Cart ~</h1></div>
		   
       <form action="ordering_server.php" onsubmit="return validate()"  method="post"> 

          <div class="details">  
           <table>
		      
			   <?php
                if(!empty($_SESSION["cart"])){
                    $total = 0;
                    foreach ($_SESSION["cart"] as $value) {
                        ?>
	  
			  <tr>
			    <td class="image">
				
				     <img  src="styles/images/pizza/<?php echo $value["product_id"];?>.jpg" >			
			    </td>
				<td class="name">
				     <h1><?php echo $value["item_name"]; ?></h1>
					 <h4>Size: <?php echo $value["product_size"]; ?></h4>
				     <h2>Quantity: <?php echo $value["item_quantity"]; ?></h2>
				     <h3>Rs. <?php echo number_format($value["item_quantity"] * $value["product_price"], 2); ?></h3>
				<div class="del"><a href="cart.php?action=delete&id=<?php echo $value["product_id"]; ?>"><i class="fas fa-trash-alt"></i></a></div>
				</td>
			  </tr>
			        
					<?php
                        $total = $total + ($value["item_quantity"] * $value["product_price"]);
				}}      $ordertotal = $total + 120;
                        ?>
			  
			  
			    </table> 
               
			 
		   
          </div>		   
	  
	    <div class="checkout">     
               <h1>Order Summery</h1>
			   <hr>
			  
                 <table> 
                   <tr>
			         <td class="first">
                       <h2>Cart Subtotal</h2>	
					   <h3>Delivery Fee*</h3>
					   <h1>Rs. <?php echo number_format($total, 2); ?></h1>
   					   <h4>Rs. 120.00</h4>
                       <hr>	
					   </td>
	                </tr> 
					<tr>
			         <td class="second">
                       <h1>Order Total</h1>	
					   <h2>Rs. <?php echo number_format($ordertotal, 2); ?></h2>
					   <input type="hidden" name="payment" value="<?=$ordertotal?>">
					      <hr>	
	                </td>
					</tr> 
                    <tr>
			         <td class="third">
                       <h1>Payment Method</h1>	
					<div class="method">  
			      <label ><input type="radio" name="paymeth" value="Credit card" id="credit" checked> &nbsp;<i class="far fa-credit-card"></i></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <label ><input type="radio" name="paymeth" value="Cash on delivery" id="cash"> &nbsp;<i class="far fa-money-bill-alt"></i></label>
	                </div>
				   </td>
				   </tr>
				   <tr>
			         <td class="fourth">
                       <h1>Deliver Details</h1>	
					    <div class="nme">
                      <label  class="label-title">Reciever's Name</label><br>
                      <input type="text" id="name" name="name" class="forminput" placeholder="enter name"  >
                      </div>
					   <div class="add">
                      <label  class="label-title">Address</label><br>
                      <input type="text" id="add" name="add" class="forminput" placeholder="enter address"  >
                      </div>     
		              </td>
				    </tr>
					<tr>
			         <td class="fifth">
                        <button type="submit" class="btn" name="order" value="order">Place Order</button>   
		              </td>
				    </tr>
	               </table>
 
				 
				</div> 

		
		</form >
		
	  
       <?php }else{ ?>
		 <img id="empty" src="styles/images/cartempty.png" ">
		 
		 <?php } ?>
	   </div>
	   
    </div>
			    

        <div class="push"></div>
	

  	
    </body>
	
	<footer class="footer">
  
  <ul class="fd"> 
                     <h2>Contact Us</h2>
                    <li>CORPARATE HEAD OFFICE, </li>
                    <li>NO. 40, YORK STREET, </li>
					<li>COLOMBO 01, </li>
                    <li>SRI LANKA.</li><br>
					<li><i class="fas fa-phone-square"> </i> +94 112 427 777</li>
					<li><i class="fas fa-phone-square"> </i> +94 112 427 888</li>
                </ul>
				
    
 <ul class="fd"> 
                     <h2>About</h2>
                    <li>OUR HERITAGE</li>
                     <li>OUR COFFEE</li>
                     <li>STORIES AND NEWS</li>
                      <li>INVESTOR RELATIONS</li>
                       <li>POLICIES AND STANDARDS</li>
                        <li>CUSTOMER SERVICE</li>
					
					
                </ul>
<ul class="fd"> 
                         <h2>Services</h2>
                    <li>FREE WiFi</li>
                    <li>DELIVERY SERVICE</li>
					<li>MOBILE APP</li>
					<li>SHOTLINE</li>
                    <li>UBER FOODS</li>
					<li>PICKME FOODS</li>
                </ul>
	<ul class="fd"> 
                     <h2>Follow Us on</h2>
                    <li><i class="fab fa-facebook" style="font-size:30px"> </i>
                    <i class="fab fa-instagram" style="font-size:30px"> </i>
					<i class="fab fa-twitter" style="font-size:30px"> </i> 
					<i class="fab fa-youtube" style="font-size:30px"> </i></li><br><br>
					<h2>Download App</h2>
					 <li><i class="fab fa-google-play" style="font-size:40px;"> </i> 
					<i class="fab fa-apple" style="font-size:45px;"> </i> </li>
                </ul>	
		<div class="fd5" > 
		            <img src="styles/images/logo.jpg" >
                    <p> © Classic Pizza.<br>All Rights Reserved.</p>
                </div>
  </footer>
</html>