<?php
require('../config/autoload.php'); 
include("dbcon.php");
$dao=new DataAccess();
$id=$_GET['id'];
$date2= 
$sql = "update cart set status1=5, return_date='$date2' where cart_id=".$id;
$conn->query($sql);
echo "<script> alert('Return Request Initiated The Amount Will be refunded To Your Account Within 48 hours.');</script> ";

echo"<script> location.replace('order.php'); </script>";
?>