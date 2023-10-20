<?php 
 
 include("header2.php");

include("dbcon.php");
?>

<?php


   $name=$_SESSION['email'] ;
   

			
	   
	
	   $sql = "select * from cart where status1=4 and  email='$name'";
$result = $conn->query($sql);
	   $row = $result->fetch_assoc();
	   
	    ?>
       
       
       
       &nbsp
<div class="container-fluid bg-secondary py-5">
        <div class="container py-5">
            <div class="row align-items-center py-4">
                <div class="col-md-6 text-center text-md-left">
                    <h1 class="mb-4 mb-md-0 text-primary text-uppercase">Return Product</h1>
                </div>
                <div class="col-md-6 text-center text-md-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="btn btn-outline-primary" href="index.php">Home</a>
                        <i class="fas fa-angle-double-right text-primary mx-2"></i>
                        <a class="btn btn-outline-primary disabled" href="">profile</a>
                        <i class="fas fa-angle-double-right text-primary mx-2"></i>
                        <a class="btn btn-outline-primary disabled" href="">Return</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php
$q="SELECT * FROM cart where email='".$name."' and status1=4";
       //$n=$conn->query($q);
      // $q="SELECT * FROM cart where  status1=2";
       $n=$dao->query($q);
//$n=$conn->query($q);
//$count1=0;
       //$count1=count($n);
       //echo "<script> alert($count1);</script> ";

       if(empty($n))
       {
       echo "<script> alert('No Items To Available To Return');</script> ";
       
       }
       
       else
       {
       ?>



 <div class="container_gray_bg" id="home_feat_1">
    <div class="container">
    	<div class="row">
            <div class="col-md-12">
            &nbsp
            
            
                <table  border="1" class="table" style="margin-top:100px;">
                    <tr>
                        
                        <th>Sl No</th>
                        <th>Item Name</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Total</th>
                       
                        <th>RETURN</th>
                     
                      
                    </tr>
<?php
    
    $actions=array(
    
    
    'return'=>array('label'=>'Return','link'=>'return.php','params'=>array('id'=>'cart_id'),'attributes'=>array('class'=>'btn btn-success'))
    
    );

    $config=array(
        'srno'=>true,
        'hiddenfields'=>array('iid','cart_id')
        
        
    );

   $condition="email='".$name."' and status1=4";
   
   $join=array(
       
    );  
	$fields=array('cart_id','iid','iname','quantity','price','total');

    $users=$dao->selectAsTable($fields,'cart as c',$condition,$join,$actions,$config);
    
    echo $users;
                                     
    ?>

             
                </table>
            </div>    



            
            
            
        </div><!-- End row -->
    </div><!-- End container -->
    </div><!-- End container_gray_bg -->

<?php } ?>