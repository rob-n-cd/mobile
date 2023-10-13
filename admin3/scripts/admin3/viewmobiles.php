<?php require('../config/autoload.php'); ?>

<?php
$dao=new DataAccess();



?>
<?php 
include('header.php'); ?>

    
    <div class="container_gray_bg" id="home_feat_1">
    <div class="container">
    	<div class="row">
            <div class="col-md-12">
                <table  border="1" class="table" style="margin-top:100px;">
                    <tr>
                        
                        <th>Mobile Id</th>
                        <th>Mobile name</th>
                        <th>Mobile prize</th>
                        <th>Mobile software</th>
                        <th>Mobile image</th>
                        <th>EDIT/DELETE</th>
                     
                      
                    </tr>
<?php
    
    $actions=array(
    'edit'=>array('label'=>'Edit','link'=>'editspecilization.php','params'=>array('id'=>'mid'),'attributes'=>array('class'=>'btn btn-success')),
    
    'delete'=>array('label'=>'Delete','link'=>'deletemobile.php','params'=>array('id'=>'mid'),'attributes'=>array('class'=>'btn btn-success'))
    
    );

    $config=array(
        'srno'=>true,
        'hiddenfields'=>array('mid'),
        'actions_td'=>false,
        'images'=>array(
            'field'=>'mimg',
            'path'=>'../upload/',
            'attributes'=>array('style'=>'width:100px;'))
        
    );

   
   $join=array(
        
    );
     $fields=array('mid','mname','mprize','msoft','mimg');

    $users=$dao->selectAsTable($fields,'addmobile',"status=1",null,$actions,$config);
    
    echo $users;
                    
                    
                   
    
?>
             
                </table>
            </div>    

            
            
            
            
        </div><!-- End row -->
    </div><!-- End container -->
    </div><!-- End container_gray_bg -->
    
    
