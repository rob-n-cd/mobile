<?php 

 require('../config/autoload.php'); 
include("header.php");
$file=new FileUpload();
$elements=array("cname"=>"","cplace"=>"");
$form=new FormAssist($elements,$_POST);

$dao=new DataAccess();

$labels=array('cname'=>"Company name",'cplace'=>"Company place");

$rules=array(
    "cname"=>array("required"=>true,"minlength"=>3,"maxlength"=>30,"alphaonly"=>true),
    "cplace"=>array("required"=>true,"minlength"=>3,"maxlength"=>30,"alphaonly"=>true)
);
    
    
$validator = new FormValidator($rules,$labels);

if(isset($_POST["insert"]))
{

if($validator->validate($_POST))
{
	


$data=array(

       
        'cname'=>$_POST['cname'],
        'cplace'=>$_POST['cplace'],
    );

    print_r($data);
  
    if($dao->insert($data,"company"))
    {
        echo "<script> alert('New record created successfully');</script> ";

    }
    else
        {$msg="Registration failed";} ?>

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
    Company name:

<?= $form->textBox('cname',array('class'=>'form-control')); ?>
<?= $validator->error('cname'); ?>

</div>
</div>
<div class="row">
                    <div class="col-md-6">
 Company place:

<?= $form->textBox('cplace',array('class'=>'form-control')); ?>
<?= $validator->error('cplace'); ?>

</div>
</div>
<div class="row">
                    <div class="col-md-6">

<br><br><button type="submit" name="insert">Submit</button>
</form>


</body>

</html>


