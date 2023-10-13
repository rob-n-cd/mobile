<?php 

 require('../config/autoload.php'); 
include("header.php");

$file=new FileUpload();
$elements=array("dname"=>"");


$form=new FormAssist($elements,$_POST);



$dao=new DataAccess();

$labels=array('dname'=>"Department name");

$rules=array(
    "dname"=>array("required"=>true,"minlength"=>3,"maxlength"=>30,"alphaonly"=>true),
     
);
    
    
$validator = new FormValidator($rules,$labels);

if(isset($_POST["insert"]))
{

if($validator->validate($_POST))
{
	


$data=array(

       
        'dname'=>$_POST['dname'],
        
         
    );

    print_r($data);
  
    if($dao->insert($data,"dept"))
    {
        echo "<script> alert('New record created successfully');</script> ";

    }
    else
        {$msg="!<u>Registration failed</u>!  try again";} ?>

<span style="color:red;"><?php echo $msg; ?></span>

<?php
    
}
else
echo $file->errors();
}




?>
<html>
<head>
</head>
<body>

 <form action="" method="POST" enctype="multipart/form-data">

<div class="row">
                    <div class="col-md-6">
Department name:

<?= $form->textBox('dname',array('class'=>'form-control')); ?>
<?= $validator->error('dname'); ?>

</div>
</div>
<div class="row">
                    <div class="col-md-6">

<button type="submit" name="insert">Submit</button>
</form>


</body>

</html>


