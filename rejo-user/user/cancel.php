

<?php	
include("dbcon.php");
$cart_id = $_GET['id'];
echo $cart_id;
$sql = "update cart set status=5 where cart_id=".$cart_id;

$conn->query($sql);

 header('location:viewcancel.php');



?>

