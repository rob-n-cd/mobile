
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>CITY MOBILES</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free Website Template" name="keywords">
        <meta content="Free Website Template" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        
        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

<?php require('../config/autoload.php'); 
include("dbcon.php");

?>

<?php
$dao=new DataAccess();
    if($_SESSION['quand']!= 0)
    {
   $name=$_SESSION['itemname'] ;
 if(isset($_POST["payment"]))
{
     
	 header('location:../payment/payment.php');
}
   if(isset($_POST["purchase"]))
{
     header('location:displaycategory.php');
}
if(!isset($_SESSION['email']))
   {
	   header('location:login.php');
	   }
	   else
	   { 
        
	   $sql = "select carid,carname,sum(total) as t from cart where status=1 and  carname='$name'";
$result = $conn->query($sql);
	   $row = $result->fetch_assoc();
	   $total=$row["t"];
       $cart_id = $row["carid"];
       $cart_name = $row["carname"];
       $_SESSION['cartid'] = $cart_id;
       $_SESSION['cartname'] = $cart_name;
	   $_SESSION['amount']=$total; 
	   
	    ?>
       
       
       
 <div class="container_gray_bg" id="home_feat_1">
    <div class="container">
    	<div class="row">
            <div class="col-md-12">
            
            <H1><center> CART DETAILS </center> </H1>
                <table  border="1" class="table" style="margin-top:100px;">
                    <tr>
                        
                        <th>Sl No</th>
                        <th>Item Name</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Total</th>
                       
                        <th>DELETE</th>
                     
                      
                    </tr>
<?php
    
    $actions=array(
    
    
    'delete'=>array('label'=>'Delete','link'=>'deletecart.php','params'=>array('id'=>'carid'),'attributes'=>array('class'=>'btn btn-success'))
    
    );

    $config=array(
        'srno'=>true,
        'hiddenfields'=>array('mid','carid')
        
        
    );

   $condition="carname='".$name."' and status=1";
   
   $join=array(
       
    );  
	$fields=array('carid','carname','quandity','proprice','total');

    $users=$dao->selectAsTable($fields,'cart',$condition,$join,$actions,$config);
    
    echo $users;
        $itid = $_SESSION['mid'];
    $q1="select * from addmobile where mid='$itid'";
    $info121=$dao->query($q1);                          
    ?>

             
                </table>
            </div>    


            <div class="row">
 <div class="col-md-3">
TOTAL AMOUNT:
<input type="text" class="form-control" value="<?php echo $total; ?>" readonly name="total"/>

</div>
<form action="" method="POST" enctype="multipart/form-data">

<a  class="btn btn-success"  style="margin-right: 2px;" href="singleitem.php?id=<?=$info121[0]["mid"]?>">add items</a>
<button class="btn btn-success" type="submit" style="margin-right: 2px;"  name="payment" >Payment</button>

</form>
</div>

            
            
            
        </div><!-- End row -->
    </div><!-- End container -->
    </div><!-- End container_gray_bg -->

<?php }
} 
else
{
   
?>
<!--<script> location.replace("singleitem.php")  </script>!-->
<?php
}
?>