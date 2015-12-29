<?php
session_start();

include("dbconnect.php");

//function Logout()
//{

//	session_unset();
//	session_destroy();
//}

function Login()
{
	$password=$_POST['password'];
	$email=$_POST['email'];
	$query="SELECT CustomerID,FirstName,LastName,Phone from Customers WHERE Password='$password' and Email='$email';";
	$result=mysql_query($query);
	$rows=mysql_num_rows($result);
	if($rows==1)
	{	while($row=mysql_fetch_array($result))
		{ 
		$_SESSION['userdetails']=array('logged_in'=>'true','email'=>$email,'name'=>$row['FirstName']." ".$row['LastName'],
			'phone'=>$row['Phone'],'customerid'=>$row['CustomerID']);
		//print_r($_SESSION);
		}
		$customerid=$_SESSION['userdetails']['customerid'];
		$query="SELECT c.ProductID,c.Quantity,c.Total,p.Discount,p.UnitPrice,p.Picture,p.ProductName
		  FROM Products p INNER JOIN Cart c 
		ON p.ProductID = c.ProductID where c.CustomerID='$customerid'";
		$result=mysql_query($query);
		$rows=mysql_num_rows($result);
		if($rows>=1)
		{
			$_SESSION['cart_empty']='false';
			while($row=mysql_fetch_array($result))
			{
				$unitprice=$row['UnitPrice'];
				$quantity=$row['Quantity'];
				$discount=$row['Discount'];
				$total=($unitprice-($unitprice*$discount)/100)*$quantity;
				$_SESSION['cart'][]=array('productid'=>$row['ProductID'],'quantity'=>$quantity,
					'total'=>$total,'image'=>$row['Picture'],'unitprice'=>$unitprice,
					'productname'=>$row['ProductName'],'discount'=>$discount);
			}
			
		}
		

		header("Location:index.php");
	}
	else
	{
		echo 'wrong credentials';
	}

}

function NewUser()
{
	//$userName = $_POST['username'];
	$email = $_POST['email'];
	$password =  $_POST['password'];
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$phone=$_POST['phone'];
	$query = "INSERT INTO Customers (FirstName,LastName,Email,Password,Phone) VALUES ('$fname','$lname','$email','$password','$phone');";
	$data = mysql_query ($query)or die(mysql_error());
	if($data)
	{
	header("Location:login.php");
	}
}


function SignUp()
{
	$email=$_POST['email'];
	$query = mysql_query("SELECT Email FROM Customers WHERE Email='$email';") or die(mysql_error());
	//print '1'.mysqli_fetch_row($query)[0];
	//print '2'.mysqli_fetch_row($query);
	if(strcmp(mysqli_fetch_row($query)[0],$email))
	{
		echo "SORRY...YOU ARE ALREADY REGISTERED USER...";
	}
	else
	{
		NewUser();
	}
}
/*
echo "inside register.php";
echo "<br>";
print_r($_POST['signin']);
echo "<br>";
print_r($_POST['register']);
echo "<br> end.";
*/
if(isset($_POST['register']))
{
	echo "entering signup";
	//SignUp();
	NewUser();
}
if(isset($_POST['signin']))
{
	echo 'logging_in';
	Login();
}


?>