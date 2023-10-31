<?php 

 require('../config/autoload.php'); 

$file=new FileUpload();
$elements=array( "cardname"=>"","cardnumber"=>"","hname"=>"","pprice"=>"");


$form=new FormAssist($elements,$_POST);

$dao=new DataAccess();

$labels=array('cardname'=>"Card name",'cardnumber'=>"Card Number",'hname'=>"Holder Name",'pprice'=>"Mobile Price");

$rules=array(
    "cardname"=>array("required"=>true,"minlength"=>3,"maxlength"=>30,"alphaonly"=>true),
    "cardnumber"=>array("required"=>true,"minlength"=>2,"maxlength"=>30,"integeronly"=>true),
    "hname"=>array("required"=>true,"minlength"=>3,"maxlength"=>30,"alphaonly"=>true),
    "pprice"=>array("required"=>true,"minlength"=>2,"maxlength"=>30,"integeronly"=>true)
    
     
);
    
    
$validator = new FormValidator($rules,$labels);

if(isset($_POST["insert"]))
{

if($validator->validate($_POST))
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



?>
<html>
<meta charset="UTF-8">
  <title>Document</title>
  <head>
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
  <link rel="stylesheet" href="../payment/style.css">
<meta name="robots" content="noindex,follow" />
</head>
<body>
<form action=""  method="POST" onSubmit="return validations()" enctype="multipart/form-data">
	
  <div class="checkout-panel">
    <div class="panel-body">
      <h2 class="title">Checkout</h2>

      <div class="progress-bar">
        <div class="step active"></div>
        <div class="step active"></div>
        <div class="step"></div>
        <div class="step"></div>
      </div>

      <div class="payment-method">
        <label for="card" class="method card">
          <div class="card-logos">
            <img src="payment/img/visa_logo.png"/>
            <img src="../payment/img/mastercard_logo.png"/>
          </div>

          <div class="radio-input">
            <input id="card" type="radio" name="payment">
            Pay £340.00 with credit card
          </div>
        </label>

        <label for="paypal" class="method paypal">
          <img src="../payment/img/paypal_logo.png"/>
          <div class="radio-input">
            <input id="paypal" type="radio" name="payment">
            Pay £340.00 with PayPal
          </div>
        </label>
      </div>

<body>

 <form action="" method="POST" enctype="multipart/form-data">

<div class="row">
                    <div class="col-md-6">
Card name:

<?= $form->textBox('cardname',array('class'=>'form-control')); ?>
<?= $validator->error('cardname'); ?>

</div>
</div><br>
<div class="row">
                    <div class="col-md-6">
Card Number:

<?= $form->textBox('cardnumber',array('class'=>'form-control')); ?>
<?= $validator->error('cardnumber'); ?>

</div>
</div><br>
<div class="row">
                    <div class="col-md-6">
Holder Name:
<?= $form->textBox('hname',array('class'=>'form-control')); ?>
<?= $validator->error('hname'); ?>


</div>
</div><br>
<div class="row">
                    <div class="col-md-6">
Mobile Price:

<?= $form->textBox('pprice',array('class'=>'form-control')); ?>
<?= $validator->error('pprice'); ?>

</div>
</div><br>
<button type="submit" name="insert">Submit</button>
</form>


</body>

</html>


