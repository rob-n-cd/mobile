<?php
include("dbcon.php");
 $cart_id = $_GET['id'];
 $conform = "<h style = color:green;>item delivared</h>";
  $sql = "update cart set  deliver='$conform' where carid = '$cart_id'";
if($conn->query($sql))
    echo"upadate success";
else
echo "update failed";
  //header('location:adminviewcart.php');
?>