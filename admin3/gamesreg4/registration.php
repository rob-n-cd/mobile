<?php 

 require('../config/autoload.php'); 
	//include("header.php");


$elements=array(
        "username"=>"","password"=>"","cpassword"=>"","place"=>"","email"=>"", "phnum"=>"");


$form=new FormAssist($elements,$_POST);



$dao=new DataAccess();

$labels=array('username'=>"Username","password"=>"Password","cpassword"=>"CONFIRM PASSWORD","place"=>"Place","email"=>"EMAIL ID","unique"=>array("field"=>"email", "table"=>"registration"), "phnum"=>"phnum","unique"=>array("field"=>"phnum", "table"=>"registration"));

$rules=array(
    "username"=>array("required"=>true,"minlength"=>5,"maxlength"=>20,"alphaspaceonly"=>true),
"password"=>array("required"=>true,"minlength"=>5,"maxlength"=>8),
"cpassword"=>array("required"=>true,"minlength"=>5,"maxlength"=>8),
"place"=>array("required"=>true,"minlength"=>3,"maxlength"=>20,"alphaspaceonly"=>true),
"email"=>array("required"=>true,"minlength"=>3,"maxlength"=>30),
"phnum"=>array("required"=>true,"minlength"=>3,"maxlength"=>13),
);
    $validator = new FormValidator($rules,$labels);

if(isset($_POST["submit"]))
{
if($validator->validate($_POST))
{
$data=array(

        'username'=>$_POST['username'],
        'password'=>$_POST['password'],
		'cpassword'=>$_POST['cpassword'],
		'place'=>$_POST['place'],
		'email'=>$_POST['email'],
        'phnum'=>$_POST['phnum'],
    );
	
  
    if($dao->insert($data,"registration"))
    {
        echo "<script> alert('Registration successfully');</script> ";
header('location:../admin/login.php');
    }
    else
        {$msg="Registration failed";} ?>

<span style="color:red;"><?php echo $msg; ?></span>

<?php
    
}


}


?>
		
		
		


?>
     <!-- REGISTER -->
     <section id="appointment" data-stellar-background-ratio="3">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-6">
                         <img src="images/register-image.jpg" class="img-responsive" alt="">
                    </div>

                    <div class="col-md-6 col-sm-6">
                         <!-- CONTACT FORM HERE -->
                         <form id="appointment-form" role="form" method="post">

                              <!-- SECTION TITLE -->
                              <div class="section-title wow fadeInUp" data-wow-delay="0.4s">
                                   <h2>REGISTER</h2>
                              </div>

                              <div class="wow fadeInUp" data-wow-delay="0.8s">
                                   <div class="col-md-6 col-sm-6">
                                        <label for="username">Username</label>
                                        <input type="text" class="form-control" id="username" name="username" placeholder="Username">
                                   
					<span class="valErr"><?= $validator->error('username'); ?></span>	
						
					</div>

					<div class="col-md-6 col-sm-6">
                                        <label for="password">Password</label>
                                        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                                   
					<span class="valErr"><?= $validator->error('password'); ?></span>
                               	
					
					</div>
					
				
					<div class="col-md-6 col-sm-6">
                                        <label for="cpassword">Confirm Password</label>
                                        <input type="password" class="form-control" id="cpassword" name="cpassword" placeholder="Confirm Password">
					                                   
					<span class="valErr"><?= $validator->error('cpassword'); ?></span>
                               
					
					</div>

					<div class="col-md-6 col-sm-6">
                                        <label for="place">Place</label>
                                        <input type="text" class="form-control" id="place" name="place" placeholder="Place">
                                   
					<span class="valErr"><?= $validator->error('place'); ?></span>
                               

					</div>

                                   <div class="col-md-6 col-sm-6">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id="email" name="email" placeholder=Email>
                                   

					<span class="valErr"><?= $validator->error('email'); ?></span>

					</div>
				
				

                                   <div class="col-md-12 col-sm-12">
                                        <label for="phnum">Phone Number</label>
                                        <input type="tel" class="form-control" id="phnum" name="phnum" placeholder="Phone Number">
                                        
					<span class="valErr"><?= $validator->error('phnum'); ?></span>

                                        <button type="submit" class="form-control" id="submit" name="submit">Register</button>
                                   </div>
                              </div>
                        </form>
                    </div>

               </div>
          </div>
     </section>
<?php
include("footerreg.php");
?>