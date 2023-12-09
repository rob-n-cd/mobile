<?php	
include("dbcon.php");
$bookid = $_GET['id'];
$sql = "update booking set status=2 where  bid=".$bookid;
$conn->query($sql);
 header('location:viewbookcust.php');



?>

