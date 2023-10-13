<?php require('../config/autoload.php'); ?>
<?php
	

include("header.php");
$dao=new DataAccess();
$info=$dao->getData('*','company','cid='.$_GET['id']);
$file=new FileUpload();
$elements=array(
        "cname"=>$info[0]['cname'],"cplace"=>$info[0]['cplace'],"cimg"=>$info[0]['cimg']);

	$form = new FormAssist($elements,$_POST);

$labels=array('cname'=>"Company Name","cplace"=>"Company place","cimg"=>"Company image");

    $rules=array(
        "cname"=>array("required"=>true,"minlength"=>3,"maxlength"=>30,"alphaonly"=>true),
        "cplace"=>array("required"=>true,"minlength"=>2,"maxlength"=>2,"alphaonly"=>true),
        "cimg"=>array("filerequired"=>true)
);
    
    
$validator = new FormValidator($rules,$labels);

if(isset($_POST["btn_update"]))
{
if($validator->validate($_POST))
{

if(isset($_FILES['cimg']['name'])){
			if($fileName=$file->doUploadRandom($_FILES['cimg'],array('.jpg','.png','.jpeg','jfif',),100000,5,'../upload'))
			{
				$flag=true;
					
			}
}
$data=array(

        'cname'=>$_POST['cname'],
        'cplace'=>$_POST['cplace'],
        'cimg'=>$fileName,
    );
  $condition='cid='.$_GET['id'];
if(isset($flag))
			{	$data['cimg']=$fileName;
		
			}
    

if($dao->update($data,'company',$condition))
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

Company iMAGE:


<?= $form->fileField('cimg',array('class'=>'form-control')); ?>

</div>
</div>





<button type="submit" name="btn_update"  >UPDATE</button>
</form>

</body>
</html>