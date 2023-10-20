<?php	
include("dbcon.php");
$cid = $_GET['id'];
$sql = "update company set status=2 where  cid=".$cid;

$conn->query($sql);

 header('location:viewcompany.php');



?>