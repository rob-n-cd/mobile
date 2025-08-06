<?php 

 require('../config/autoload.php'); 
include("header.php");

$file=new FileUpload();
$elements=array("category"=>"","catimg"=>"");

$form=new FormAssist($elements,$_POST);



$dao=new DataAccess();

$labels=array('category'=>"Category Name",'catimg'=>"Category image");

$rules=array(
    "category"=>array("required"=>true,"maxlength"=>30),
    "catimg"=>array("filerequired"=>true),

);
    
    
$validator = new FormValidator($rules,$labels);

if(isset($_POST["btn_insert"]))
{

if($validator->validate($_POST))
{
	

    if($fileName=$file->doUploadRandom($_FILES['catimg'],array('.jpg','.png','.JPEG','.jfif','.JFIF'),100000,1,'../upload'))	
    {
$data=array(

        'category'=>$_POST['category'],
        'catimg'=>$fileName
         
    );
  
    if($dao->insert($data,"category"))
    {
        echo "<script> alert('New record created successfully');</script> ";
header('location:category1.php');


    }
    else
        {$msg="Registration failed";} ?>

<span style="color:red;"><?php echo $msg; ?></span>

<?php
    }


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
Category name:

<?= $form->textBox('category',array('class'=>'form-control')); ?>
<?= $validator->error('category'); ?>

</div>
</div>

<div class="row">
                    <div class="col-md-6">
Category image:

<?= $form->fileField('catimg',array('class'=>'form-control')); ?>
<span style="color:red;"><?= $validator->error('catimg'); ?></span>

</div>
</div>

<button type="submit" name="btn_insert"  >Submit</button>
</form>


</body>

</html>


