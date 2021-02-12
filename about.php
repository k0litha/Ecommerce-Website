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
		<link href="styles/about.css" rel="stylesheet" type="text/css">
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
                    <a href="about.php" style="text-shadow: 5px 5px 5px #134225;color:white;">ABOUT</a>
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
<div class="title"><h1  id="classic">~ About Us~</h1></div>

<p> Classic Pizza, a subsidiary of Yumm! Brands, is the world's largest pizza company and home of golden crust Pizza. Pizza Ranch began 60 years ago in Wichita, Kansas, and today is an iconic global brand that delivers more pizza, pasta and wings than any other restaurant in the world.</p>

<p>Since its inception in 1993, Classic Pizza has fast become a household name across Sri Lanka. With its first restaurant at Union Place, Colombo 7, Classic Pizza became the first international restaurant chain to begin operations in Sri Lanka. Classic Pizza is a brand name belonging to global restaurant chain Yumm Brands Incorporated which is based in USA. It is the world's largest restaurant company which also owns KFCC & Taco Ball.</p>

<p>In 1999, Classic Pizza ventured into the home delivery service setting yet another innovative milestone in Sri Lanka. With the launch of its island-wide delivery hotline 011 2 727727, Classic Pizza delivery rose swiftly to provide 50% of the restaurant's net sales.</p>

<p>To date, Classic Pizza Sri Lanka employs over 1800 staff members with diverse backgrounds. As an equal opportunity employer, Classic Pizza utilizes 1% of its annual income towards training and welfare. The company strongly believes in creating a results oriented fun working environment.</p>

<p>Over the past 24 years, Classic Pizza has grown from strength to strength. At Classic Pizza, we believe in delighting the senses of each and every customer. This is why all dine-in outlets offer a unique family friendly dine-in experience whilst effectively capturing the gastronomic palate of the Sri Lankan consumer with innovative additions to its menu. Currently Classic Pizza serves a wide range of pizza toppings with an exciting selection of special crusts as well as appetizers, pastas, rice, desserts and beverages.  </p>
  
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
                    <p> © Classic Pizza.<br>All Rights Reserved.</p>
                </div>
  </footer>	
</html>