

<?php	
include("dbcon.php");
$cartid = $_GET['id'];
$sql = "update cart set status=2 where  carid=".$cartid;
$conn->query($sql);

 header('location:carthome.php');



?>

