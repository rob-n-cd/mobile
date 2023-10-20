<?php
require('../config/autoload.php'); 
include("dbcon.php");
$dao=new DataAccess();
$id=$_GET['id'];
$date2=date('Y-m-d',time());
$sql = "update cart set status1=7, cancel_date='$date2' where cart_id=".$id;
$conn->query($sql);


echo "<script> alert('Cancel Request Initiated The Amount Will be refunded To Your Account Within 48 hours.');</script> ";
echo"<script> location.replace('order.php'); </script>";
?>