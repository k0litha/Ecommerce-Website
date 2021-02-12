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
		<link href="styles/other.css" rel="stylesheet" type="text/css">
		<link rel="icon" type="image/png" href="styles/images/logo.jpg"/>
    </head>
    
    <body>
    <header>
			<div><img id="logo" src="styles/images/logo.jpg" alt="logo"></div>
             <div class="nav__links">
                    <a href="index.php">HOME</a>
                    <a href="pizza.php">PIZZA</a>
					<a href="other.php" style="text-shadow: 5px 5px 5px #134225;color:white;">OTHER</a>
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
	   <div class="title"><h1  id="classic">~ Appetizers ~</h1></div>
			
			<div class="container">
		          
				    <div class="columwing">
				    <div class="imgcontainer">
					<img id="w1"src="styles/images/pizza/w1.jpg">
					<div class="overlay"><p>Succulent chicken wings tossed in our famous BBQ sauce & baked to perfection!</p></div>
					</div>
					<form class="form" method="post" action="itemadding_server.php?action=add&id=w1" >					
					<h4>Wingz - BBQ  </h4>
					<input type="hidden" name="name" value="Wingz - BBQ ">
					<table class="wing" ><tr><td>Rs. 450</td><td>Rs. 850</td><td>Rs. 1500</td></tr></table>				
				    <ul class="radio">	    
					<li><input type="radio" id="w1S" name="price_size" value="450,Personal" checked>
					<label for="w1S">6 Pcs</label></li>
					<li><input type="radio" id="w1M" name="price_size" value="850,Medium">
					<label for="w1M">12 Pcs</label></li>		 
					<li><input type="radio" id="w1L" name="price_size" value="1500,Large">
					<label for="w1L">24 Pcs</label></li>
				    </ul>
					<input type="number" class="quantity" name="quantity" value="1" min="1" max="10">
					<button type="submit" name="add" class="btn" value="other">Add to Cart <i class="fas fa-shopping-cart"> </i></button>
					</form>
					</div>
					
					<div class="columwing">
				    <div class="imgcontainer">
					<img id="w2"src="styles/images/pizza/w2.jpg">
					<div class="overlay"><p>Succulent chicken wings tossed in our famous Garlic Parmesan sauce & baked to perfection!</p></div>
					</div>
					<form class="form" method="post" action="itemadding_server.php?action=add&id=w2" >					
					<h4>Wingz - Garlic Parmesan </h4>
					<input type="hidden" name="name" value="Wingz - Garlic Parmesan">
					<table class="wing" ><tr><td>Rs. 450</td><td>Rs. 850</td><td>Rs. 1500</td></tr></table>				
				    <ul class="radio">	    
					<li><input type="radio" id="w2S" name="price_size" value="450,Personal" checked>
					<label for="w2S">6 Pcs</label></li>
					<li><input type="radio" id="w2M" name="price_size" value="850,Medium">
					<label for="w2M">12 Pcs</label></li>		 
					<li><input type="radio" id="w2L" name="price_size" value="1500,Large">
					<label for="w2L">24 Pcs</label></li>
				    </ul>
					<input type="number" class="quantity" name="quantity" value="1" min="1" max="10">
					<button type="submit" name="add" class="btn" value="other">Add to Cart <i class="fas fa-shopping-cart"> </i></button>
					</form>
					</div>
					
					<div class="columwing">
				    <div class="imgcontainer">
					<img id="w3"src="styles/images/pizza/w3.jpg">
					<div class="overlay"><p>Succulent chicken wings tossed in our famous Peri Peri sauce & baked to perfection!</p></div>
					</div>
					<form class="form" method="post" action="itemadding_server.php?action=add&id=w3" >					
					<h4>Wingz - Peri Peri </h4>
					<input type="hidden" name="name" value="Wingz - Peri Peri ">
					<table class="wing" ><tr><td>Rs. 450</td><td>Rs. 850</td><td>Rs. 1500</td></tr></table>				
				    <ul class="radio">	    
					<li><input type="radio" id="w3S" name="price_size" value="450,Personal" checked>
					<label for="w3S">6 Pcs</label></li>
					<li><input type="radio" id="w3M" name="price_size" value="850,Medium"">
					<label for="w3M">12 Pcs</label></li>		 
					<li><input type="radio" id="w3L" name="price_size" value="1500,Large">
					<label for="w3L">24 Pcs</label></li>
				    </ul>
					<input type="number" class="quantity" name="quantity" value="1" min="1" max="10">
					<button type="submit" name="add" class="btn" value="other">Add to Cart <i class="fas fa-shopping-cart"> </i></button>
					</form>
					</div>
					
					<div class="columwing">
				    <div class="imgcontainer">
					<img id="w4"src="styles/images/pizza/w4.jpg">
					<div class="overlay"><p>Succulent chicken wings tossed in our famous Sriracha sauce & baked to perfection!</p></div>
					</div>
					<form class="form" method="post" action="itemadding_server.php?action=add&id=w4" >					
					<h4>Wingz - Sriracha </h4>
					<input type="hidden" name="name" value="Wingz - Sriracha ">
					<table class="wing" ><tr><td>Rs. 450</td><td>Rs. 850</td><td>Rs. 1500</td></tr></table>				
				    <ul class="radio">	    
					<li><input type="radio" id="w4S" name="price_size" value="450,Personal" checked>
					<label for="w4S">6 Pcs</label></li>
					<li><input type="radio" id="w4M" name="price_size" value="850,Medium">
					<label for="w4M">12 Pcs</label></li>		 
					<li><input type="radio" id="w4L" name="price_size" value="1500,Large">
					<label for="w4L">24 Pcs</label></li>
				    </ul>
					<input type="number" class="quantity" name="quantity" value="1" min="1" max="10">
					<button type="submit" name="add" class="btn" value="other">Add to Cart <i class="fas fa-shopping-cart"> </i></button>
					</form>
					</div>
					
					
					
				    <div class="colum">
				    <div class="imgcontainer">
					<img id="a1"src="styles/images/pizza/a1.jpg">
					<div class="overlay"><p>Sliced & spread with garlic buttery goodness!</p></div>
					</div>
					<form class="form" method="post" action="itemadding_server.php?action=add&id=a1" >					
					<h4>Garlic Bread</h4>
					<input type="hidden" name="name" value="Garlic Bread">
					<table><tr><td>Rs. 300</td></tr></table>				
				    <input type="hidden" name="price" value="300">
					<input type="number" class="quantity" name="quantity" value="1" min="1" max="10">
					<button type="submit" name="add" class="btn" value="other">Add to Cart <i class="fas fa-shopping-cart"> </i></button>
					</form>
					</div> 

                    <div class="colum">
				    <div class="imgcontainer">
					<img id="a2"src="styles/images/pizza/a2.jpg">
					<div class="overlay"><p>Our delicious wedges are soft on the inside, crunchy on the outside nad the perfect snack for a delight in!</p></div>
					</div>
					<form class="form" method="post" action="itemadding_server.php?action=add&id=a2" >					
					<h4>Potato Wedges</h4>
					<input type="hidden" name="name" value="Potato Wedges">
					<table><tr><td>Rs. 450</td></tr></table>				
				    <input type="hidden" name="price" value="450">
					<input type="number" class="quantity" name="quantity" value="1" min="1" max="10">
					<button type="submit" name="add" class="btn" value="other">Add to Cart <i class="fas fa-shopping-cart"> </i></button>
					</form>
					</div> 

					<div class="colum">
				    <div class="imgcontainer">
					<img id="a3"src="styles/images/pizza/a3.jpg">
					<div class="overlay"><p>Chicken and cheese are two things that go so well together, and with this delectable appetizer, you'll find it's the perfect bite-sized snack to get you started!</p></div>
					</div>
					<form class="form" method="post" action="itemadding_server.php?action=add&id=a3" >					
					<h4>Spicy Chicken &amp; Cheese </h4>
					<input type="hidden" name="name" value="Spicy Chicken &amp; Cheese Balls">
					<table><tr><td>Rs. 440</td></tr></table>				
				    <input type="hidden" name="price" value="440">
					<input type="number" class="quantity" name="quantity" value="1" min="1" max="10">
					<button type="submit" name="add" class="btn" value="other">Add to Cart <i class="fas fa-shopping-cart"> </i></button>
					</form>
					</div>  

                    <div class="colum">
				    <div class="imgcontainer">
					<img id="a4"src="styles/images/pizza/a4.jpg">
					<div class="overlay"><p>Layered with garlic butter and mozzarella cheese!</p></div>
					</div>
					<form class="form" method="post" action="itemadding_server.php?action=add&id=a4" >					
					<h4>Garlic Bread Supreme</h4>
					<input type="hidden" name="name" value="Garlic Bread Supreme">
					<table><tr><td>Rs. 460</td></tr></table>				
				    <input type="hidden" name="price" value="460">
					<input type="number" class="quantity" name="quantity" value="1" min="1" max="10">
					<button type="submit" name="add" class="btn" value="other">Add to Cart <i class="fas fa-shopping-cart"> </i></button>
					</form>
					</div> 
						
					<div class="colum">
				    <div class="imgcontainer">
					<img id="a5"src="styles/images/pizza/a5.jpg">
					<div class="overlay"><p>Layered mozzarella cheese with Chicken Sausage</p></div>
					</div>
					<form class="form" method="post" action="itemadding_server.php?action=add&id=a5" >					
					<h4>Chicken Sausage Rolls</h4>
					<input type="hidden" name="name" value="Chicken Sausage Rolls">
					<table><tr><td>Rs. 525</td></tr></table>				
				    <input type="hidden" name="price" value="525">
					<input type="number" class="quantity" name="quantity" value="1" min="1" max="10">
					<button type="submit" name="add" class="btn" value="other">Add to Cart <i class="fas fa-shopping-cart"> </i></button>
					</form>
					</div> 
					
					<div class="colum">
				    <div class="imgcontainer">
					<img id="a6"src="styles/images/pizza/a6.jpg">
					<div class="overlay"><p>Everyone’s favourite wings, baked just the right amount and given suculent flavour of garlic !</p></div>
					</div>
					<form class="form" method="post" action="itemadding_server.php?action=add&id=a6" >					
					<h4>Garlic Chicken Wings</h4>
					<input type="hidden" name="name" value="Garlic Chicken Wings">
					<table><tr><td>Rs. 550</td></tr></table>				
				    <input type="hidden" name="price" value="550">
					<input type="number" class="quantity" name="quantity" value="1" min="1" max="10">
					<button type="submit" name="add" class="btn" value="Add to Cart">Add to Cart <i class="fas fa-shopping-cart"> </i></button>
					</form>
					</div> 
		            
				</div> 	
			</div> 
<div class="items">
<div class="title"><h1  id="supreme">~ Pasta ~</h1></div>
	       <div class="container">
		      
				    <div class="colum">
				    <div class="imgcontainer">
					<img id="p1"src="styles/images/pizza/p1.jpg">
					<div class="overlay"><p>The famed Italian spaghetti with minced chicken complemented by delicious mozzarella cheese baked to perfection, served with 2 slices of garlic bread</p></div>
					</div>
					<form class="form" method="post" action="itemadding_server.php?action=add&id=p1" >					
					<h4>Spaghetti Bolognaise</h4>
					<input type="hidden" name="name" value="Spaghetti Bolognaise">
					<table><tr><td>Rs. 700</td></tr></table>				
				    <input type="hidden" name="price" value="700">
					<input type="number" class="quantity" name="quantity" value="1" min="1" max="10">
					<button type="submit" name="add" class="btn" value="other">Add to Cart <i class="fas fa-shopping-cart"> </i></button>
					</form>
					</div>
					
					<div class="colum">
				    <div class="imgcontainer">
					<img id="p2"src="styles/images/pizza/p2.jpg">
					<div class="overlay"><p>Delicious spaghetti with a meeting of the finest of tandoori chicken and kotchchi chicken sausage meat along with a spicy Italian sauce and mozzarella cheese, served with 2 slices of garlic bread</p></div>
					</div>
					<form class="form" method="post" action="itemadding_server.php?action=add&id=p2" >					
					<h4>Spaghetti with Chicken</h4>
					<input type="hidden" name="name" value="Spaghetti with Chicken">
					<table><tr><td>Rs. 700</td></tr></table>				
				    <input type="hidden" name="price" value="700">
					<input type="number" class="quantity" name="quantity" value="1" min="1" max="10">
					<button type="submit" name="add" class="btn" value="other">Add to Cart <i class="fas fa-shopping-cart"> </i></button>
					</form>
					</div>
					
					<div class="colum">
				    <div class="imgcontainer">
					<img id="p3"src="styles/images/pizza/p3.jpg">
					<div class="overlay"><p>Macaroni elbow pasta mixed with cheese sauce, accompanied by grilled onions and layered with mozzarella cheese, served with 2 slices of garlic bread</p></div>
					</div>
					<form class="form" method="post" action="itemadding_server.php?action=add&id=p3" >					
					<h4>Macaroni &amp; Cheese </h4>
					<input type="hidden" name="name" value="Macaroni &amp; Cheese">
					<table><tr><td>Rs. 800</td></tr></table>				
				    <input type="hidden" name="price" value="800">
					<input type="number" class="quantity" name="quantity" value="1" min="1" max="10">
					<button type="submit" name="add" class="btn" value="other">Add to Cart <i class="fas fa-shopping-cart"> </i></button>
					</form>
					</div>
					
					<div class="colum">
				    <div class="imgcontainer">
					<img id="p4"src="styles/images/pizza/p4.jpg">
					<div class="overlay"><p>A true classic with layers of pasta chicken slathered with cheese sauce and mozzarella cheese, served with 2 slices of garlic bread</p></div>
					</div>
					<form class="form" method="post" action="itemadding_server.php?action=add&id=p4" >					
					<h4>Chicken Lasagna</h4>
					<input type="hidden" name="name" value="Chicken Lasagna">
					<table><tr><td>Rs. 800</td></tr></table>				
				    <input type="hidden" name="price" value="800">
					<input type="number" class="quantity" name="quantity" value="1" min="1" max="10">
					<button type="submit" name="add" class="btn" value="other">Add to Cart <i class="fas fa-shopping-cart"> </i></button>
					</form>
					</div>		            
					
			    </div> 
		   </div> 
		
<div class="items">
<div class="title"><h1  id="supreme">~ Beverages ~</h1></div>
	   
	        <div class="container">

					<div class="colum">
				    <div class="imgcontainer">
					<img id="b1"src="styles/images/pizza/b1.jpg">
					<div class="overlay"><p>Go red with the delicious flavour of strawberry, mixed and blended into a creamy shake!</p></div>
					</div>
					<form class="form" method="post" action="itemadding_server.php?action=add&id=b1" >					
					<h4>Strawberry Shake(300ml) </h4>
					<input type="hidden" name="name" value="Strawberry Shake(300ml) ">
					<table><tr><td>Rs. 380</td></tr></table>				
				    <input type="hidden" name="price" value="380">
					<input type="number" class="quantity" name="quantity" value="1" min="1" max="10">
					<button type="submit" name="add" class="btn" value="other">Add to Cart <i class="fas fa-shopping-cart"> </i></button>
					</form>
					</div>
					
					<div class="colum">
				    <div class="imgcontainer">
					<img id="b2"src="styles/images/pizza/b2.jpg">
					<div class="overlay"><p>Take a sip of a creamy concoction of double chocolate and lose yourself in a chocolate coma!</p></div>
					</div>
					<form class="form" method="post" action="itemadding_server.php?action=add&id=b2" >					
					<h4>Chocolate Shake(300ml)</h4>
					<input type="hidden" name="name" value="Chocolate Shake(300ml)">
					<table><tr><td>Rs. 400</td></tr></table>				
				    <input type="hidden" name="price" value="400">
					<input type="number" class="quantity" name="quantity" value="1" min="1" max="10">
					<button type="submit" name="add" class="btn" value="Add to Cart">Add to Cart <i class="fas fa-shopping-cart"> </i></button>
					</form>
					</div>
					
					<div class="colum">
				    <div class="imgcontainer">
					<img id="b3"src="styles/images/pizza/b3.jpg">
					<div class="overlay"><p>A tropical blend of the juiciest mango flavour creating the perfect beverage to soothe your taste-buds!</p></div>
					</div>
					<form class="form" method="post" action="itemadding_server.php?action=add&id=b3" >					
					<h4>Mango Shake(300ml)</h4>
					<input type="hidden" name="name" value="Mango Shake(300ml)">
					<table><tr><td>Rs. 380</td></tr></table>				
				    <input type="hidden" name="price" value="380">
					<input type="number" class="quantity" name="quantity" value="1" min="1" max="10">
					<button type="submit" name="add" class="btn" value="other">Add to Cart <i class="fas fa-shopping-cart"> </i></button>
					</form>
					</div>
					
					<div class="colum">
				    <div class="imgcontainer">
					<img id="b4"src="styles/images/pizza/b4.jpg">
					<div class="overlay"><p>Delicious and Refreshing!</p></div>
					</div>
					<form class="form" method="post" action="itemadding_server.php?action=add&id=b4" >					
					<h4>Pet Coca-Cola</h4>
					<input type="hidden" name="name" value="Pet Coca-Cola ">
					<table><tr><td>Rs. 150</td></tr></table>				
				    <input type="hidden" name="price" value="150">
					<input type="number" class="quantity" name="quantity" value="1" min="1" max="10">
					<button type="submit" name="add" class="btn" value="other">Add to Cart <i class="fas fa-shopping-cart"> </i></button>
					</form>
					</div>
					
					<div class="colum">
				    <div class="imgcontainer">
					<img id="b5"src="styles/images/pizza/b5.jpg">
					<div class="overlay"><p>Delicious and Refreshing!</p></div>
					</div>
					<form class="form" method="post" action="itemadding_server.php?action=add&id=b5" >					
					<h4>Jumbo Coca-Cola</h4>
					<input type="hidden" name="name" value="Jumbo Coca-Cola ">
					<table><tr><td>Rs. 300</td></tr></table>				
				    <input type="hidden" name="price" value="300">
					<input type="number" class="quantity" name="quantity" value="1" min="1" max="10">
					<button type="submit" name="add" class="btn" value="other">Add to Cart <i class="fas fa-shopping-cart"> </i></button>
					</form>
					</div>
					
					<div class="colum">
				    <div class="imgcontainer">
					<img id="b6"src="styles/images/pizza/b6.jpg">
					<div class="overlay"><p>Delicious and Refreshing!</p></div>
					</div>
					<form class="form" method="post" action="itemadding_server.php?action=add&id=b6" >					
					<h4>Jumbo Fanta</h4>
					<input type="hidden" name="name" value="Jumbo Fanta">
					<table><tr><td>Rs. 300</td></tr></table>				
				    <input type="hidden" name="price" value="300">
					<input type="number" class="quantity" name="quantity" value="1" min="1" max="10">
					<button type="submit" name="add" class="btn" value="other">Add to Cart <i class="fas fa-shopping-cart"> </i></button>
					</form>
					</div>
					
					<div class="colum">
				    <div class="imgcontainer">
					<img id="b7"src="styles/images/pizza/b7.jpg">
					<div class="overlay"><p>Delicious and Refreshing!</p></div>
					</div>
					<form class="form" method="post" action="itemadding_server.php?action=add&id=b7" >					
					<h4>Pet Fanta Portello</h4>
					<input type="hidden" name="name" value="Pet Fanta Portello">
					<table><tr><td>Rs. 150</td></tr></table>				
				    <input type="hidden" name="price" value="150">
					<input type="number" class="quantity" name="quantity" value="1" min="1" max="10">
					<button type="submit" name="add" class="btn" value="other">Add to Cart <i class="fas fa-shopping-cart"> </i></button>
					</form>
					</div>
					
					<div class="colum">
				    <div class="imgcontainer">
					<img id="b8"src="styles/images/pizza/b8.jpg">
					<div class="overlay"><p>Delicious and Refreshing!</p></div>
					</div>
					<form class="form" method="post" action="itemadding_server.php?action=add&id=b8" >					
					<h4>Pet Sprite</h4>
					<input type="hidden" name="name" value="Pet Sprite">
					<table><tr><td>Rs. 150</td></tr></table>				
				    <input type="hidden" name="price" value="150">
					<input type="number" class="quantity" name="quantity" value="1" min="1" max="10">
					<button type="submit" name="add" class="btn" value="other">Add to Cart <i class="fas fa-shopping-cart"> </i></button>
					</form>
					</div>
					
					<div class="colum">
				    <div class="imgcontainer">
					<img id="b9"src="styles/images/pizza/b9.jpg">
					<div class="overlay"><p>Delicious and Refreshing!</p></div>
					</div>
					<form class="form" method="post" action="itemadding_server.php?action=add&id=b9" >					
					<h4>Pet Fanta Orange</h4>
					<input type="hidden" name="name" value="Pet Fanta Orange">
					<table><tr><td>Rs. 150</td></tr></table>				
				    <input type="hidden" name="price" value="150">
					<input type="number" class="quantity" name="quantity" value="1" min="1" max="10">
					<button type="submit" name="add" class="btn" value="other">Add to Cart <i class="fas fa-shopping-cart"> </i></button>
					</form>
					</div>

                    <div class="colum">
				    <div class="imgcontainer">
					<img id="b91"src="styles/images/pizza/b91.jpg">
					<div class="overlay"><p>Delicious and Refreshing!</p></div>
					</div>
					<form class="form" method="post" action="itemadding_server.php?action=add&id=b91" >					
					<h4>Coke Zero 400ml </h4>
					<input type="hidden" name="name" value="Coke Zero 400ml ">
					<table><tr><td>Rs. 150</td></tr></table>				
				    <input type="hidden" name="price" value="150">
					<input type="number" class="quantity" name="quantity" value="1" min="1" max="10">
					<button type="submit" name="add" class="btn" value="other">Add to Cart <i class="fas fa-shopping-cart"> </i></button>
					</form>
					</div>

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