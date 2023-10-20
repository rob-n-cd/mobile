<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EMMAS SIGN UP</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="reg/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="reg/css/style.css">
</head>
<style>
h3 {text-align: center;}
</style>
<body>
<?php require('../config/autoload.php'); ?>
<?php
$dao=new DataAccess();



//if(isset($_SESSION['name']))
   // header('location:student/index.php');



$elements=array("cstname"=>"","cstemail"=>"","cstphone"=>"","cstpassword"=>"","cpassword"=>"");
$labels=array('cstname'=>"Customer Name","email"=>"Email Id","phone"=>"Phone Number","password"=>"Password","cpassword"=>"Confirm Password");

$form=new FormAssist($elements,$_POST);
$rules=array(
    "cstname"=>array("required"=>true,"minlength"=>3,"maxlength"=>30,"alphaspaceonly"=>true),
    "cstemail"=>array("required"=>true,"email"=>true,"unique"=>array("field"=>"cstemail","table"=>"customer")),
    
    "cstphone"=>array("required"=>true,"integeronly"=>true,"minlength"=>10,"maxlength"=>10),
    
    "cstpassword"=>array("required"=>true),
    "cpassword"=>array("required"=>true,"compare"=>array("comparewith"=>"cstpassword","operator"=>"=")),
);
$validator=new FormValidator($rules);

if(isset($_POST['register']))
{
    if($validator->validate($_POST))
    {
        $data=array(
        'cstname'=>$_POST['cstname'],
        'cstphone'=>$_POST['cstphone'],
        'cstemail'=>$_POST['cstemail'],
        'cstpassword'=>$_POST['cstpassword'],
        'status'=>1);
        if($dao->insert($data,'customer'))
        {
           
            //$msg="Inserted Successfully";
            echo "<script> alert(' Registration Succesful');</script> ";
            echo"<script> location.replace('login.php'); </script>";
   //echo"<script> location.replace('displaycategory.php'); </script>";
			
           // header('location:student/index.html');
       


 }
        else{
            //$msg="Insertion Failed";
			
				echo "<script> alert('Insertion Failed');</script> ";
        }
    }

    
}


?>


    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        <form method="POST" class="register-form" id="register-form">

                        <div class="row">
                    <div class="col-md-6">
Name:

<?= $form->textBox('cstname',array('class'=>'form-control')); ?>
<span style="color:red"><?= $validator->error('cstname'); ?></span>

</div>
</div>

<div class="row">
                    <div class="col-md-6">
Email:

<?= $form->textBox('cstemail',array('class'=>'form-control')); ?>
<span style="color:red"><?= $validator->error('cstemail'); ?></span>

</div>
</div>
<div class="row">
                    <div class="col-md-6">
Phone No:

<?= $form->textBox('cstphone',array('class'=>'form-control')); ?>
<span style="color:red"><?= $validator->error('cstphone'); ?></span>

</div>
</div>
                            
<div class="row">
                    <div class="col-md-6">
Password:

<?= $form->passwordbox('cstpassword',array('class'=>'form-control')); ?>
<span style="color:red"><?= $validator->error('cstpassword'); ?></span>

</div>
</div>

<div class="row">
                    <div class="col-md-6">
Confirm Password:

<?= $form->passwordbox('cpassword',array('class'=>'form-control')); ?>
<span style="color:red"><?= $validator->error('cpassword'); ?></span>

</div>
</div>
                            
                            <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="register" id="signup" class="form-submit" value="Register"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="reg/images/emmas.png" alt="sing up image"></figure>
                        <h3><strong><a href="login.php">I am already a member</a></strong></h3>
                    </div>
                </div>
            </div>
        </section>

        

    </div>

    <!-- JS -->
    <script src="reg/vendor/jquery/jquery.min.js"></script>
    <script src="reg/js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>