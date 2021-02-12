<?php 
session_start(); 
if(!isset($_SESSION['username'])){
			header('location:index.php');
		  }

if(isset($_POST['logout'])){
          session_destroy();
          echo '<script>confirm("You have been logged out!");</script>';
          echo '<script>window.location="index.php"</script>';
          }

require 'dbconfig/config.php';
$un=$_SESSION['username'];


?>


<!DOCTYPE html>
<html>
    <head>
        
        <title>Classic Pizza</title>
		
		<!-- fonts links--> 
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
		<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
		<link href="styles/main.css" rel="stylesheet" type="text/css">
		<link href="styles/profile.css" rel="stylesheet" type="text/css">
		<link rel="icon" type="image/png" href="styles/images/logo.jpg"/>
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
	   <div class="profile" >
	     <div class="title"><h1  id="classic">My Info</h1></div>
		 
		 
		 <?php
		    
            $query = "select * from userinfo where user='$un';";
            $result = mysqli_query($conn,$query);
            if(mysqli_num_rows($result) == 1) {
			
                while ($row = mysqli_fetch_assoc($result)) {

                    ?>
			
						
		 
		 <table class="info">
				<tr>
			  		<td ><h1>Full Name:<h1></td>
			    <td><h1><?=$row['fullname'];?></h1></td>
				</tr>
				<tr>
					<td ><h1>User name:<h1></td>
					<td><h1><?=$row['user'];?></h1></td>
				</tr>
                <tr>
					<td ><h1>Email:<h1></td>
					<td><h1><?=$row['email'];?></h1></td>
				</tr>
				<tr>
					<td ><h1>Phone Number:<h1></td>
					<td><h1><?=$row['phone'];?></h1></td>
				</tr>
				<tr>
					<td ><h1>City:<h1></td>
					<td><h1><?=$row['city'];?></h1></td>
				</tr>
				<tr>
					<td ><h1>Gender:<h1></td>
					<td><h1 ><?=$row['gender'];?></h1></td>
				</tr>
				<tr>
					<td ><h1>Birth Date:<h1></td>
					<td><h1><?=$row['dob'];?></h1></td>
				</tr>
		        <tr>
					<td ><h1>Address:<h1></td>
					<td><h1><?=$row['address'];?></h1></td>
				</tr>
				
				
				<tr>
				<form action="profile.php" method="post">
				<td class="tdbtn"><button type="submit" name="logout" value="logout"  class="btn">Log Out</button></td >
				<form>
				</tr> 
		  </table>
			<?php }} ?>
			
			
			<form>
		   </div>
	 
		 <div class="history" >
		 <div class="title"><h1  id="classic">Order History</h1></div>

		 <table class="info2">
				<tr>
					<th ><h1 >Date &amp; Time<h1></th>
					<th ><h1>For<h1></th>
					<th ><h1 >To<h1></th>
					<th ><h1 >Payment Method<h1></th>
					<th ><h1 >Total Payment<h1></th>
					
				</tr>
				  <?php
		    
            $query = "select * from orderinfo where buyer='$un' ORDER BY date DESC;";
            $result = mysqli_query($conn,$query);
            if(mysqli_num_rows($result) >0) {
			
                while ($row = mysqli_fetch_assoc($result)) {

                    ?>
			
				<tr>
					<td id="date"><h1 class="right"><?=$row['date'];?></h1></td>
					<td><h1 class="right"><?=$row['reciver_name'];?></h1></td>
					<td><h1 class="right"><?=$row['reciver_add'];?></h1></td>
					<td><h1 class="right"><?=$row['payment_method'];?></h1></td>
					<td><h1 class="right">Rs. <?php echo number_format($row['payment'], 2); ?></h1></td>
				</tr>
                <?php }} ?>
		  </table> 
		 </div>
		 
 
		 
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
                    <p> © Classic Pizza<br>All Rights Reserved.</p>
                </div>
  </footer>
</html>