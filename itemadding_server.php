<?php	
session_start();	
if (isset($_POST["add"])){
	if(isset($_SESSION['username'])){
		
		    $option = explode(",", $_POST["price_size"]);
			      if (count($option) == 2){
                        $product_price = $option[0];
		                $product_size = $option[1]; }
		          else{
               			$product_price =$_POST["price"];
		                $product_size = 'N/A'; }
		
            if (isset($_SESSION["cart"])){
                $item_array_id = array_column($_SESSION["cart"],"product_id");
                if (!in_array($_GET["id"],$item_array_id)){
                    $count = count($_SESSION["cart"]);
                    $item_array = array('product_id' => $_GET["id"],'item_name' => $_POST["name"],'product_price' => $product_price,'product_size' => $product_size,'item_quantity' => $_POST["quantity"],);
                    $_SESSION["cart"][$count] = $item_array;					 
					$_SESSION['itemcount']= $_SESSION['itemcount']+1;
				    if ($_POST["add"]=='pizza'){
					    header('location:pizza.php#'.$_GET["id"]);}
			    	else{
						header('location:other.php#'.$_GET["id"]);}
                }else{
                    echo '<script>alert("Item already added to your Cart")</script>';
					if ($_POST["add"]=='pizza'){
					    echo '<script>window.location="pizza.php#'.$_GET["id"].'"</script>';}
			    	else{
						echo '<script>window.location="other.php#'.$_GET["id"].'"</script>';}
                    
                }
            }else{
                $item_array = array('product_id' => $_GET["id"],'item_name' => $_POST["name"],'product_price' => $product_price,'product_size' => $product_size,'item_quantity' => $_POST["quantity"],);
                $_SESSION["cart"][0] = $item_array;
				$count = 0; 
		        $count++;
		        $_SESSION['itemcount']= $count;				
			    if ($_POST["add"]=='pizza'){
					    header('location:pizza.php#'.$_GET["id"]);}
			    	else{
						header('location:other.php#'.$_GET["id"]);}
				}        
            } 
     else{
	    echo '<script>alert("Please Log In First...")</script>';
        echo '<script>window.location="login.php"</script>'; 
	 }
}

?>