<?php require('../config/autoload.php'); ?>
<?php //include('header.php'); ?>   
<?php
$dao=new DataAccess();
$rules=array(
	'rname'=>array('required'=>true),
	
    'rmail'=>array('required'=>true),
    'rpassword'=>array('required'=>true),
    'raddress'=>array('required'=>true),
    'rphone'=>array('required'=>true)
	
);
$labels=array('rname'=>"username","rmail"=>"usermail","rpassword"=>"userpassword","raddress"=>"user address","rphone"=>"phone number");
$validator=new FormValidator($rules);
$elements=array(
    'rname' =>'',
	'rmail'=>'',
	'rpassword' =>'',
    'raddress' =>'',
    'rphone' =>''
    
   
    
	);
$form = new FormAssist($elements,$_POST);

if(isset($_POST['signup']))
{
	if($validator->validate($_POST))
	{
	$data=array(
        'rname'=>$_POST['rname'],
		'rmail'=>$_POST['rmail'],
		'rpassword'=>$_POST['rpassword'],
        'raddress'=>$_POST['raddress'],
        'rphone'=>$_POST['rphone']

  
		);
		$table='registration';
		if($dao->insert($data,$table))
        {
        	//$msg="Registered successfully";
		echo "<script> alert('New record created successfully');</script> ";
		
		}
		
		else
			echo "<script> alert('Something went wrong');</script> ";
		//$msg="error";
		//header('location:index.php');	
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta rname="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up </title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="registration/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="registration/css/style.css">
</head>
<body>

    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">CUSTOMER-REGISTRATION</h2>
                        <form method="POST" class="register-form" id="register-form">
                            <div class="form-group">
                               <!-- <label for="rname"><i class="zmdi zmdi-account material-icons-rname"></i></label>
                                <input type="text" rname="rname" id="rname" placeholder="Your rname"/>--><h5>USER NAME:<?php echo $form->textBox('rname'); ?> </h5>
			<?php echo $validator->error('rname') ?>
                            </div>
                            <div class="form-group">
                               <!-- <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" rname="email" id="email" placeholder="Your Email"/>--><h5>USER MAIL:<?php echo $form->textBox('rmail'); ?> </h5>
			<?php echo $validator->error('rmail') ?>
                            </div>
                            
                            <div class="form-group">
                               <!-- <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="rpassword" rname="pass" id="pass" placeholder="rpassword"/>--><h5>USER PASSWORD:<?php echo $form->passwordBox ('rpassword'); ?></h4>
			<?php echo $validator->error('rpassword') ?>
                            </div>

                            <div class="form-group">
                               <!-- <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" rname="email" id="email" placeholder="Your Email"/>--><h5>USER ADDRESS:<?php echo $form->textBox('raddress'); ?> </h5>
			<?php echo $validator->error('raddress') ?>
                            </div>
                            <div class="form-group">
                               <!-- <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" rname="email" id="email" placeholder="Your Email"/>--><h5>USER PHONE:<?php echo $form->textBox('rphone'); ?> </h5>
			<?php echo $validator->error('rphone') ?>
                            </div>
                           <!-- <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="rpassword" rname="re_pass" id="re_pass" placeholder="Repeat your rpassword"/>
                            </div>-->
                            <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                                <?php if(isset($msg))echo "<script>alert(msg);</script> "; ?>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="registration/images/signup-image.jpg" alt="sing up image"></figure>
                        <a href="login.php" class="signup-image-link">I am already member</a><a href="index.php" class="signup-image-link">Back to Home</a>
                    </div>
                </div>
            </div>
        </section>
        </div>

    <!-- JS -->
    <script src="registration/vendor/jquery/jquery.min.js"></script>
    <script src="registration/js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
<!--<html>

            		<head>
<style>
	body{background-image:url("user.png");  
		background-position: top;
    
  		background-repeat: no-repeat;
  		background-size: cover;
		}
</style>
	</head>
	<body>
<form method="POST">
				<center>
			<table  style="margin-top:100px;">
           
			<tr><h1>REGISTER DETAILS</h1></tr>
                	<tr>
			<td><h4>rname:<?php echo $form->textBox('rname'); ?> </h4><br/></td>
			<td><?php echo $validator->error('rname') ?></td>
			</tr>
			<tr>
			<td><h4>USER rname:<?php echo $form->textBox('rmail'); ?> </h4><br/></td>
			<td><?php echo $validator->error('rmail') ?></td>
			</tr>
			<tr>
			
			<td><h4>rpassword:<?php echo $form->rpasswordBox ('rpassword'); ?></h4> <br/></td>
			<td><?php echo $validator->error('rpassword') ?></td>
			</tr>
			
			<tr>
			<td></td>
                <td><h4><input type="submit" rname="submit" value="REGISTER"/></h4></td>
			<td> <?php if(isset($msg))echo $msg; 
	?></td>
			</tr>
		</table>
				</center>
		<div style="color:green;"></div>	
		</form>
    </body>
</html>-->
 <?php //include('footer.php'); ?>