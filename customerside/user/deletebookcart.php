<?php	
include("dbcon.php");
$bookid = $_GET['id'];
$sql = "update booking set status=2 where  bid=".$bookid;
$conn->query($sql);
session_start();
$mob_name=$_SESSION['itemname'] ;
 $sql = "select  * from cart where carname='$mob_name'";
 $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        $cart_id=$row["carid"];
        $sql = "update cart set status=2 where  carid=".$cart_id;

        
 header('location:viewbookcust.php');



?>

