<?php 

 require('../config/autoload.php'); 
include("header.php");

$file=new FileUpload();
$elements=array( "mname"=>"","mprize"=>"","msoft"=>"","mimg"=>"","cid"=>"","cid11"=>"");


$form=new FormAssist($elements,$_POST);



$dao=new DataAccess();

$labels=array('mname'=>"Mobile name",'mprice'=>"Mobile price",'msoft'=>"Mobile software","mimg"=>"Mobile image","cid"=>"Category","cid11"=>"Company");

$rules=array(
    "mname"=>array("required"=>true),
    "mprize"=>array("required"=>true,"minlength"=>2,"maxlength"=>30,"integeronly"=>true),
    "msoft"=>array("required"=>true,"minlength"=>3,"maxlength"=>30,"alphaonly"=>true),
    "mimg"=>array("filerequired"=>true),
    "cid"=>array("required"=>true),
    "cid11"=>array("required"=>true), 
     
);
    
    
$validator = new FormValidator($rules,$labels);

if(isset($_POST["insert"]))
{

if($validator->validate($_POST))
{
	
    if($fileName=$file->doUploadRandom($_FILES['mimg'],array('.jpg','.png','.JPEG','.jfif','.JFIF'),100000,1,'../upload'))	
    {

$data=array(

       
        'mname'=>$_POST['mname'],
        'mprize'=>$_POST['mprize'],
        'msoft'=>$_POST['msoft'],
        'mimg'=>$fileName,
        'ctid'=>$_POST['cid'],
        'cmid'=>$_POST['cid11'],
         
    );

    print_r($data);
  
    if($dao->insert($data,"addmobile"))
    {
        echo "<script> alert('New record created successfully');</script> ";

    }
    else
        {$msg="Registration failed";} ?>


<?php
    
}
else
echo $file->errors();
}

}


?>
<html>
<head>
</head>
<body>

 <form action="" method="POST" enctype="multipart/form-data">

<div class="row">
                    <div class="col-md-6">
Mobile name:

<?= $form->textBox('mname',array('class'=>'form-control')); ?>
<?= $validator->error('mname'); ?>

</div>
</div>
<div class="row">
                    <div class="col-md-6">
Mobile prize:

<?= $form->textBox('mprize',array('class'=>'form-control')); ?>
<?= $validator->error('mprize'); ?>

</div>
</div>
<div class="row">
                    <div class="col-md-6">

Mobile sotware:
<?= $form->textBox('msoft',array('class'=>'form-control')); ?>
<?= $validator->error('msoft'); ?>

</div>
</div>
<div class="row">
                    <div class="col-md-6">
Mobile image:

<?= $form->fileField('mimg',array('class'=>'form-control')); ?>
<span style="color:red;"><?= $validator->error('mimg'); ?></span>

</div>
</div>
<div class="row">
                    <div class="col-md-6">


Category :

<?php
     $options = $dao->createOptions('category','cid',"category");
     echo $form->dropDownList('cid',array('class'=>'form-control'),$options); ?>
<?= $validator->error('cid'); ?>

</div>
</div>

<div class="row">
                    <div class="col-md-6">


Company :

<?php
     $options = $dao->createOptions('cname','cid',"company");
     echo $form->dropDownList('cid11',array('class'=>'form-control'),$options); ?>
<?= $validator->error('cid11'); ?>

</div>
</div>

<button type="submit" name="insert">Submit</button>
</form>


</body>

</html>


