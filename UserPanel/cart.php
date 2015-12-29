<?php 
session_start();
include("dbconnect.php");
?>

<!DOCTYPE html>
<html lang="en">
<?php include("head.php");?>
</head>
<body>

<?php
include ("topheader.php") ;
include ("middleheader.php") ;
include ("bottomheader.php") ;
?>
	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Shopping Cart</li>
				</ol>
			</div>
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Item</td>
							<td class="description"></td>
							<td class="price">Price</td>
							<td class="discount">Discount</td>
							<td class="quantity">Quantity</td>
							<td class="total">Total</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
						
						<?php
						if(isset($_SESSION['userdetails']))
						{
							$customerid=$_SESSION['userdetails']['customerid'];
						if(isset($_POST['delete']))
						{
							$productid=$_POST['secret_data'];
							mysql_query("DELETE FROM Cart WHERE ProductID='$productid' AND CustomerID='$customerid';");
							$c=$_SESSION['count'];
							$_SESSION['count']=$c-1;
							unset($_POST['delete']);
						}
					
						$result=mysql_query("SELECT c.ProductID,c.Quantity,c.Total,
							p.Discount,p.UnitPrice,p.Picture,p.ProductName
							FROM Products p INNER JOIN Cart c
							ON p.ProductID = c.ProductID where c.CustomerID='$customerid';");
											
						while($rows=mysql_fetch_array($result))
						{
						$productid=$rows['ProductID'];
						$productname=$rows['ProductName'];
						$discount=$rows['Discount'];
						$image=$rows['Picture'];
						$quantity=$rows['Quantity'];
						
						if(isset($_POST['update'])&& $productid==$_POST['secret_data'])
						{
							$quantity=$_POST['quantity'];
							unset($_POST['update']);
						}

						$unitprice=$rows['UnitPrice'];
					 	$total=$rows['Total'];
					 	$total=($unitprice-($unitprice*$discount)/100)*$quantity;
						echo '
						<tr id="'.$productid.'">
							<td class="cart_product">
								<a href=""><img src="'.$image.'" alt="Img not available."></a>
							</td>
							<td class="cart_description">
								<h4><a href="">'.$productname.'</a></h4>
								<p>ProductID:'. $productid.'</p>
							</td>
							<td class="cart_price">
								<p>'.$unitprice.'</p>
							</td>
							<td class="cart_discount">
							<p>'.$discount.'</p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
								<form action="cart.php" method="post">
									<input name="update" type="submit" value="Update" >
									<input name="secret_data" type="hidden" value="'.$productid.'"> 
									<input class="cart_quantity_input" type="number" 
									name="quantity" value="'.$quantity.'" autocomplete="off" size="2" min="1" max="10">
									<input name="delete" type="submit" value="X">
								</form>
								</div>
							</td>
							<td class="cart_total">
							<p>'.$total.'</p>
							</td>
						</tr>
						';
					}
				}
				else
					echo "Cart is Empty.";
						?>

					</tbody>
				</table>
				
			</div>
		</div>
	</section> <!--/#cart_items-->

	<section id="do_action">
		<div class="container">
			<div class="heading">
				<h3>What would you like to do next?</h3>
				<p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<div class="chose_area">
						<ul class="user_option">
							<li>
								<input type="checkbox">
								<label>Use Coupon Code</label>
							</li>
							<li>
								<input type="checkbox">
								<label>Use Gift Voucher</label>
							</li>
							<li>
								<input type="checkbox">
								<label>Estimate Shipping & Taxes</label>
							</li>
						</ul>
						<ul class="user_info">
							<li class="single_field">
								<label>Country:</label>
								<select>
									<option>United States</option>
									<option>Bangladesh</option>
									<option>UK</option>
									<option>India</option>
									<option>Pakistan</option>
									<option>Ucrane</option>
									<option>Canada</option>
									<option>Dubai</option>
								</select>
								
							</li>
							<li class="single_field">
								<label>Region / State:</label>
								<select>
									<option>Select</option>
									<option>Dhaka</option>
									<option>London</option>
									<option>Dillih</option>
									<option>Lahore</option>
									<option>Alaska</option>
									<option>Canada</option>
									<option>Dubai</option>
								</select>
							
							</li>
							<li class="single_field zip-field">
								<label>Zip Code:</label>
								<input type="text">
							</li>
						</ul>
						<a class="btn btn-default update" href="">Get Quotes</a>
						<a class="btn btn-default check_out" href="">Continue</a>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="total_area">
						<ul>
							<li>Cart Sub Total <span>$59</span></li>
							<li>Eco Tax <span>$2</span></li>
							<li>Shipping Cost <span>Free</span></li>
							<li>Total <span>$61</span></li>
						</ul>
							<a class="btn btn-default update" href="">Update</a>
							<a class="btn btn-default check_out" href="">Check Out</a>
					</div>
				</div>
			</div>
		</div>
	</section><!--/#do_action-->
<?php
include ("topfooter.php") ;
include ("widgetfooter.php") ;
include ("bottomfooter.php") ;
?>
</body>
</html>