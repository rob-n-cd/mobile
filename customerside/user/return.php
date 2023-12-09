<?php
include("dbcon.php");
         if(isset($_POST['submit']))
         {
          $bdate =$_POST['bdate'];
          $name = $_POST['name'];
          $address = $_POST['address'];
          $product = $_POST['product'];
          $quandity = $_POST['quandity'];
          $total = $_POST['total'];
          $discription = $_POST['discription'];
          $rdate = $_POST['rdate'];
          $email = $_POST['email'];
          $place = $_POST['place'];
          $price =$_POST['price'];
          $insert = "INSERT INTO `goret`( `bookdate`, `retname`, `retaddress`, `reproduct`, `requandity`, `retotal`, `discription`, `redate`, `reemail`,`replace`, `reprice`)
           VALUES ('$bdate','$name','$address','$product','$quandity','$total','$discription','$rdate','$email','$place','$price')";
            if(mysqli_query($conn,$insert))
            {
            session_start();
$sql = "update cart set status=6 where  carid=".$_SESSION['carts'];
$conn->query($sql);

            echo "<script> alert('New record created successfully');</script> ";
          header('location:../user/headercat.php');
            }
            else
            echo "<script> alert('New record created successfully');</script> ";
    
         }
     ?>