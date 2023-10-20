<?php 

 include("header2.php");

include("dbcon.php");
$id=$_GET['id'];
?>



<div class="container_gray_bg" id="home_feat_1">
    <div class="container">
    	<div class="row">
            <div class="col-md-12">
            
            <H1><center> DETAILS </center> </H1>
                <table  border="1" class="table" style="margin-top:100px;">
                    <tr>
                        
                        <th>Sl No</th>
                        <th>Item Name</th>
                        <th>Book Date</th>
                        <th>Ship Date</th>
                        <th>Delivery Date</th>
                       
                        <th>Return Date</th>
                     
                      
                    </tr>
<?php
    
    $actions=array(
    
    
    //'delete'=>array('label'=>'Delete','link'=>'delete.php','params'=>array('id'=>'cart_id'),'attributes'=>array('class'=>'btn btn-success'))
    
    );

    $config=array(
        'srno'=>true,
        'hiddenfields'=>array('iid','cart_id')
        
        
    );

   $condition="cart_id=".$id;
   
   $join=array(
       
    );  
	$fields=array('cart_id','iid','iname','book_date','ship_date','deliv_date','return_date');

    $users=$dao->selectAsTable($fields,'cart as c',$condition,$join,$actions,$config);
    
    echo $users;
                                     
    ?>
     </table>
            </div>    
