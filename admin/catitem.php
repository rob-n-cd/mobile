<?php 

 require('../config/autoload.php'); 
include("header.php");

$file=new FileUpload();
$elements=array("iname"=>"","id"=>"","iprize"=>"");


$form=new FormAssist($elements,$_POST);



$dao=new DataAccess();

$labels=array('iname'=>"Item name",'id'=>"Item id",'iprize'=>"Item prize",'cid'=>"Categoryname");

$rules=array(
    "iname"=>array("required"=>true,"minlength"=>3,"maxlength"=>30,"alphaonly"=>true),
    "id"=>array("required"=>true,"minlength"=>2,"maxlength"=>2,"integeronly"=>true),
     "iprize"=>array("required"=>true,"minlength"=>2,"maxlength"=>30,"integeronly"=>true),
     "cid"=>array("required"=>true,"minlength"=>2,"maxlength"=>30,"integeronly"=>true)
     
);
$validator = new FormValidator($rules,$labels);

if(isset($_POST["insert"]))
{

if($validator->validate($_POST))
{
	


$data=array(

       
        'iname'=>$_POST['iname'],
        'id'=>$_POST['id'],
        'iprize'=>$_POST['iprize'],
        'cid'=>$_POST['cid']
        
         
    );

    print_r($data);
  
    if($dao->insert($data,"item"))
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
    Item name:

<?= $form->textBox('iname',array('class'=>'form-control')); ?>
<?= $validator->error('iname'); ?>

</div>
</div>
<div class="row">
                    <div class="col-md-6">
    Item id:

<?= $form->textBox('id',array('class'=>'form-control')); ?>
<?= $validator->error('id'); ?>

</div>
</div>
<div class="row">
    <div class="col-md-6">
Item prize:
<?= $form->textBox('iprize',array('class'=>'form-control')); ?>
<?= $validator->error('iprize'); ?>
</div>
</div>
<div class="row">
<div class="col-md-6">
Category:

<?php
     $options = $dao->createOptions('cname','cid',"category");
     echo $form->dropDownList('cid',array('class'=>'form-control'),$options); ?>
<?= $validator->error('cid'); ?>

</div>
</div>
<button type="submit" name="insert">Submit</button>
</form>
</body>

</html>


