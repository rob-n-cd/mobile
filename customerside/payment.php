<?php 

 require('../config/autoload.php'); 

$file=new FileUpload();
$elements=array( "cardname"=>"","cardnumber"=>"","hname"=>"","pprice"=>"");


$form=new FormAssist($elements,$_POST);

$dao=new DataAccess();

$labels=array('cardname'=>"Card name",'cardnumber'=>"Card Number",'hname'=>"Holder Name",'pprice'=>"Mobile Price");

$rules=array(
    "cardname"=>array("required"=>true,"minlength"=>3,"maxlength"=>30,"alphaonly"=>true),
    "cardnumber"=>array("required"=>true,"minlength"=>2,"maxlength"=>30,"alphaonly"=>true),
    "hname"=>array("required"=>true,"minlength"=>3,"maxlength"=>30,"alphaonly"=>true),
    "pprice"=>array("required"=>true,"minlength"=>2,"maxlength"=>30,"alphaonly"=>true)
    
     
);
    
    
$validator = new FormValidator($rules,$labels);

if(isset($_POST["insert"]))
{

if($validator->validate($_POST))
{
	
    if($fileName=$file->doUploadRandom($_FILES['cimg'],array('.jpg','.png','.JPEG','.jfif','.JFIF'),100000,1,'../upload'))	
    {

$data=array(

       
        'cardname'=>$_POST['cardname'],
        'cardnumber'=>$_POST['cardnumber'],
        'hname'=>$_POST['hname'],
        'pprice'=>$_POST['pprice']
        
        
         
    );

    print_r($data);
  
    if($dao->insert($data,"payment"))
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
Card name:

<?= $form->textBox('cardname',array('class'=>'form-control')); ?>
<?= $validator->error('cardname'); ?>

</div>
</div>
<div class="row">
                    <div class="col-md-6">
Card Number:

<?= $form->textBox('cardnumber',array('class'=>'form-control')); ?>
<?= $validator->error('cardnumber'); ?>

</div>
</div>
<div class="row">
                    <div class="col-md-6">
Holder Name:
<?= $form->textBox('cardnumber',array('class'=>'form-control')); ?>
<?= $validator->error('cardnumber'); ?>


</div>
</div>
<div class="row">
                    <div class="col-md-6">
Mobile Price:

<?= $form->textBox('pprice',array('class'=>'form-control')); ?>
<?= $validator->error('pprice'); ?>

</div>
</div>
<button type="submit" name="insert">Submit</button>
</form>


</body>

</html>


