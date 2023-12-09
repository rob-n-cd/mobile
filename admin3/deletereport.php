<?php	
include("dbcon.php");
$rid = $_GET['rid'];
$sql = "delete from goret where  reid=".$rid;

$conn->query($sql);

 header('location:viewreports.php');



?>