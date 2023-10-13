<?php 

 require('../config/autoload.php'); 
include("header.php");
$file=new FileUpload();
$elements=array("name"=>"","place"=>"","gender"=>"","address"=>"","contry"=>"",,"phone"=>"",,"pincode"=>"");
$form=new FormAssist($elements,$_POST);

$dao=new DataAccess();

$labels=array('name'=>"Customer name",'place'=>"Customer place","gender"=>"Gender","address"=>"Address","contry"=>"Contry","phone"=>"Phone number","pincode"=>"Pin code","purmobname"=>"Purchased mobile");

$rules=array(
    "name"=>array("required"=>true,"minlength"=>3,"maxlength"=>30,"alphaonly"=>true),
    "place"=>array("required"=>true,"minlength"=>3,"maxlength"=>30,"alphaonly"=>true),
    "gender"=>array("required"=>true,"maxlength"=>30),
    "address"=>array("required"=>true,"maxlength"=>30),
    "contry"=>array("required"=>true,"maxlength"=>30),
    "phone"=>array("required"=>true,"maxlength"=>30),
    "pincode"=>array("required"=>true,"maxlength"=>30),
    "purmobname"=>array("required"=>true,"maxlength"=>30),
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


