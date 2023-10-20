

<?php	
include("dbcon.php");
$cart_id = $_GET['id'];
echo $cart_id;
$sql = "delete from cart where cart_id=".$cart_id;

$conn->query($sql);

 header('location:viewcart.php');



?>

