<?php 

 require('../config/autoload.php'); 

$file=new FileUpload();
$elements=array( "bname"=>"","baddress"=>"","bplace"=>"","bproduct"=>"","bprice"=>"");


$form=new FormAssist($elements,$_POST);

$dao=new DataAccess();

$labels=array('bname'=>"Enter youer name",'baddress'=>"Address",'bplace'=>"Place",'bproduct'=>'Product name','bprice'=>"Mobile Price");

$rules=array(
    "bname"=>array("required"=>true,"minlength"=>3,"maxlength"=>30,"alphaonly"=>true),
    "baddress"=>array("required"=>true,"minlength"=>3 ,"maxlength"=>30,"alphaonly"=>true),
    "bplace"=>array("required"=>true,"minlength"=>3,"maxlength"=>30,"alphaonly"=>true),
    "bproduct"=>array("required"=>true,"minlength"=>3,"maxlength"=>30,"alphaonly"=>true),
    "bprice"=>array("required"=>true,"minlength"=>2,"maxlength"=>30,"integeronly"=>true)
    
     
);
    
    
$validator = new FormValidator($rules,$labels);

if(isset($_POST["insert"]))
{

if($validator->validate($_POST))
{
	
  

$data=array(

       
        'bname'=>$_POST['bname'],
        'baddress'=>$_POST['baddress'],
        'bplace'=>$_POST['bplace'],
        'bproduct'=>$_POST['bproduct'],
        'bprice'=>$_POST['bprice']
        
        
         
    );


  
    if($dao->insert($data,"booking"))
    {
        echo "<script> alert('New record created successfully');</script> ";
        header('location:../user/headercat.php');

    }
    else
        {$msg="Registration failed";} ?>


<?php
    
}
else
echo $file->errors();
}



?>
<html>
<meta charset="UTF-8">
  <title>Document</title>
  <head>
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
  <link rel="stylesheet" href="../payment/stylebook.css">
<meta name="robots" content="noindex,follow" />
</head>
<body>
	
  <div class="checkout-panel">
    <div class="panel-body">
      <h2 class="title">booking</h2>

      <div class="progress-bar">
        <div class="step active"></div>
        <div class="step active"></div>
        <div class="step active"></div>
        <div class="step"></div>
      </div>

     

<body>

 <form action="booking.php" method="POST" enctype="multipart/form-data">

<div class="row">
                    <div class="col-md-6">
Enter youer name:

<?= $form->textBox('bname',array('class'=>'form-control')); ?>
<?= $validator->error('bname'); ?>

</div>
</div><br>
<div class="row">
                    <div class="col-md-6">
Address:

<?= $form->textBox('baddress',array('class'=>'form-control')); ?>
<?= $validator->error('baddress'); ?>

</div>
</div><br>
<div class="row">
                    <div class="col-md-6">
Place:
<?= $form->textBox('bplace',array('class'=>'form-control')); ?>
<?= $validator->error('bplace'); ?>


</div>
</div><br>
<div class="row">
                    <div class="col-md-6">



Product name:
<?php   
       $mname =  $_SESSION['name'];
   ?>
<input type="text" name="bproduct" value=<?php echo$mname?>>

</div>
</div><br>
<div class="row">
                    <div class="col-md-6">


Product price:

   <?php   
       $mprice =  $_SESSION['amount'];
   ?>

<input type="text" name="bprice" value=<?php echo$mprice?>>
</div>
</div><br>
<button type="submit" name="insert">Submit</button>
</form>


</body>

</html>


