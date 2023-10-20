<?php
require('../config/autoload.php'); 
include("dbcon.php");
$dao=new DataAccess();
$id=$_GET['id'];
$date2=date('Y-m-d',time());
$sql = "update cart set status1=5, return_date='$date2' where cart_id=".$id;
$conn->query($sql);

/*$q="SELECT * from cart where cart_id=".$id;
$info=$dao->query($q);
echo ".$info";
$cstemail=$info[0]["email"];
$iid=$info[0]['iid'];
$iname=$info[0]["iname"];
$price=$info[0]['price'];
$quantity=$info[0]['quantity'];
$total=$info[0]['total'];
$candate=$info[0]["cancel_date"];*/

$result = $conn->query($query);
  
    if ($result->num_rows > 0) 
    {
        // OUTPUT DATA OF EACH ROW
        while($row = $result->fetch_assoc())
        {
            $cstemail=$row['email'];
            $iid=$row['iid'];
            $iname=$row['iname'];
            $price=$row['price'];
            $quantity=$row['quantity'];
            $total=$row['total'];
            $candate=$row['cancel_date'];
                
                    }

$sql1 = $q="INSERT into canceldetail (cart_id,cstemail,iid,iname,price,quantity,total,candate) VALUES ('$id','$cstemail','$iid','$iname','$price','$quantity','$total','$candate')";


//echo"<script> location.replace('order.php'); </script>";
?>