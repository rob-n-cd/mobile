<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport">
    <meta http-equiv="X-UA-Compatible">
    <title>Document</title>
    <link rel="stylesheet" href="ui1.css">
    
    <script>

    
</head>

<body>

<?php include("userheader.php");	
include("dbcon.php");

?>

<?php
$pin1="";
$days = "";
$date2="";
?>



<?php
if(isset($_POST["btn-cart"]))
{
    
    echo"<script> location.replace('viewcart.php'); </script>";
    }
if(isset($_POST["btn-pay"]))
{
    if(isset($_POST['pin']))
    {
        if($_POST['pin']==NULL){
            echo "<script> alert('Please enter a valid address');</script> ";
            echo"<script> location.replace('address2.php'); </script>";
        }
    else{
    //echo"<script> location.replace('payment.php'); </script>";
    echo"<script> location.replace('payment.php'); </script>";
    }
    
}
}


?>


 
   

<form action="" method="POST" enctype="multipart/form-data">

 <div class="upper">
        <div class="upper-left">
<?php 
/*if(isset($_SESSION['email']))
{ 
   $name=$_SESSION['email'];
?>

 <h7 class="title-w3-agileits title-black-wthree"><?php  echo $name ?></h7>

<?php } */?>
            
            <img style="width:100; height:100" src="emmas.png" alt=" " class="img-responsive1" />
        </div>
        <div class="content">
        <h3>Enter The Delivery Address</h3>
            <div style="display: block;">
                
                 <label for="price"></label><br>
                <input id="pin" name="pin" type="text" value='<?php echo $pin1 ?>' style="margin-top: 8px;"><br>
				
				 
				
               
                
            </div>
        </div>
        
    </div>
   <div class="lower">
        <div class="btn-grp">
                
                <button class="buttons" name="btn-pay" id="btn-2">Payment</button>
                <button class="buttons" name="btn-cart" id="btn-3">Go To Cart</button>
                      
        </div>
    </div>
    </form>
   
</body>

</html>