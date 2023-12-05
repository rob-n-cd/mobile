<html>
<?php
 require('../config/autoload.php'); 
include("dbcon.php");
$dao=new DataAccess();
//$cid = $_SESSION['cid'];
$cid = $_GET['cid'];
$sql = "select * from cart where carid = $cid";
$result = $conn->query($sql);
	   $row = $result->fetch_assoc();
    
     $email=$_SESSION['email'];
$q2="select * from register where email='$email'";
$info111=$dao->query($q2);

$q3="select * from booking where cartid='$cid'";
$info222=$dao->query($q3);

?>
    <h class= "h4">RETUEN PRODUCT</h>
    <body>
         <!-- Favicons -->
  <link href="vendor1/img/favicon.png" rel="icon">
  <link href="vendor1/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <script src="vendor1/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor1/vendor/aos/aos.js"></script>
  <script src="vendor1/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="vendor1/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="vendor1/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="vendor1/vendor/php-email-form/validate.js"></script>

  <!-- Vendor CSS Files -->
  <script src="returnjs/main.js"></script>
    <link href="vendor1/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendor1/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="vendor1/aos/aos.css" rel="stylesheet">
  <link href="vendor1/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="vendor1/swiper/swiper-bundle.min.css" rel="stylesheet">



    <link href="css/return.css" rel="stylesheet">

    
        <form  method="post" role="form" class="bg-dark-subtle  php-email-form p-3 p-md-4">
          <div class=" h1 row">
            <div class=" h1 col-xl-6 form-group">
              <input type="text" name="name" class="form-control" id="name" value="Name: <?= $info111[0]['name'] ?>" readonly>
            </div>
            <div class=" h1 col-xl-6 form-group">
              <input type="email" class="form-control" name="email" id="email" value="Address:  <?= $info111[0]['address'] ?>" readonly>
            </div>
            <div class=" h1 col-xl-6 form-group">
              <input type="text" name="name" class="form-control" id="name" value="Email:  <?= $info111[0]['email'] ?>" readonly>
            </div>
            <div class=" h1 col-xl-6 form-group">
              <input type="email" class="form-control" name="email" id="email" value="Place: <?= $info222[0]['bplace'] ?>" readonly>
            </div>
            <div class=" h1 col-xl-6 form-group">
              <input type="text" name="name" class="form-control" id="name" value="Product Name: <?=$row['carname']?>" readonly>
            </div>
            <div class=" h1 col-xl-6 form-group">
              <input type="email" class="form-control" name="email" id="email" value="Price: <?=$row['proprice']?>"  readonly>
            </div>
            <div class=" h1 col-xl-6 form-group">
              <input type="text" name="name" class="form-control" id="name" value="Quandity: <?=$row['quandity']?>"  readonly>
            </div>
            <div class=" h1 col-xl-6 form-group">
              <input type="email" class="form-control" name="email" id="email" value="Total: <?=$row['total']?>"  readonly>
            </div>
            <div class=" h1 col-xl-6 form-group">
              <input type="text" name="name" class="form-control" id="name" value="Booking date: <?= $info222[0]['date'] ?>" readonly>
            </div>
            <div class=" h1 col-xl-6 form-group">
              <input type="text" class="form-control" name="email" id="email"  readonly value="Return Date:  <?= $date2=date('Y-m-d',time()); ?>" readonly>
            </div>
          </div>
          
          <div class="h1 form-group">
            <textarea class="form-control" name="message" rows="5" placeholder="why do you return this item?" required></textarea>
          </div>
         
          <div class=" hstack "><button class=" btn navbar-collapse text-center text-bg-secondary" name="insert" type="submit"<?=time();?>>Send Message</button></div>
        </form><!--End Contact Form -->

      </div>
    </section><!-- End Contact Section -->
    </body>
</html>


<?php
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
        'date'=>$_POST['bdate'],
        'cartid' => $_SESSION['cartid'],

        
        
         
    );
    $cart_id=  $_SESSION['cartid'];

    include('../user/dbcon.php');
    $cart_id = $_SESSION['cartid'];
    $cart_name = $_SESSION['cartname']; 
   $cart_status = "update cart set status=4 where carname='$cart_name' and status=1";
   $conn->query($cart_status);

  
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
















































<?php
/*require('../config/autoload.php'); 
include("dbcon.php");
$dao=new DataAccess();
$id=$_GET['id'];
$date2=date('Y-m-d',time());
echo $date2;
$sql = "update cart set status=5, return_date='$date2' where cart_id=".$id;
$conn->query($sql);

/*$q="SELECT * from cart where cart_id=".$id;
$info=$dao->query($q);
echo ".$info";
$cstemail=$info[0]["email"];
$iid=$info[0]['iid'];
$iname=$info[0]["iname"];
$price=$info[0]['price'];
$quantity=$info[0]['quantity'];
$total=$info[0]['total'];
$candate=$info[0]["cancel_date"];

$result = $conn->query($query);
  
    if ($result->num_rows > 0) 
    {
        // OUTPUT DATA OF EACH ROW
        while($row = $result->fetch_assoc())
        {
            $cstemail=$row['email'];
            $iid=$row['iid'];
            $iname=$row['iname'];
            $price=$row['price'];
            $quantity=$row['quantity'];
            $total=$row['total'];
            $candate=$row['cancel_date'];
                
                    }

$sql1 = $q="INSERT into canceldetail (cart_id,cstemail,iid,iname,price,quantity,total,candate) VALUES ('$id','$cstemail','$iid','$iname','$price','$quantity','$total','$candate')";
    }*/
//echo"<script> location.replace('order.php'); </script>";
?>