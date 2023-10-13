

<?php	
include("dbcon.php");
$cid = $_GET['cid'];
$sql = "update booking set status=3 where  company=".$cid;

$conn->query($sql);

 header('location:viewcompany.php');



?>

