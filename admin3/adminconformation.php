<?php
include("dbcon.php");
 $cart_id = $_GET['id'];
 //session_start();
 //$_SESSION['cid'] = $cart_id;
 $conform = "<h style = color:green;>delivary conform</h>";
 $button = "<a href =../user/returnproduct.php?cid=$cart_id>Return</a>";
 
 $_SESSION['deliver'] = "deliver";  
  $sql = "update cart set  deliver='$conform',button = '$button' where carid = '$cart_id'";
if($conn->query($sql))
    echo"upadate success";
else
echo "update failed";
  header('location:adminviewcart.php');
?>
