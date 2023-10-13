
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
                        
                        <th>Company Id</th>
                        <th>Company name</th>
                        <th>Company place</th>
                        <th>Company image</th>
                        <th>EDIT/DELETE</th>
                     
                      
                    </tr>
<?php
    
    $actions=array(
    'edit'=>array('label'=>'Edit','link'=>'editcompany.php','params'=>array('id'=>'cid'),'attributes'=>array('class'=>'btn btn-success')),
    
    'delete'=>array('label'=>'Delete','link'=>'editspecilization.php','params'=>array('id'=>'cid'),'attributes'=>array('class'=>'btn btn-success'))
    
    );

    $config=array(
        'srno'=>true,
        'hiddenfields'=>array('cid'),
        'actions_td'=>false,
        'images'=>array(
            'field'=>'cimg',
            'path'=>'../upload/',
            'attributes'=>array('style'=>'width:100px;'))
        
    );

   
   $join=array(
        
    );
     $fields=array('cid','cname','cplace','cimg');

    $users=$dao->selectAsTable($fields,'company',1,null,$actions,$config);
    
    echo $users;
                    
                    
                   
    
?>
             
                </table>
            </div>    

            
            
            
            
        </div><!-- End row -->
    </div><!-- End container -->
    </div><!-- End container_gray_bg -->
    
    
