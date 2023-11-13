<?php 

 require('../config/autoload.php'); 

$file=new FileUpload();
$elements=array( "bname"=>"","baddress"=>"","bplace"=>"");


$form=new FormAssist($elements,$_POST);

$dao=new DataAccess();
include("dbcon.php");


$email=$_SESSION['email'];
$q2="select * from register where email='$email'";
$info1=$dao->query($q2);


$labels=array('bname'=>"Enter youer name",'baddress'=>"Address",'bplace'=>"Place");

$rules=array(
    "bname"=>array("required"=>true,"minlength"=>3,"maxlength"=>30,"alphaonly"=>true),
    "baddress"=>array("required"=>true,"minlength"=>3 ,"maxlength"=>30,"alphaonly"=>true),
    "bplace"=>array("required"=>true,"minlength"=>3,"maxlength"=>30,"alphaonly"=>true),
    
     
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
        'bprice'=>$_POST['bprice'],
        'date'=>$_POST['bdate']

        
        
         
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
        <div class="step "></div>
        <div class="step"></div>
      </div>

     

<body>

 <form action="booking.php" method="POST" enctype="multipart/form-data">

<div class="row">
                    <div class="col-md-6">
Enter youer name:

<input type="text" name="bname" value=<?php echo$info1[0]['name']?>>

</div>
</div><br>
<div class="row">
                    <div class="col-md-6">
Address:
<input type="text" name="baddress" value=<?php echo$info1[0]['address']?>>

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
<div class="row">
                    <div class="col-md-6">

<input type="date" name="bdate">


</div>
</div><br>
<button type="submit" name="insert">Submit</button>
</form>


</body>

</html>


