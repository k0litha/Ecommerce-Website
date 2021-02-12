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
		<link href="styles/signup.css" rel="stylesheet" type="text/css">
		<link href="styles/main.css" rel="stylesheet" type="text/css">
		<link rel="icon" type="image/png" href="styles/images/logo.jpg"/>
		<script src="js/signupvalidation.js" language="javascript" type="text/javascript"></script>
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
       <form class="signup-form" onsubmit="return validate()" action="signup_server.php" method="post">

      
      <div class="form-header">
        <h1>Create an Account</h1>
      </div>

    
      <div class="form-body">

      
        <div class="form-group">
            <label class="label-title">Full name </label><br>
            <input type="text" name="fulnme" id="fulnme" class="forminput" placeholder="enter your full name" >
        </div>
		  
		  <div class="form-group">
            <label  class="label-title">User name </label><br>
            <input type="text" name="user" id="user" class="forminput" placeholder="enter your user name" >
          </div>

       
        <div class="form-group">
          <label  class="label-title">Email</label><br>
          <input type="text" name="eml" id="eml" class="forminput" placeholder="enter your email" >
        </div>

    
        
          <div class="form-group">
            <label  class="label-title">Password </label><br>
            <input type="password" id="pwd" name="pwd" class="forminput"placeholder="enter your password" > 
			 </div>
			 
			
          <div class="form-group"> 
			<label  class="label-title">Confirm Password </label><br>
            <input type="password" id="rpwd" name="rpwd" class="forminput" placeholder="retype your password" >
          </div>
           
		  <div class="form-group">
            <label  class="label-title">Phone Number</label>
            <input type="text" id="phone" name="phone" class="forminput" placeholder="enter your phone number" >
        </div>
             <div class="form-group">
            <label  class="label-title"> City</label><br>
                     <select class="forminput" name="city" id="city">
						<option>Colombo</option>
						<option>Kurunegala</option>
						<option>Kandy</option>
						<option>Mathara</option>
						<option>Galle</option>
					</select>
        </div>
          <div class="form-group">
              <label class="label-title">Gender: </label>
			  <label ><input type="radio" name="gender" value="male" id="male" checked><font > Male</font></label>
              <label ><input type="radio" name="gender" value="female" id="female"><font> Female</font></label>
		    </div>
			<div class="form-group">
			  <label class="label-title">Birth Date: </label><br>
			  <input class="forminputshort" type="text" name="bd" id="bd" placeholder="dd/mm/yyyy"   >		  
          </div>
          
		  <div class="form-group">
            <label  class="label-title">Address</label><br>
            <input type="text" id="addrs" name="addrs" class="forminput" placeholder="enter your Address"  >
        </div>
		  <br><br><br>
            <div class="form-group">
			<h2  class="label-title">PAYMENT DETAILS </h2><br>	
            <label  class="label-title">Credit Card Number </label>
            <input type="text" name="crednum" id="crednum" class="forminput" placeholder="cc number (16 digits)"  ><br>
		    <label  class="label-title"><br>CVN </label><br>	
			<input type="text" id="cvn" name="cvn" class="forminputshort" placeholder="cvn (3 digits)"  ><br><br>
			<label  class="label-title">EXP Date </label><br>
			<input type="text" id="exp" name="exp" class="forminputshort" placeholder="mm/yyyy"  >
				    
		  </div>
		</div>       
      <div class="form-footer">
        <span><input type="checkbox" required name="agree" id="agree"  > I Agree to the Terms of use</span>
        <button type="submit" class="btn" name="signup" value="signup">Sign up</button>
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