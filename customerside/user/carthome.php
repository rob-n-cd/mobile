
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
  if(isset($_POST["purchase"]))
{
    header('location:headercat.php');
}
?>
       
       
       
 <div class="container_gray_bg" id="home_feat_1">
    <div class="container">
    	<div class="row">
            <div class="col-md-12">
            
            <H1><center> CART  PAGE </center> </H1>
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
     $q1="select * from payment where cartid = ".$_SESSION['cart_id'];
     $info121=$dao->query($q1);
     $cart = $info121[0]["cartid"];
     echo $cart;
         if($cart == $_SESSION['cartid'])
         {
    
    $actions=array('delete'=>array('label'=>'Delete','link'=>'deletecart1.php','params'=>array('id'=>'carid'),'attributes'=>array('class'=>'btn btn-success')));


    $config=array(
        'srno'=>true,
        'hiddenfields'=>array('mid','carid')
        
        
    );

   $condition="status=1";
   
   $join=array(
       
    );  
	$fields=array('carid','carname','quandity','proprice','total');

    $users=$dao->selectAsTable($fields,'cart',$condition,$join,$actions,$config);
    
    echo $users;
}            
    ?>

             
                </table>
            </div>    


         
<form action="" method="POST" enctype="multipart/form-data">

<button class="btn btn-success" type="submit"  name="purchase" >New Item Purchase</button>


</form>
</div>

            
            
            
        </div><!-- End row -->
    </div><!-- End container -->
    </div><!-- End container_gray_bg -->
