
<?php require('../config/autoload.php'); 
include("dbcon.php");
?>

<?php
$dao=new DataAccess();
   $name=$_SESSION['itemname'] ;
 if(isset($_POST["payment"]))
{
     echo "hai";
	 header('location:payment.php');
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
        
	   $sql = "select total from cart where status=1 and  carname='$name'";
$result = $conn->query($sql);
	   $row = $result->fetch_assoc();
	   $total=$row["total"];
	   
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
    
    
    'delete'=>array('label'=>'Delete','link'=>'deleteitem.php','params'=>array('id'=>'carid'),'attributes'=>array('class'=>'btn btn-success'))
    
    );

    $config=array(
        'srno'=>true,
        'hiddenfields'=>array('mid','carid')
        
        
    );

   $condition="carname='".$name."' and status=1";
   
   $join=array(
       
    );  
	$fields=array('carid','quandity','proprice','status','total');

    $users=$dao->selectAsTable($fields,'cart',$condition,$join,$actions,$config);
    
    echo $users;
                                     
    ?>

             
                </table>
            </div>    


            <div class="row">
 <div class="col-md-3">
TOTAL AMOUNT:
<input type="text" class="form-control" value="<?php echo $total; ?>" readonly name="total"/>

</div>
<form action="" method="POST" enctype="multipart/form-data">

<button class="btn btn-success" type="submit"  name="purchase" >New Item Purchase</button>
<button class="btn btn-success" type="submit" style="margin-right: 2px;"  name="payment" >Payment</button>

</form>
</div>

            
            
            
        </div><!-- End row -->
    </div><!-- End container -->
    </div><!-- End container_gray_bg -->

<?php } ?>