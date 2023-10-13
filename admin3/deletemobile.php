

<?php	
include("dbcon.php");
$bid = $_GET['id'];
$sql = "update addmobile set status=2 where  mid=".$bid;

$conn->query($sql);

 header('location:viewmobiles.php');



?>

