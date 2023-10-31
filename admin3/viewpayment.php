<?php require('../config/autoload.php'); ?>

<?php
$dao=new DataAccess();



?>
<?php include('header.php'); ?>

    
    <div class="container_gray_bg" id="home_feat_1">
    <div class="container">
    	<div class="row">
            <div class="col-md-12">
                <table  border="1" class="table" style="margin-top:100px;">
                    <tr>
                        
                        <th>Register id</th>
                        <th>Customer name</th>
                        <th>Customer Address</th>
                        <th>Email id</th>
                     
                      
                    </tr>
<?php
    
   
   

   
   $join=array(
        
    );
     $fields=array('rid','name','address','email');

    $users=$dao->selectAsTable($fields,'register',1,$join);
    
    echo $users;
                    
                    
                   
    
?>
             
                </table>
            </div>    

            
            
            
            
        </div><!-- End row -->
    </div><!-- End container -->
    </div><!-- End container_gray_bg -->
    
    
