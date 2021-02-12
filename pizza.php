<?php	
session_start();
?>	
 		
<!DOCTYPE html>
<html>
    <head>
   
		<title>Classic Pizza</title>
		
		<!-- fonts links--> 
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
		<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
		<link href="styles/main.css" rel="stylesheet" type="text/css">
		<link href="styles/pizza.css" rel="stylesheet" type="text/css">
		<link rel="icon" type="image/png" href="styles/images/logo.jpg"/>
    </head>
    
    <body>
    <header>
			<div><img id="logo" src="styles/images/logo.jpg" alt="logo"></div>
             <div class="nav__links">
                    <a href="index.php">HOME</a>
                    <a href="pizza.php" style="text-shadow: 5px 5px 5px #134225;color:white;">PIZZA</a>
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

 <div class="items">
<div class="title"><h1  id="classic">~ Italion ~</h1></div>
	    
		<div class="container">

					<div class="colum">
					<div class="imgcontainer">
					<img id="tc1"src="styles/images/pizza/tc1.jpg">
					<div class="overlay"><p>A delightfully light thin crust pizza, expertly hand-stretched and oven-baked to golden perfection with a fiery blend of kotchchi chicken sausage meat with nai miris, set upon an all new kotchchi sauce base topped with onion, capsicum and a mozzarel</p></div>
					</div>
					<form class="form" method="post" action="itemadding_server.php?action=add&id=tc1" >
					<h4>Chicken With Nai Miris</h4>
					<input type="hidden" name="name" value="Chicken With Nai Miris (Italion)">
					<table><tr><td>Rs. 890</td><td>Rs. 1370</td><td>Rs. 1900</td></tr></table>				
				    <ul class="radio">	    
					<li><input type="radio" id="tc1S" name="price_size" value="890,Personal" checked>
					<label for="tc1S">Personal</label></li>
					<li><input type="radio" id="tc1M" name="price_size" value="1370,Medium" >
					<label for="tc1M">Medium</label></li>		 
					<li><input type="radio" id="tc1L" name="price_size" value="1900,Large" >
					<label for="tc1L">Large</label></li>
				    </ul> 
					<input type="number" class="quantity" name="quantity" value="1" min="1" max="10">
					<button type="submit" name="add" class="btn" value="pizza">Add to Cart <i class="fas fa-shopping-cart"> </i></button>
					</form>
					</div>  


					<div class="colum">
					<div class="imgcontainer">
					<img id="tc2"src="styles/images/pizza/tc2.jpg">
					<div class="overlay"><p>A delightfully light thin crust pizza, expertly hand-stretched and oven-baked to golden perfection! Topped with sun-ripened tomatoes infused with exotic herbs, complemented by fresh basil leaves and blanketed by mozzarella cheese.</p></div>
					</div>
					<form class="form" method="post" action="itemadding_server.php?action=add&id=tc2" >
					<h4>Margherita</h4>
					<input type="hidden" name="name" value="Margherita (Italion)">
					<table><tr><td>Rs. 890</td><td>Rs. 1370</td><td>Rs. 1900</td></tr></table>				
				    <ul class="radio">	    
					<li><input type="radio" id="tc2S" name="price_size" value="890,Personal" checked>
					<label for="tc2S">Personal</label></li>
					<li><input type="radio" id="tc2M" name="price_size" value="1370,Medium" >
					<label for="tc2M">Medium</label></li>		 
					<li><input type="radio" id="tc2L" name="price_size" value="1900,Large" >
					<label for="tc2L">Large</label></li>
				    </ul>  
					<input type="number" class="quantity" name="quantity" value="1" min="1" max="10">
					<button type="submit" name="add" class="btn" value="pizza">Add to Cart <i class="fas fa-shopping-cart"> </i></button>
					</form>
					</div>

					<div class="colum">
					<div class="imgcontainer">
					<img id="tc3"src="styles/images/pizza/tc3.jpg">
					<div class="overlay"><p>A delightfully light thin crust pizza, expertly hand-stretched and oven-baked to golden perfection with a blissful combination of chicken bacon, pineapple and mozzarella cheese.</p></div>
					</div>
					<form class="form" method="post" action="itemadding_server.php?action=add&id=tc3" >
					<h4>Tropical Hawaiian</h4>
					<input type="hidden" name="name" value="Tropical Hawaiian (Italion)">
					<table><tr><td>Rs. 890</td><td>Rs. 1370</td><td>Rs. 1900</td></tr></table>				
				    <ul class="radio">	    
					<li><input type="radio" id="tc3S" name="price_size" value="890,Personal" checked>
					<label for="tc3S">Personal</label></li>
					<li><input type="radio" id="tc3M" name="price_size" value="1370,Medium" >
					<label for="tc3M">Medium</label></li>		 
					<li><input type="radio" id="tc3L" name="price_size" value="1900,Large">
					<label for="tc3L">Large</label></li>
				    </ul>     
					<input type="number" class="quantity" name="quantity" value="1" min="1" max="10">
					<button type="submit" name="add" class="btn" value="pizza">Add to Cart <i class="fas fa-shopping-cart"> </i></button>
					</form>
					</div>

					<div class="colum">
					<div class="imgcontainer">
					<img id="tc4"src="styles/images/pizza/tc4.jpg">
					<div class="overlay"><p>A delightfully light thin crust pizza, expertly hand-stretched and oven-baked to golden perfection with flavoursome pieces of spicy chicken, complemented by fried garlic, jalapenos and mozzarella cheese</p></div>
					</div>
					<form class="form" method="post" action="itemadding_server.php?action=add&id=tc4" >
					<h4>Fiery Chicken</h4>
					<input type="hidden" name="name" value="Fiery Chicken (Italion)">
					<table><tr><td>Rs. 890</td><td>Rs. 1370</td><td>Rs. 1900</td></tr></table>				
				    <ul class="radio">	    
					<li><input type="radio" id="tc4S" name="price_size" value="890,Personal" checked>
					<label for="tc4S">Personal</label></li>
					<li><input type="radio" id="tc4M" name="price_size" value="1370,Medium" >
					<label for="tc4M">Medium</label></li>		 
					<li><input type="radio" id="tc4L" name="price_size" value="1900,Large" >
					<label for="tc4L">Large</label></li>
				    </ul>    
					<input type="number" class="quantity" name="quantity" value="1" min="1" max="10">
					<button type="submit" name="add" class="btn" value="pizza">Add to Cart <i class="fas fa-shopping-cart"> </i></button>
					</form>
					</div>

					<div class="colum">
					<div class="imgcontainer">
					<img id="tc5"src="styles/images/pizza/tc5.jpg">
					<div class="overlay"><p>A delightfully light thin crust pizza, expertly hand-stretched and oven-baked to golden perfection! Topped with scrumptious pieces of tandoori chicken combined with crunchy onions, blanketed by mozzarella cheese.</p></div>
					</div>
					<form class="form" method="post" action="itemadding_server.php?action=add&id=tc5" >
					<h4>Tandoori Chicken</h4>
					<input type="hidden" name="name" value="Tandoori Chicken (Italion)">
					<table><tr><td>Rs. 890</td><td>Rs. 1370</td><td>Rs. 1900</td></tr></table>				
				    <ul class="radio">	    
					<li><input type="radio" id="tc5S" name="price_size" value="890,Personal" checked>
					<label for="tc5S">Personal</label></li>
					<li><input type="radio" id="tc5M" name="price_size" value="1370,Medium" >
					<label for="tc5M">Medium</label></li>		 
					<li><input type="radio" id="tc5L" name="price_size" value="1900,Large" >
					<label for="tc5L">Large</label></li>
				    </ul> 
					<input type="number" class="quantity" name="quantity" value="1" min="1" max="10">
					<button type="submit" name="add" class="btn" value="pizza">Add to Cart <i class="fas fa-shopping-cart"> </i></button>
					</form>
					</div>

					<div class="colum">
					<div class="imgcontainer">
					<img id="tc6"src="styles/images/pizza/tc6.jpg">
					<div class="overlay"><p>A delightfully light thin crust pizza, expertly hand-stretched and oven-baked to golden perfection! Topped with tender BBQ chicken accompanied by spicy jalapenos, crunchy onions and mozzarella cheese.</p></div>
					</div>
					<form class="form" method="post" action="itemadding_server.php?action=add&id=tc6" >
					<h4>Chicken BBQ </h4>
					<input type="hidden" name="name" value="Chicken BBQ (Italion)">
					<table><tr><td>Rs. 890</td><td>Rs. 1370</td><td>Rs. 1900</td></tr></table>				
				    <ul class="radio">	    
					<li><input type="radio" id="tc6S" name="price_size" value="890,Personal" checked>
					<label for="tc6S">Personal</label></li>
					<li><input type="radio" id="tc6M" name="price_size" value="1370,Medium" >
					<label for="tc6M">Medium</label></li>		 
					<li><input type="radio" id="tc6L" name="price_size" value="1900,Large" >
					<label for="tc6L">Large</label></li>
				    </ul>   
					<input type="number" class="quantity" name="quantity" value="1" min="1" max="10">
					<button type="submit" name="add" class="btn" value="pizza">Add to Cart <i class="fas fa-shopping-cart"> </i></button>
					</form>
					</div>

					<div class="colum">
					<div class="imgcontainer">
					<img id="tc7"src="styles/images/pizza/tc7.jpg">
					<div class="overlay"><p>A delightfully light thin crust pizza, expertly hand-stretched and oven-baked to golden perfection with flavoursome pieces of black chicken and crunchy onion with a mozzarella cheese.</p></div>
					</div>
					<form class="form" method="post" action="itemadding_server.php?action=add&id=tc7" >
					<h4>Black Chicken</h4>
					<input type="hidden" name="name" value="Black Chicken (Italion)">
					<table><tr><td>Rs. 890</td><td>Rs. 1370</td><td>Rs. 1900</td></tr></table>				
				    <ul class="radio">	    
					<li><input type="radio" id="tc7S" name="price_size" value="890,Personal" checked>
					<label for="tc7S">Personal</label></li>
					<li><input type="radio" id="tc7M" name="price_size" value="1370,Medium" >
					<label for="tc7M">Medium</label></li>		 
					<li><input type="radio" id="tc7L" name="price_size" value="1900,Large">
					<label for="tc7L">Large</label></li>
				    </ul>    
					<input type="number" class="quantity" name="quantity" value="1" min="1" max="10">
					<button type="submit" name="add" class="btn" value="pizza">Add to Cart <i class="fas fa-shopping-cart"> </i></button>
					</form>
					</div>

					<div class="colum">
					<div class="imgcontainer">
					<img id="tc8"src="styles/images/pizza/tc8.jpg">
					<div class="overlay"><p>A delightfully light thin crust pizza, expertly hand-stretched and oven-baked to golden perfection with hot and spicy devilled beef complemented by fresh capsicums, and crunchy onions blanketed by mozzarella cheese.</p></div>
					</div>
					<form class="form" method="post" action="itemadding_server.php?action=add&id=tc8" >
					<h4>Devilled Beef Divino</h4>
					<input type="hidden" name="name" value="Devilled Beef Divino (Italion)">
					<table><tr><td>Rs. 890</td><td>Rs. 1370</td><td>Rs. 1900</td></tr></table>				
				    <ul class="radio">	    
					<li><input type="radio" id="tc8S" name="price_size" value="890,Personal" checked>
					<label for="tc8S">Personal</label></li>
					<li><input type="radio" id="tc8M" name="price_size" value="1370,Medium" >
					<label for="tc8M">Medium</label></li>		 
					<li><input type="radio" id="tc8L" name="price_size" value="1900,Large" >
					<label for="tc8L">Large</label></li>
				    </ul> 
					<input type="number" class="quantity" name="quantity" value="1" min="1" max="10">
					<button type="submit" name="add" class="btn" value="pizza">Add to Cart <i class="fas fa-shopping-cart"> </i></button>
					</form>
					</div>

					<div class="colum">
					<div class="imgcontainer">
					<img id="tc9"src="styles/images/pizza/tc9.jpg">
					<div class="overlay"><p>Succulent pieces of beef pepperoni accompanied by black olives and spicy jalapenos topped with mozzarella cheese.</p></div>
					</div>
					<form class="form" method="post" action="itemadding_server.php?action=add&id=tc9" >
					<h4>Pepperoni Paradiso</h4>
					<input type="hidden" name="name" value="Pepperoni Paradiso (Italion)">
					<table><tr><td>Rs. 890</td><td>Rs. 1370</td><td>Rs. 1900</td></tr></table>				
				    <ul class="radio">	    
					<li><input type="radio" id="tc9S" name="price_size" value="890,Personal" checked>
					<label for="tc9S">Personal</label></li>
					<li><input type="radio" id="tc9M" name="price_size" value="1370,Medium" >
					<label for="tc9M">Medium</label></li>		 
					<li><input type="radio" id="tc9L" name="price_size" value="1900,Large" >
					<label for="tc9L">Large</label></li>
				    </ul> 
					<input type="number" class="quantity" name="quantity" value="1" min="1" max="10">
					<button type="submit" name="add" class="btn" value="pizza">Add to Cart <i class="fas fa-shopping-cart"> </i></button>
					</form>
					</div>

					<div class="colum">
					<div class="imgcontainer">
					<img id="tc91"src="styles/images/pizza/tc91.jpg">
					<div class="overlay"><p>A delightfully light thin crust pizza, expertly hand-stretched and oven-baked to golden perfection! Topped with a combination of chicken bacon, kotchchi sausage meat, BBQ chicken and spicy chicken, topped with mozzarella cheese.</p></div>
					</div>
					<form class="form" method="post" action="itemadding_server.php?action=add&id=tc91" >
					<h4>Mighty Chicken</h4>
					<input type="hidden" name="name" value="Mighty Chicken (Italion)">
					<table><tr><td>Rs. 890</td><td>Rs. 1370</td><td>Rs. 1900</td></tr></table>				
				    <ul class="radio">	    
					<li><input type="radio" id="tc91S" name="price_size" value="890,Personal" checked>
					<label for="tc91S">Personal</label></li>
					<li><input type="radio" id="tc91M" name="price_size" value="1370,Medium" >
					<label for="tc91M">Medium</label></li>		 
					<li><input type="radio" id="tc91L" name="price_size" value="1900,Large" >
					<label for="tc91L">Large</label></li>
				    </ul>     
					<input type="number" class="quantity" name="quantity" value="1" min="1" max="10">
					<button type="submit" name="add" class="btn" value="pizza">Add to Cart <i class="fas fa-shopping-cart"> </i></button>
					</form>
					</div>

					<div class="colum">
					<div class="imgcontainer">
					<img id="tc92"src="styles/images/pizza/tc92.jpg">
					<div class="overlay"><p>A delightfully light thin crust pizza, expertly hand-stretched and oven-baked to golden perfection! Topped with a combination of beef pepperoni, chicken bacon, devilled beef & BBQ chicken topped with mozzarella cheese.</p></div>
					</div>
					<form class="form" method="post" action="itemadding_server.php?action=add&id=tc92" >
					<h4>Mighty Beef</h4>
					<input type="hidden" name="name" value="Mighty Beef (Italion)">
					<table><tr><td>Rs. 890</td><td>Rs. 1370</td><td>Rs. 1900</td></tr></table>				
				    <ul class="radio">	    
					<li><input type="radio" id="tc92S" name="price_size" value="890,Personal" checked>
					<label for="tc92S">Personal</label></li>
					<li><input type="radio" id="tc92M" name="price_size" value="1370,Medium" >
					<label for="tc92M">Medium</label></li>		 
					<li><input type="radio" id="tc92L" name="price_size" value="1900,Large" >
					<label for="tc92L">Large</label></li>
				    </ul> 
					<input type="number" class="quantity" name="quantity" value="1" min="1" max="10">
					<button type="submit" name="add" class="btn" value="pizza">Add to Cart <i class="fas fa-shopping-cart"> </i></button>
					</form>
					</div>

					<div class="colum">
					<div class="imgcontainer">
					<img id="tc93"src="styles/images/pizza/tc93.jpg">
					<div class="overlay"><p>A delightfully light thin crust pizza, expertly hand-stretched and oven-baked to golden perfection, topped with a blend of perfectly marinated prawns, succulent pieces of hot butter cuttlefish, green pepper and mozzarella cheese.</p></div>
					</div>
					<form class="form" method="post" action="itemadding_server.php?action=add&id=tc93" >
					<h4>Seafood Supremo</h4>
					<input type="hidden" name="name" value="Seafood Supremo (Italion)">
					<table><tr><td>Rs. 890</td><td>Rs. 1370</td><td>Rs. 1900</td></tr></table>				
				    <ul class="radio">	    
					<li><input type="radio" id="tc93S" name="price_size" value="890,Personal" checked>
					<label for="tc93S">Personal</label></li>
					<li><input type="radio" id="tc93M" name="price_size" value="1370,Medium" >
					<label for="tc93M">Medium</label></li>		 
					<li><input type="radio" id="tc93L" name="price_size" value="1900,Large" >
					<label for="tc93L">Large</label></li>
					</ul>   
					<input type="number" class="quantity" name="quantity" value="1" min="1" max="10">
					<button type="submit" name="add" class="btn" value="pizza">Add to Cart <i class="fas fa-shopping-cart"> </i></button>
					</form>
					</div>

					<div class="colum">
					<div class="imgcontainer">
					<img id="tc94"src="styles/images/pizza/tc94.jpg">
					<div class="overlay"><p>A delightfully light thin crust pizza, expertly hand-stretched and oven-baked to golden perfection! Topped with a combination of BBQ chicken, kotchchi chicken sausage meat and chicken bacon, topped by mozzarella and cream cheese, </p></div>
					</div>
					<form class="form" method="post" action="itemadding_server.php?action=add&id=tc94" >
					<h4>Chicken Trio</h4>
					<input type="hidden" name="name" value="Chicken Trio (Italion)">
					<table><tr><td>Rs. 890</td><td>Rs. 1370</td><td>Rs. 1900</td></tr></table>				
				    <ul class="radio">	    
					<li><input type="radio" id="tc94S" name="price_size" value="890,Personal" checked>
					<label for="tc94S">Personal</label></li>
					<li><input type="radio" id="tc94M" name="price_size" value="1370,Medium" >
					<label for="tc94M">Medium</label></li>		 
					<li><input type="radio" id="tc94L" name="price_size" value="1900,Large" >
					<label for="tc94L">Large</label></li>
				    </ul>   
					<input type="number" class="quantity" name="quantity" value="1" min="1" max="10">
					<button type="submit" name="add" class="btn" value="pizza">Add to Cart <i class="fas fa-shopping-cart"> </i></button>
					</form>
					</div>

		   </div>		 	
	 </div> 
	 
<div class="items">
<div class="title"><h1  id="supreme">~ Supreme ~</h1></div>
	       <div class="container">
		      
				    <div class="colum">
				    <div class="imgcontainer">
					<img id="f1"src="styles/images/pizza/f1.jpg">
					<div class="overlay"><p>Succulent prawns with pieces of chicken bacon,accompanied by spring onions, green chillies and jalapenos, layered with mozzarella cheese.</p></div>
					</div>
					<form class="form" method="post" action="itemadding_server.php?action=add&id=f1" >
					<h4>Spicey Seafood</h4>
					<input type="hidden" name="name" value="Spicey Seafood (Supreme)">
					<table><tr><td>Rs. 750</td><td>Rs. 1170</td><td>Rs. 1690</td></tr></table>				
				    <ul class="radio">	    
					<li><input type="radio" id="f1S" name="price_size" value="750,Personal" checked>
					<label for="f1S">Personal</label></li>
					<li><input type="radio" id="f1M" name="price_size" value="1170,Medium" >
					<label for="f1M">Medium</label></li>		 
					<li><input type="radio" id="f1L" name="price_size" value="1690,Large" >
					<label for="f1L">Large</label></li>
				    </ul>      
					<input type="number" class="quantity" name="quantity" value="1" min="1" max="10">
					<button type="submit" name="add" class="btn" value="pizza">Add to Cart <i class="fas fa-shopping-cart"> </i></button>
					</form>
					</div>   
					
					<div class="colum">
				    <div class="imgcontainer">
					<img id="f2" src="styles/images/pizza/f2.jpg">
					<div class="overlay"><p>Mushrooms, tomatoes, onions, black olives and bell peppers with a double layer of mozzarella cheese.</p></div>
					</div>
					<form class="form" method="post" action="itemadding_server.php?action=add&id=f2" >
					<h4>Veggie Fiesta</h4>
					<input type="hidden" name="name" value="Veggie Fiesta (Supreme)">
					<table><tr><td>Rs. 750</td><td>Rs. 1170</td><td>Rs. 1690</td></tr></table>				
				    <ul class="radio">	    
					<li><input type="radio" id="f2S" name="price_size" value="750,Personal" checked>
					<label for="f2S">Personal</label></li>
					<li><input type="radio" id="f2M" name="price_size" value="1170,Medium" >
					<label for="f2M">Medium</label></li>		 
					<li><input type="radio" id="f2L" name="price_size" value="1690,Large" >
					<label for="f2L">Large</label></li>
				    </ul>       
					<input type="number" class="quantity" name="quantity" value="1" min="1" max="10">
					<button type="submit" name="add" class="btn" value="pizza">Add to Cart <i class="fas fa-shopping-cart"> </i></button>
					</form>
					</div>  
					
					<div class="colum">
				    <div class="imgcontainer">
					<img id="f3"src="styles/images/pizza/f3.jpg">
					<div class="overlay"><p>A combination of BBQ chicken, kotchchi sausage meat and chicken bacon, with a layer of mozzarella and cream cheese accompanied by black olives, crunchy onions , green pepper.</p></div>
					</div>
					<form class="form" method="post" action="itemadding_server.php?action=add&id=f3" >
					<h4>Chicken Treat</h4>
					<input type="hidden" name="name" value="Chicken Treat (Supreme)">
					<table><tr><td>Rs. 750</td><td>Rs. 1170</td><td>Rs. 1690</td></tr></table>				
				    <ul class="radio">	    
					<li><input type="radio" id="f3S" name="price_size" value="750,Personal" checked>
					<label for="f3S">Personal</label></li>
					<li><input type="radio" id="f3M" name="price_size" value="1170,Medium" >
					<label for="f3M">Medium</label></li>		 
					<li><input type="radio" id="f3L" name="price_size" value="1690,Large" >
					<label for="f3L">Large</label></li>
				    </ul>    
					<input type="number" class="quantity" name="quantity" value="1" min="1" max="10">
					<button type="submit" name="add" class="btn" value="pizza">Add to Cart <i class="fas fa-shopping-cart"> </i></button>
					</form>
					</div>
		            
					<div class="colum">
				    <div class="imgcontainer">
					<img id="f4" src="styles/images/pizza/f4.jpg">
					<div class="overlay"><p>Australian beef pepperoni in pizza sauce with a double layer of mozzarella cheese.</p></div>
					</div>
					<form class="form" method="post" action="itemadding_server.php?action=add&id=f4" >
					<h4>Beef Pepperoni</h4>
					<input type="hidden" name="name" value="Beef Pepperoni (Supreme)">
					<table><tr><td>Rs. 750</td><td>Rs. 1170</td><td>Rs. 1690</td></tr></table>				
				    <ul class="radio">	    
					<li><input type="radio" id="f4S" name="price_size" value="750,Personal" checked>
					<label for="f4S">Personal</label></li>
					<li><input type="radio" id="f4M" name="price_size" value="1170,Medium" >
					<label for="f4M">Medium</label></li>		 
					<li><input type="radio" id="f4L" name="price_size" value="1690,Large" >
					<label for="f4L">Large</label></li>
				    </ul>     
					<input type="number" class="quantity" name="quantity" value="1" min="1" max="10">
					<button type="submit" name="add" class="btn" value="pizza">Add to Cart <i class="fas fa-shopping-cart"> </i></button>
					</form>
					</div>
		            
					<div class="colum">
				    <div class="imgcontainer">
					<img id="f5" src="styles/images/pizza/f5.jpg">
					<div class="overlay"><p>Pieces of devilled beef complemented by fresh capsicums, onions and a double layer of mozzarella cheese.</p></div>
					</div>
					<form class="form" method="post" action="itemadding_server.php?action=add&id=f5" >
					<h4>Devilled Beef</h4>
					<input type="hidden" name="pname" value="Devilled Beef (Supreme)">
					<table><tr><td>Rs. 750</td><td>Rs. 1170</td><td>Rs. 1690</td></tr></table>				
				    <ul class="radio">	    
					<li><input type="radio" id="f5S" name="price_size" value="750,Personal" checked>
					<label for="f5S">Personal</label></li>
					<li><input type="radio" id="f5M" name="price_size" value="1170,Medium" >
					<label for="f5M">Medium</label></li>		 
					<li><input type="radio" id="f5L" name="price_size" value="1690,Large" >
					<label for="f5L">Large</label></li>
				    </ul>     
					<input type="number" class="quantity" name="quantity" value="1" min="1" max="10">
					<button type="submit" name="add" class="btn" value="pizza">Add to Cart <i class="fas fa-shopping-cart"> </i></button>
					</form>
					</div>
		            
					<div class="colum">
				    <div class="imgcontainer">
					<img id="f6"  src="styles/images/pizza/f6.jpg">
					<div class="overlay"><p>Topped with a combination of chicken bacon, chicken sausage, BBQ chicken and spicy chicken with a double layer of mozzarella cheese, layered with mozzarella cheese.</p></div>
					</div>
					<form class="form" method="post" action="itemadding_server.php?action=add&id=f6" >
					<h4>Meat Lovers Chicken</h4>
					<input type="hidden" name="name" value="Meat Lovers Chicken (Supreme)">
					<table><tr><td>Rs. 750</td><td>Rs. 1170</td><td>Rs. 1690</td></tr></table>				
				    <ul class="radio">	    
					<li><input type="radio" id="f6S" name="price_size" value="750,Personal" checked>
					<label for="f6S">Personal</label></li>
					<li><input type="radio" id="f6M" name="price_size" value="1170,Medium" >
					<label for="f6M">Medium</label></li>		 
					<li><input type="radio" id="f6L" name="price_size" value="1690,Large" >
					<label for="f6L">Large</label></li>
				    </ul>    
					<input type="number" class="quantity" name="quantity" value="1" min="1" max="10">
					<button type="submit" name="add" class="btn" value="pizza">Add to Cart <i class="fas fa-shopping-cart"> </i></button>
					</form>
					</div>
		            
					<div class="colum">
				    <div class="imgcontainer">
					<img id="f7" src="styles/images/pizza/f7.jpg">
					<div class="overlay"><p>Devilled Beef,Beef Pepperoni, Kotchi Sausage Meat and Chicken Sausage with a double layer of mozzarella cheese.</p></div>
					</div>
					<form class="form" method="post" action="itemadding_server.php?action=add&id=f7" >
					<h4>Meat Lovers Beef</h4>
					<input type="hidden" name="name" value="Meat Lovers Beef (Supreme)">
					<table><tr><td>Rs. 750</td><td>Rs. 1170</td><td>Rs. 1690</td></tr></table>				
				    <ul class="radio">	    
					<li><input type="radio" id="f7S" name="price_size" value="750,Personal" checked>
					<label for="f7S">Personal</label></li>
					<li><input type="radio" id="f7M" name="price_size" value="1170,Medium" >
					<label for="f7M">Medium</label></li>		 
					<li><input type="radio" id="f7L" name="price_size" value="1690,Large" >
					<label for="f7L">Large</label></li>
				    </ul>     
					<input type="number" class="quantity" name="quantity" value="1" min="1" max="10">
					<button type="submit" name="add" class="btn" value="pizza">Add to Cart <i class="fas fa-shopping-cart"> </i></button>
					</form>
					</div>
		            
					<div class="colum">
				    <div class="imgcontainer">
					<img id="f8" src="styles/images/pizza/f8.jpg">
					<div class="overlay"><p>Chicken bacon, chicken sausage, beef pepperoni, pineapple, peppers, mushrooms and olives with a double layer of mozzarella cheese.</p></div>
					</div>
					<form class="form" method="post" action="itemadding_server.php?action=add&id=f8" >
					<h4>Super Supreme</h4>
					<input type="hidden" name="name" value="Super Supreme (Supreme)">
					<table><tr><td>Rs. 750</td><td>Rs. 1170</td><td>Rs. 1690</td></tr></table>				
				    <ul class="radio">	    
					<li><input type="radio" id="f8S" name="price_size" value="750,Personal" checked>
					<label for="f8S">Personal</label></li>
					<li><input type="radio" id="f8M" name="price_size" value="1170,Medium" >
					<label for="f8M">Medium</label></li>		 
					<li><input type="radio" id="f8L" name="price_size" value="1690,Large" >
					<label for="f8L">Large</label></li>
				    </ul>    
					<input type="number" class="quantity" name="quantity" value="1" min="1" max="10">
					<button type="submit" name="add" class="btn" value="pizza">Add to Cart <i class="fas fa-shopping-cart"> </i></button>
					</form>
					</div>
		            
					<div class="colum">
				    <div class="imgcontainer">
					<img id="f9" src="styles/images/pizza/f9.jpg">
					<div class="overlay"><p>Spicy prawns, hot garlic sauce, onions, peppers and tomatoes with a double layer of mozzarella cheese.</p></div>
					</div>
					<form class="form" method="post" action="itemadding_server.php?action=add&id=f9" >
					<h4>Hot Garlic Prawns</h4>
					<input type="hidden" name="name" value="Hot Garlic Prawns (Supreme)">
					<table><tr><td>Rs. 750</td><td>Rs. 1170</td><td>Rs. 1690</td></tr></table>				
				    <ul class="radio">	    
					<li><input type="radio" id="f9S" name="price_size" value="750,Personal" checked>
					<label for="f9S">Personal</label></li>
					<li><input type="radio" id="f9M" name="price_size" value="1170,Medium" >
					<label for="f9M">Medium</label></li>		 
					<li><input type="radio" id="f9L" name="price_size" value="1690,Large" >
					<label for="f9L">Large</label></li>
				    </ul>    
					<input type="number" class="quantity" name="quantity" value="1" min="1" max="10">
					<button type="submit" name="add" class="btn" value="pizza">Add to Cart <i class="fas fa-shopping-cart"> </i></button>
					</form>
					</div>
		            
					<div class="colum">
				    <div class="imgcontainer">
					<img id="f91" src="styles/images/pizza/f91.jpg">
					<div class="overlay"><p>A fiery mix of prawns and cuttlefish, accompanied by bell peppers and onions, layered with a double layer of mozzarella cheese</p></div>
					</div>
					<form class="form" method="post" action="itemadding_server.php?action=add&id=f91" >
					<h4>Prawns With Chicken</h4>
					<input type="hidden" name="name" value="Prawns With Chicken (Supreme)">
					<table><tr><td>Rs. 750</td><td>Rs. 1170</td><td>Rs. 1690</td></tr></table>				
				    <ul class="radio">	    
					<li><input type="radio" id="f91S" name="price_size" value="750,Personal" checked>
					<label for="f91S">Personal</label></li>
					<li><input type="radio" id="f91M" name="price_size" value="1170,Medium" >
					<label for="f91M">Medium</label></li>		 
					<li><input type="radio" id="f91L" name="price_size" value="1690,Large" >
					<label for="f91L">Large</label></li>
				    </ul>    
					<input type="number" class="quantity" name="quantity" value="1" min="1" max="10">
					<button type="submit" name="add" class="btn" value="pizza">Add to Cart <i class="fas fa-shopping-cart"> </i></button>
					</form>
					</div>
					
					
		            
					
			    </div> 
		   </div> 
		
<div class="items">
<div class="title"><h1  id="supreme">~ Classic ~</h1></div>
	   
	         
	     <div class="container">
		      
				    <div class="colum">
				    <div class="imgcontainer">
					<img id="sg1"src="styles/images/pizza/sg1.jpg">
					<div class="overlay"><p>Spicy veggie masala & paneer accompanied with pineapple, topped with a double layer of mozzarella cheese</p></div>
					</div>
					<form class="form" method="post" action="itemadding_server.php?action=add&id=sg1" >					
					<h4>Spicy Veggie</h4>
					<input type="hidden" name="name" value="Spicy Veggie (Classic)">
					<table><tr><td>Rs. 580</td><td>Rs. 1090</td><td>Rs. 1580</td></tr></table>				
				    <ul class="radio">	    
					<li><input type="radio" id="sg1S" name="price_size" value="750,Personal" checked>
					<label for="sg1S">Personal</label></li>
					<li><input type="radio" id="sg1M" name="price_size" value="1170,Medium" >
					<label for="sg1M">Medium</label></li>		 
					<li><input type="radio" id="sg1L" name="price_size" value="1690,Large" >
					<label for="sg1L">Large</label></li>
				    </ul>
					<input type="number" class="quantity" name="quantity" value="1" min="1" max="10">
					<button type="submit" name="add" class="btn" value="pizza">Add to Cart <i class="fas fa-shopping-cart"> </i></button>
					</form>
					</div> 

                    	<div class="colum">
				    <div class="imgcontainer">
					<img id="sg2"src="styles/images/pizza/sg2.jpg">
					<div class="overlay"><p>Flavoursome pieces of black chicken and crunchy onion with a double layer of mozzarella cheese.</p></div>
					</div>
					<form class="form" method="post" action="itemadding_server.php?action=add&id=sg2" >
					<h4>Black Chicken</h4>
					<input type="hidden" name="name" value="Black Chicken (Classic)">
					<table><tr><td>Rs. 580</td><td>Rs. 1090</td><td>Rs. 1580</td></tr></table>				
				    <ul class="radio">	    
					<li><input type="radio" id="sg2S" name="price_size" value="750,Personal" checked>
					<label for="sg2S">Personal</label></li>
					<li><input type="radio" id="sg2M" name="price_size" value="1170,Medium" >
					<label for="sg2M">Medium</label></li>		 
					<li><input type="radio" id="sg2L" name="price_size" value="1690,Large" >
					<label for="sg2L">Large</label></li>
				    </ul>   
					<input type="number" class="quantity" name="quantity" value="1" min="1" max="10">
					<button type="submit" name="add" class="btn" value="pizza">Add to Cart <i class="fas fa-shopping-cart"> </i></button>
					</form>
					</div>  

						<div class="colum">
				    <div class="imgcontainer">
					<img id="sg3"src="styles/images/pizza/sg3.jpg">
					<div class="overlay"><p>BBQ chicken accompanied by spicy jalapenos, onions and a double layer of mozzarella cheese.</p></div>
					</div>
					<form class="form" method="post" action="itemadding_server.php?action=add&id=sg3" >
					<h4>BBQ Chicken</h4>
					<input type="hidden" name="name" value="BBQ Chicken (Classic)">
					<table><tr><td>Rs. 580</td><td>Rs. 1090</td><td>Rs. 1580</td></tr></table>				
				    <ul class="radio">	    
					<li><input type="radio" id="sg3S" name="price_size" value="750,Personal" checked>
					<label for="sg3S">Personal</label></li>
					<li><input type="radio" id="sg3M" name="price_size" value="1170,Medium" >
					<label for="sg3M">Medium</label></li>		 
					<li><input type="radio" id="sg3L" name="price_size" value="1690,Large" >
					<label for="sg3L">Large</label></li>
				    </ul>      
					<input type="number" class="quantity" name="quantity" value="1" min="1" max="10">
					<button type="submit" name="add" class="btn" value="pizza">Add to Cart <i class="fas fa-shopping-cart"> </i></button>
					</form>
					</div>  	
					
					<div class="colum">
					<div class="imgcontainer">
					<img id="sg4"src="styles/images/pizza/sg4.jpg">
					<div class="overlay"><p>Chicken ham & pineapple with a double layer of mozzarella cheese.</p></div>
					</div>
					<form class="form" method="post" action="itemadding_server.php?action=add&id=sg4" >
					<h4>Chicken Hawaiian</h4>
					<input type="hidden" name="name" value="Chicken Hawaiian (Classic)">
					<table><tr><td>Rs. 580</td><td>Rs. 1090</td><td>Rs. 1580</td></tr></table>				
				    <ul class="radio">	    
					<li><input type="radio" id="sg4S" name="price_size" value="750,Personal" checked>
					<label for="sg4S">Personal</label></li>
					<li><input type="radio" id="sg4M" name="price_size" value="1170,Medium">
					<label for="sg4M">Medium</label></li>		 
					<li><input type="radio" id="sg4L" name="price_size" value="1690,Large" >
					<label for="sg4L">Large</label></li>
				    </ul>     
					<input type="number" class="quantity" name="quantity" value="1" min="1" max="10">
					<button type="submit" name="add" class="btn" value="pizza">Add to Cart <i class="fas fa-shopping-cart"> </i></button>
					</form>
					</div>  


					<div class="colum">
					<div class="imgcontainer">
					<img id="sg5"src="styles/images/pizza/sg5.jpg">
					<div class="overlay"><p>The ever famous Butter Masala Chicken together with a layer of cream cheese, fresh onions, coriander, ginger and garlic, blanketed with a layer of mozzarella cheese.</p></div>
					</div>
					<form class="form" method="post" action="itemadding_server.php?action=add&id=sg5" >
					<h4>Butter Chicken Masala</h4>
					<input type="hidden" name="name" value="Butter Chicken Masala (Classic)">
					<table><tr><td>Rs. 580</td><td>Rs. 1090</td><td>Rs. 1580</td></tr></table>				
				    <ul class="radio">	    
					<li><input type="radio" id="sg5S" name="price_size" value="750,Personal" checked>
					<label for="sg5S">Personal</label></li>
					<li><input type="radio" id="sg5M" name="price_size" value="1170,Medium" >
					<label for="sg5M">Medium</label></li>		 
					<li><input type="radio" id="sg5L" name="price_size" value="1690,Large"  >
					<label for="sg5L">Large</label></li>
				    </ul>     
					<input type="number" class="quantity" name="quantity" value="1" min="1" max="10">
					<button type="submit" name="add" class="btn" value="pizza">Add to Cart <i class="fas fa-shopping-cart"> </i></button>
					</form>
					</div>  
						
					<div class="colum">
					<div class="imgcontainer">
					<img id="sg6"src="styles/images/pizza/sg6.jpg">
					<div class="overlay"><p>The ever famous Butter Masala Chicken together with a layer of cream cheese, fresh onions, coriander, ginger and garlic, blanketed with a layer of mozzarella cheese.</p></div>
					</div>
					<form class="form" method="post" action="itemadding_server.php?action=add&id=sg6" >
					<h4>Butter Chicken Masala</h4>
					<input type="hidden" name="name" value="Butter Chicken Masala (Classic)">
					<table><tr><td>Rs. 580</td><td>Rs. 1090</td><td>Rs. 1580</td></tr></table>				
				    <ul class="radio">	    
					<li><input type="radio" id="sg6S" name="price_size" value="750,Personal" checked>
					<label for="sg6S">Personal</label></li>
					<li><input type="radio" id="sg6M" name="price_size" value="1170,Medium" >
					<label for="sg6M">Medium</label></li>		 
					<li><input type="radio" id="sg6L" name="price_size" value="1690,Large" >
					<label for="sg6L">Large</label></li>
				    </ul>     
					<input type="number" class="quantity" name="quantity" value="1" min="1" max="10">
					<button type="submit" name="add" class="btn" value="pizza">Add to Cart <i class="fas fa-shopping-cart"> </i></button>
					</form>
					</div> 

					 <div class="colum">
					<div class="imgcontainer">
					<img id="sg7"src="styles/images/pizza/sg7.jpg">
					<div class="overlay"><p>A combination of spicy chicken and kotchchi sausage meat with crunchy onions and jalapenos placed on a layer of cream cheese and a layer of mozzarella.</p></div>
					</div>
					<form class="form" method="post" action="itemadding_server.php?action=add&id=sg7" >
					<h4>Cheese Chicken Fiesta</h4>
					<input type="hidden" name="name" value="Cheese Chicken Fiesta (Classic)">
					<table><tr><td>Rs. 580</td><td>Rs. 1090</td><td>Rs. 1580</td></tr></table>				
				    <ul class="radio">	    
					<li><input type="radio" id="sg7S" name="price_size" value="750,Personal" checked>
					<label for="sg7S">Personal</label></li>
					<li><input type="radio" id="sg7M" name="price_size" value="1170,Medium" >
					<label for="sg7M">Medium</label></li>		 
					<li><input type="radio" id="sg7L" name="price_size" value="1690,Large" >
					<label for="sg7L">Large</label></li>
				    </ul>      
					<input type="number" class="quantity" name="quantity" value="1" min="1" max="10">
					<button type="submit" name="add" class="btn" value="pizza">Add to Cart <i class="fas fa-shopping-cart"> </i></button>
					</form>
					</div> 

					 <div class="colum">
					<div class="imgcontainer">
					<img id="sg8"src="styles/images/pizza/sg8.jpg">
					<div class="overlay"><p>A combination of spicy chicken and kotchchi sausage meat with crunchy onions and jalapenos placed on a layer of cream cheese and a layer of mozzarella.</p></div>
					</div>
					<form class="form" method="post" action="itemadding_server.php?action=add&id=sg8" >
					<h4>Hot &amp; Spicy Chicken</h4>
					<input type="hidden" name="name" value="Hot &amp; Spicy Chicken (Classic)">
					<table><tr><td>Rs. 580</td><td>Rs. 1090</td><td>Rs. 1580</td></tr></table>				
				    <ul class="radio">	    
					<li><input type="radio" id="sg8S" name="price_size" value="750,Personal" checked>
					<label for="sg8S">Personal</label></li>
					<li><input type="radio" id="sg8M" name="price_size" value="1170,Medium" >
					<label for="sg8M">Medium</label></li>		 
					<li><input type="radio" id="sg8L" name="price_size" value="1690,Large">
					<label for="sg8L">Large</label></li>
				    </ul>      
					<input type="number" class="quantity" name="quantity" value="1" min="1" max="10">
					<button type="submit" name="add" class="btn" value="pizza">Add to Cart <i class="fas fa-shopping-cart"> </i></button>
					</form>
					</div>
		            
				</div>

	   </div>
	   
	   <div class="items">
<div class="title"><h1  id="supreme">~ Signature ~</h1></div>
	   
	         
	     <div class="container">
		      
				    <div class="colum">
				    <div class="imgcontainer">
					<img id="c1"src="styles/images/pizza/c1.jpg">
					<div class="overlay"><p>A fiery blend of kotchchi chicken sausage meat with nai miris, set upon an all new kotchchi sauce base topped with onion, capsicum and a double layer of mozzarella cheese.</p></div>
					</div>
					<form class="form" method="post" action="itemadding_server.php?action=add&id=c1" >					
					<h4>Chicken &amp; Nai Miris </h4>
					<input type="hidden" name="name" value="Chicken &amp; Nai Miris (Signature)">
					<table><tr><td>Rs. 640</td><td>Rs. 1120</td><td>Rs. 1430</td></tr></table>				
				    <ul class="radio">	    
					<li><input type="radio" id="c1S" name="price_size" value="640,Personal" checked>
					<label for="c1S">Personal</label></li>
					<li><input type="radio" id="c1M" name="price_size" value="1120,Medium">
					<label for="c1M">Medium</label></li>		 
					<li><input type="radio" id="c1L" name="price_size" value="1430,Large">
					<label for="c1L">Large</label></li>
				    </ul>
					<input type="number" class="quantity" name="quantity" value="1" min="1" max="10">
					<button type="submit" name="add" class="btn" value="pizza">Add to Cart <i class="fas fa-shopping-cart"> </i></button>
					</form>
					</div> 
					
					<div class="colum">
				    <div class="imgcontainer">
					<img id="c2"src="styles/images/pizza/c2.jpg">
					<div class="overlay"><p>Chicken bacon, onions & green chillies with a double layer of mozzarella cheese.</p></div>
					</div>
					<form class="form" method="post" action="itemadding_server.php?action=add&id=c2" >					
					<h4>Chicken Bacon </h4>
					<input type="hidden" name="name" value="Chicken Bacon (Signature)">
					<table><tr><td>Rs. 640</td><td>Rs. 1120</td><td>Rs. 1430</td></tr></table>				
				    <ul class="radio">	    
					<li><input type="radio" id="c2S" name="price_size" value="640,Personal" checked>
					<label for="c2S">Personal</label></li>
					<li><input type="radio" id="c2M" name="price_size" value="1120,Medium">
					<label for="c2M">Medium</label></li>		 
					<li><input type="radio" id="c2L" name="price_size" value="1430,Large">
					<label for="c2L">Large</label></li>
				    </ul>
					<input type="number" class="quantity" name="quantity" value="1" min="1" max="10">
					<button type="submit" name="add" class="btn" value="pizza">Add to Cart <i class="fas fa-shopping-cart"> </i></button>
					</form>
					</div>
					
					<div class="colum">
				    <div class="imgcontainer">
					<img id="c3"src="styles/images/pizza/c3.jpg">
					<div class="overlay"><p>Devilled chicken in spicy sauce with a double layer of mozzarella cheese.</p></div>
					</div>
					<form class="form" method="post" action="itemadding_server.php?action=add&id=c3" >					
					<h4>Devilled Chicken </h4>
					<input type="hidden" name="name" value="Devilled Chicken (Signature)">
					<table><tr><td>Rs. 640</td><td>Rs. 1120</td><td>Rs. 1430</td></tr></table>				
				    <ul class="radio">	    
					<li><input type="radio" id="c3S" name="price_size" value="640,Personal" checked>
					<label for="c3S">Personal</label></li>
					<li><input type="radio" id="c3M" name="price_size" value="1120,Medium">
					<label for="c3M">Medium</label></li>		 
					<li><input type="radio" id="c3L" name="price_size" value="1430,Large">
					<label for="c3L">Large</label></li>
				    </ul>
					<input type="number" class="quantity" name="quantity" value="1" min="1" max="10">
					<button type="submit" name="add" class="btn" value="pizza">Add to Cart <i class="fas fa-shopping-cart"> </i></button>
					</form>
					</div>
					
					<div class="colum">
				    <div class="imgcontainer">
					<img id="c4"src="styles/images/pizza/c4.jpg">
					<div class="overlay"><p>Rich tomato sauce with a triple layer of mozzarella cheese.</p></div>
					</div>
					<form class="form" method="post" action="itemadding_server.php?action=add&id=c4" >					
					<h4>Cheese Lovers </h4>
					<input type="hidden" name="name" value="Cheese Lovers (Signature)">
					<table><tr><td>Rs. 640</td><td>Rs. 1120</td><td>Rs. 1430</td></tr></table>				
				    <ul class="radio">	    
					<li><input type="radio" id="c4S" name="price_size" value="640,Personal" checked>
					<label for="c4S">Personal</label></li>
					<li><input type="radio" id="c4M" name="price_size" value="1120,Medium">
					<label for="c4M">Medium</label></li>		 
					<li><input type="radio" id="c4L" name="price_size" value="1430,Large">
					<label for="c4L">Large</label></li>
				    </ul>
					<input type="number" class="quantity" name="quantity" value="1" min="1" max="10">
					<button type="submit" name="add" class="btn" value="pizza">Add to Cart <i class="fas fa-shopping-cart"> </i></button>
					</form>
					</div> 
					
					<div class="colum">
				    <div class="imgcontainer">
					<img id="c5"src="styles/images/pizza/c5.jpg">
					<div class="overlay"><p>Tandoori chicken & onions with a double layer of mozzarella cheese. </p></div>
					</div>
					<form class="form" method="post" action="itemadding_server.php?action=add&id=c5" >					
					<h4>Tandoori Chicken </h4>
					<input type="hidden" name="name" value="Tandoori Chicken (Signature)">
					<table><tr><td>Rs. 640</td><td>Rs. 1120</td><td>Rs. 1430</td></tr></table>				
				    <ul class="radio">	    
					<li><input type="radio" id="c5S" name="price_size" value="640,Personal" checked>
					<label for="c5S">Personal</label></li>
					<li><input type="radio" id="c5M" name="price_size" value="1120,Medium">
					<label for="c5M">Medium</label></li>		 
					<li><input type="radio" id="c5L" name="price_size" value="1430,Large">
					<label for="c5L">Large</label></li>
				    </ul>
					<input type="number" class="quantity" name="quantity" value="1" min="1" max="10">
					<button type="submit" name="add" class="btn" value="pizza">Add to Cart <i class="fas fa-shopping-cart"> </i></button>
					</form>
					</div>
					
					<div class="colum">
				    <div class="imgcontainer">
					<img id="c6"src="styles/images/pizza/c6.jpg">
					<div class="overlay"><p>Chicken sausages & onions with a double layer of mozzarella cheese. </p></div>
					</div>
					<form class="form" method="post" action="itemadding_server.php?action=add&id=c6" >					
					<h4>Sausage Delight </h4>
					<input type="hidden" name="name" value="Sausage Delight (Signature)">
					<table><tr><td>Rs. 640</td><td>Rs. 1120</td><td>Rs. 1430</td></tr></table>				
				    <ul class="radio">	    
					<li><input type="radio" id="c6S" name="price_size" value="640,Personal" checked>
					<label for="c6S">Personal</label></li>
					<li><input type="radio" id="c6M" name="price_size" value="1120,Medium">
					<label for="c6M">Medium</label></li>		 
					<li><input type="radio" id="c6L" name="price_size" value="1430,Large">
					<label for="c6L">Large</label></li>
				    </ul>
					<input type="number" class="quantity" name="quantity" value="1" min="1" max="10">
					<button type="submit" name="add" class="btn" value="pizza">Add to Cart <i class="fas fa-shopping-cart"> </i></button>
					</form>
					</div>

               
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