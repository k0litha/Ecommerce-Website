<?php session_start();
		  
		  if(isset($_SESSION['username'])){
			header('location:index.php');
		  }
		  ?> 

<!DOCTYPE html>
<html>
    <head>
        
        <title>Classic Pizza</title>
		
		<!-- fonts links--> 
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
		<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
		<link href="styles/login.css" rel="stylesheet" type="text/css">
		<link href="styles/main.css" rel="stylesheet" type="text/css">
		<link rel="icon" type="image/png" href="styles/images/logo.jpg"/>
		<script src="js/loginvalidation.js" language="javascript" type="text/javascript"></script>
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
      <li >
        <a href="login.php"><span class="fas fa-sign-in-alt"></span> Sign In</a>
      </li>
    </ul>
    </header>
	  <div class="push1"></div>
		
		<div class="wrapper">
       
	   <form class="signup-form" onsubmit="return validate()" action="login_server.php" method="post">
      
		<div class="form-header">
			<h1>Sign-In</h1>
		</div>

					
		<div class="form-body">

      
		  
		  <div class="form-group" >
            <label  class="label-title">User name </label><br>
            <input type="text" name="user" id="user" class="forminput" placeholder="Username" >
          </div>
        
          <div class="form-group">
           <label  class="label-title">Passowrd</label><br>
            <input type="password" id="pwd" name="pwd" class="forminput" placeholder="Password" >           
          </div>
		  
          <button type="submit" name="login" value="login"  class="btn">Login</button>
		  </div>
		   <div class="form-footer">
       <a  href="signup.php"> <span>Don't have an account? &nbsp;Sign up now.</span></a>
        
           </div>
		</div>       
      

    </form>
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