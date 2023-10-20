<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EMMAS LOGIN</title>

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



$elements=array("email"=>"","password"=>"");
$form=new FormAssist($elements,$_POST);
$rules=array(
    'email'=>array('required'=>true,"email"=>true),
    'password'=>array('required'=>true),
);
$validator=new FormValidator($rules);

if(isset($_POST['login']))
{
    if($validator->validate($_POST))
    {
        $data=array('cstemail'=>$_POST['email'],'cstpassword'=>$_POST['password']);
        if($info=$dao->login($data,'customer'))
        {
           
            $_SESSION['email']=$info['cstemail'];
$a=$_SESSION['email'];

	echo "<script> alert('Log In Successful');</script> ";	
		
   echo"<script> location.replace('index.php'); </script>";
			
           // header('location:student/index.html');
       


 }
        else{
            $msg="invalid username or password";
			
				echo "<script> alert('Invalid username or password');</script> ";
        }
    }

    
}




?>

    <div class="main">

        
        <!-- Sing in  Form -->
        <section class="sign-in">
        
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="reg/images/emmas.png" alt="sing up image"></figure>
                        <h3><strong><a href="registration.php">Create an account</a></strong></h3>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Sign in</h2>
                        <form method="POST" class="register-form" id="login-form">
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="email" name="email" id="your_name" placeholder="Enter Email as Username"/>
                                <span style="color:red"><?= $validator->error('email'); ?></span>
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="your_pass" placeholder="Password"/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="login" id="signin" class="form-submit" value="Log in"/>
                            </div>
                        </form>
                        
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>