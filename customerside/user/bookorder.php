
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

<?php
 if(isset($_POST["done"]))
 {
  
 require('../config/autoload.php'); 
include("dbcon.php");
?>

<?php
$dao=new DataAccess();

?>
       
       

 <div class="container_gray_bg" id="home_feat_1">
    <div class="container">
    	<div class="row">
            <div class="col-md-12">
            
            <H1><center> BooKing Date Order PAGE </center> </H1>
                <table  border="1" class="table" style="margin-top:100px;">
                    <tr>
                        
                        <th>Sl No</th>
                        <th>Customer Name</th>
                        <th>Address</th>
                        <th>Place</th>
                        <th>Item Name</th>
                       <th>Item Price</th>
                       <th>Date</th>
                        <th>DELETE</th>
                     
                      
                    </tr>
<?php
    
    $actions=array(
    
    
    'delete'=>array('label'=>'Delete','link'=>'deletebookcart.php','params'=>array('id'=>'bid'),'attributes'=>array('class'=>'btn btn-success'))
    
    );

    $config=array(
        'srno'=>true,
        'hiddenfields'=>array('mid','bid')
        
        
    );
    if($_POST['date'] == 0)
    echo "no records are avilable";
    else
    {
    $date = $_POST['date'];
    $condition="status=1 and date='$date'";
   
   $join=array(
       
    );  
	$fields=array('bid','bname','baddress','bplace','bproduct','bprice','date');

    $users=$dao->selectAsTable($fields,'booking',$condition,$join,$actions,$config);
    
    echo $users;
}                     
    ?>

             
                </table>
            </div>    


         
<form action=" bookorder.php" method="POST" enctype="multipart/form-data">    
<input class="btn btn-success" type="text"  name="date" placeholder="Enter the Date" >
<button class="btn btn-success" type="submit"  name="done" >Done</button>
<a href= "/mobile/admin3/mobiles.php">BACK</a>

</form>
</div>

            
            
<?php } 

//header('location:viewbookcust.php');?>          
        </div><!-- End row -->
    </div><!-- End container -->
    </div><!-- End container_gray_bg -->
