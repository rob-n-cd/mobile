
<!DOCTYPE html>
<html lang="en">
    <?php 
     require('../config/autoload.php'); 
     include("header.php");
include("dbcon.php");
$dao=new DataAccess();
?>
            
            <H1><center> CART  PAGE </center> </H1>
                <table  border="1" class="table" style="margin-top:100px;">
                    <tr>
                        
                        <th>Sl No</th>
                        <th>Item Name</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Total</th>
                        
                        <th>Admin Conformation</th>
                        
                     
                      
                    </tr>
<?php
       //if(isset($_SESSION['admin']))
       //$delivary = "<h style = color:green;>item delivaryed</h>";

       
    /* $q1="select * from payment";
     $info121 = $conn->query($q1);
    while($row = $info121->fetch_assoc())
    {
     $cart = $row["cartid"];*/
    $actions=array('Conform'=>array('label'=>'Conform','link'=>'adminconformation.php','params'=>array('id'=>'carid'),'attributes'=>array('class'=>'btn btn-success')));    
    $config=array(
        'srno'=>true,
        'hiddenfields'=>array('mid','carid')
        
        
    );

   $condition=$condition="status=4";
   
   $join=array(
       
    );  
	$fields=array('carid','carname','quandity','proprice','total');

    $users=$dao->selectAsTable($fields,'cart',$condition,$join,$actions,$config);
    
    echo $users;   
//}
    ?>

             
                </table>
            </div>    


         


</form>
</div>

            
            
            
        </div><!-- End row -->
    </div><!-- End container -->
    </div><!-- End container_gray_bg -->
