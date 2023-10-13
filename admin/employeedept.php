<?php 

 require('../config/autoload.php'); 
include("header.php");

$file=new FileUpload();
$elements=array("ename"=>"","eage"=>"","did"=>"");


$form=new FormAssist($elements,$_POST);



$dao=new DataAccess();

$labels=array('ename'=>"Employee name",'eage'=>"Employee age",'did'=>"Departmentname");

$rules=array(
    "ename"=>array("required"=>true,"minlength"=>3,"maxlength"=>40,"alphaspaceonly"=>true),
    "eage"=>array("required"=>true,"minlength"=>2,"maxlength"=>2,"integeronly"=>true),
    "did"=>array("required"=>true)
     
);
    
    
$validator = new FormValidator($rules,$labels);

if(isset($_POST["insert"]))
{

if($validator->validate($_POST))
{
	


$data=array(

       
        'ename'=>$_POST['ename'],
        'eage'=>$_POST['eage'],
        'did'=>$_POST['did']
        
         
    );

    print_r($data);
  
    if($dao->insert($data,"empolyee"))
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
Employee name:

<?= $form->textBox('ename',array('class'=>'form-control')); ?>
<?= $validator->error('ename'); ?>

</div>
</div>
<div class="row">
                    <div class="col-md-6">
Employee Age:

<?= $form->textBox('eage',array('class'=>'form-control')); ?>
<?= $validator->error('eage'); ?>

</div>
</div>

<div class="row">
                    <div class="col-md-6">
Department:

<?php
     $options = $dao->createOptions('dname','did',"dept");
     echo $form->dropDownList('did',array('class'=>'form-control'),$options); ?>
<?= $validator->error('did'); ?>

</div>
</div>

<button type="submit" name="insert">Submit</button>
</form>


</body>

</html>


