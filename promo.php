<?php session_start();
?>
 		
<!DOCTYPE html>
<html>
    <head>
   
		<title>Classic Pizza</title>
		
		<!-- fonts links--> 
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
		<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
		<link href="styles/main.css" rel="stylesheet" type="text/css">
		<link href="styles/promo.css" rel="stylesheet" type="text/css">
		<link rel="icon" type="image/png" href="styles/images/logo.jpg"/>
    </head>
    
    <body>
    <header>
			<div><img id="logo" src="styles/images/logo.jpg" alt="logo"></div>
             <div class="nav__links">
                    <a href="index.php">HOME</a>
                    <a href="pizza.php">PIZZA</a>
					<a href="other.php">OTHER</a>
					<a href="promo.php" style="text-shadow: 5px 5px 5px #134225;color:white;">PROMO</a>
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

 <div class="items">
<div class="title"><h1  id="classic">~ Promotions ~</h1></div>
	    
		<div class="container">

				<img class="promo" src="styles/images/pizza/1.jpg">
				<img class="promo" src="styles/images/pizza/2.jpg">
				<img class="promo" src="styles/images/pizza/3.jpg">
				<img class="promo" src="styles/images/pizza/4.jpg">
				<img class="promo" src="styles/images/pizza/5.jpg">
				<img class="promo" src="styles/images/pizza/6.jpg">
				<img class="promo" src="styles/images/pizza/7.jpg">
				<img class="promo" src="styles/images/pizza/8.jpg">
		            
			

	   </div>			
	   </div>
			    

        <div class="push"></div>
	</div>
	
 
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