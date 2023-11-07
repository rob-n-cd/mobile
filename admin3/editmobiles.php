<?php require('../config/autoload.php'); ?>
<?php
	

include("header.php");
$dao=new DataAccess();
$info=$dao->getData('*','addmobile','mid='.$_GET['id']);
$file=new FileUpload();
$elements=array("mname"=>$info[0]['mname'],"mprize"=>$info[0]['mprize'],"msoft"=>$info[0]['msoft'],"mimg"=>$info[0]['mimg']);

	$form = new FormAssist($elements,$_POST);

$labels=array('mname'=>"Mobile Name","mprize"=>"Mobile price","mimg"=>"Mobile image");

    $rules=array(
        "mname"=>array("required"=>true,"minlength"=>3,"maxlength"=>30,"alphaonly"=>true),
        "mprize"=>array("required"=>true,"minlength"=>3,"maxlength"=>20,"integeronly"=>true),
        "mimg"=>array("filerequired"=>true)
);
    
    
$validator = new FormValidator($rules,$labels);
$flag = false;
if(isset($_POST["btn_update"]))
{
if($validator->validate($_POST))
{

if(isset($_FILES['mimg']['name'])){
			if($fileName=$file->doUploadRandom($_FILES['mimg'],array('.jpg','.png','.jpeg','jfif',),100000,5,'../upload'))
			{
				$flag=true;
					
			}
}
$data=array(
        'mname'=>$_POST['mname'],
        'mprize'=>$_POST['mprize'],
        'mimg'=>$fileName,
    );
  $condition='mid='.$_GET['id'];
if($flag)
			{	
                $data['mimg']=$fileName;
			}
    

if($dao->update($data,'addmobile',$condition))
    {
        $msg="Successfullly Updated";

    }
    else
        {$msg="Failed";} ?>

<span style="color:red;"><?php echo $msg; ?></span>

<?php
    
}


}


	
	
	
	
?>

<html>
<head>
	<style>
		.form{
		border:3px solid blue;
		}
	</style>
</head>
<body>


	<form action="" method="POST" enctype="multipart/form-data" >
 
<div class="row">
                    <div class="col-md-6">
Company Name:

<?= $form->textBox('mname',array('class'=>'form-control')); ?>
<?= $validator->error('mname'); ?>

</div>
</div>

<div class="row">
                    <div class="col-md-6">
Company place:

<?= $form->textBox('mprize',array('class'=>'form-control')); ?>
<?= $validator->error('mprize'); ?>

</div>
</div>


<div class="row">
                    <div class="col-md-6">

Company iMAGE:


<?= $form->fileField('mimg',array('class'=>'form-control')); ?>
<span style="color:red;"><?= $validator->error('mimg'); ?></span>
</div>
</div>





<button type="submit" name="btn_update"  >UPDATE</button>
</form>

</body>
</html>