

<?php	
include("dbcon.php");
$cartid = $_GET['id'];
$sql = "update cart set status=2 where  carid=".$cartid;
$conn->query($sql);
$sqlbook = "update booking set status=2 where  cartid=".$cartid;
$conn->query($sqlbook);
$sqlpayment = "update payment set status=2 where  cartid=".$cartid;
$conn->query($sqlpayment);
 header('location:returnpage.php');



?>

