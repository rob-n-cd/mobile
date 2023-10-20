<?php 

 //r equire('../config/autoload.php'); 
include("header2.php");

$file=new FileUpload();
$dao=new DataAccess();
$q="SELECT *from customer where cstemail='".$_SESSION['email']."'";
//$info=$dao->getData('*','customer','cstemail='.$_SESSION['email']);
$info=$dao->query($q);




$elements=array(
        "cstname"=>$info[0]['cstname'],"cstphone"=>$info[0]['cstphone']);


$form=new FormAssist($elements,$_POST);


$labels=array('cstname'=>"Customer Name",'cstphone'=>"Customer Phone");

$rules=array(
    "cstname"=>array("required"=>true,"minlength"=>3,"maxlength"=>30,"alphaonly"=>true),
   
    "cstphone"=>array("required"=>true,"maxlength"=>10,"integeronly"=>true),
    
    
);
    
    
    
    
$validator = new FormValidator($rules,$labels);

if(isset($_POST["btn_insert"]))
{


    

$data=array(

        'cstname'=>$_POST['cstname'],
       
        'cstphone'=>$_POST['cstphone'],
        

    );
   
  //print_r($data);
    $condition='rid='.$_SESSION['id'];
    
//echo $condition;
    if($dao->update($data,'customer',$condition))
    {
        echo "<script> alert('Profile Updated successfully');</script> ";
///header('location:profile.php');
echo "<script>document.location='profile.php' </script>";
    }
    else
        {echo "<script> alert('Profile Updation Failed');</script> ";} ?>

<span style="color:red;"></span>

<?php
    


}


?>
<html>
<head>
</head>
<body>

 <form action="" method="POST" enctype="multipart/form-data">
 
 
<div class="row">
                    <div class="col-md-6">
 Name:

<?= $form->textBox('cstname',array('class'=>'form-control')); ?>
<?= $validator->error('cstname'); ?>

</div>
</div>

<div class="row">
                    <div class="col-md-6">
Phone No:

<?= $form->textBox('cstphone',array('class'=>'form-control')); ?>
<?= $validator->error('cstphone'); ?>

</div>
</div>





<button type="submit" name="btn_insert"  >UPDATE</button>
</form>


</body>

</html>


