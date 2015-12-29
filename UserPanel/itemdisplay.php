<?php 
	$logged_in='false';
	if(isset($_SESSION['userdetails']))
	{
		$logged_in=$_SESSION['userdetails']['logged_in'];
	}
	//include ('dbconnect.php');
	$quer="SELECT p.ProductName,p.ProductID,p.Picture,p.UnitPrice FROM Products 
	p INNER JOIN FeaturedItems f ON f.ProductID=p.ProductID;";
	$resul=mysql_query($quer);
	//echo 'heyo';
	while($rows=mysql_fetch_array($resul))

{
	$img=$rows['Picture'];
		$price=$rows['UnitPrice'];
		$productname=$rows['ProductName'];
		$productid=$rows['ProductID'];
		//echo $productid.'_name';
		echo
	'<div class="col-sm-4">
		<div class="product-image-wrapper">
			<div class="single-products" id='.$productid.'>
				<div class="productinfo text-center">
					<img src="'.$img.'" alt="Image not available" />
					<h2>Rs. '.$price.'</h2>
					<p>'.$productname.'</p>
					<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
				

				</div>
				<div class="product-overlay" >
					<div class="overlay-content">
						<h2>Rs. '.$price.'</h2>
						<p>'.$productname.'</p>
						<a href="#" class="btn btn-default add-to-cart" onclick="cart('.$productid.','.$logged_in.')" >
						<i class="fa fa-shopping-cart"></i>Add to cart</a>

						<input type="hidden" id="'.$productid.'_name" value="'.$productname.'">
					    <input type="hidden" id="'.$productid.'_price" value="'.$price.'">
					</div>
				</div>
			</div>
			<div class="choose">
				<ul class="nav nav-pills nav-justified">
					<li><a href=""><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
					<li><a href=""><i class="fa fa-plus-square"></i>Add to compare</a></li>
				</ul>
			</div>
		</div>
	</div>';
}
?>