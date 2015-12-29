<?php
  
  session_start();
  include("dbconnect.php");
  if(isset($_POST['total_cart_items']))
  {
    if(isset($_SESSION['count']))
	       echo $_SESSION['count'];
    else
      echo 0;
	exit();
  }
  //echo "item_id=".$_POST['item_id'];
  
  if(isset($_POST['item_id']))
  {
    if(isset($_SESSION['userdetails']))
    {
      $productid=$_POST['item_id'];
      $customerid=$_SESSION['userdetails']['customerid'];
      $result=mysql_query("SELECT ProductID FROM Cart WHERE CustomerID='$customerid';");
      $rows=mysql_num_rows($result);
      mysql_query("INSERT INTO Cart (ProductID,Quantity,CustomerID) VALUES('$productid',1,'$customerid')");
      if(mysql_affected_rows()!=-1)
      {
      $_SESSION['count']=$rows+1;
       echo $rows+1;
     }
     else
      echo $rows;
      
    }
    
    exit();
  }

  if(isset($_POST['showcart']))
  {
    for($i=0;$i<count($_SESSION['src']);$i++)
    {
      echo "<div class='cart_items'>";
      echo "<img src='".$_SESSION['src'][$i]."'>";
      echo "<p>".$_SESSION['name'][$i]."</p>";
      echo "<p>".$_SESSION['price'][$i]."</p>";
      echo "</div>";
    }
    exit();	
  }
?>