<?php 

 require('../config/autoload.php'); 

$file=new FileUpload();
$elements=array("oname"=>"","quandity"=>"","total"=>"","proprice"=>"");

$form=new FormAssist($elements,$_POST);



$dao=new DataAccess();

$labels=array('oname'=>"Prodect name",'quandity'=>"Quandity","total"=>"Total","proprice"=>"Product price");

$rules=array(
    "oname"=>array("required"=>true,"minlength"=>3,"maxlength"=>40,"alphaspaceonly"=>true),
    "quandity"=>array("required"=>true,"minlength"=>1,"maxlength"=>5,"integeronly"=>true),
    "total"=>array("required"=>true,"minlength"=>2,"maxlength"=>20,"integeronly"=>true),
    "proprice"=>array("required"=>true,"minlength"=>2,"maxlength"=>20,"integeronly"=>true)
);
    
    
$validator = new FormValidator($rules,$labels);

if(isset($_POST["insert"]))
{

if($validator->validate($_POST))
{
	


$data=array(

       
        'oname'=>$_POST['oname'],
        'quandity'=>$_POST['quandity'],
        'total'=>$_POST['total'],
        "proprice"=>$_POST['proprice']
        
    );

    print_r($data);
  $msg = null;
    if($dao->insert($data,"oder"))
    {
        echo "<script> alert('New record created successfully');</script> ";
            header('location:payment.php');
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
Prodect name:

<?= $form->textBox('oname',array('class'=>'form-control')); ?>
<?= $validator->error('oname'); ?>

</div>
</div>
<div class="row">
                    <div class="col-md-6">
Quandity:

<?= $form->textBox('quandity',array('class'=>'form-control')); ?>
<?= $validator->error('quandity'); ?>

</div>
</div>

<div class="row">
                    <div class="col-md-6">


Prodect price:

<?= $form->textBox('proprice',array('class'=>'form-control')); ?>
<?= $validator->error('proprice');?>

</div>
</div>

Total cost:

<?= $form->textBox('total',array('class'=>'form-control')); ?>
<?= $validator->error('total'); ?>


<button type="submit" name="insert">Submit</button>
</form>


</body>

</html>


