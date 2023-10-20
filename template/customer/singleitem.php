<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport">
    <meta http-equiv="X-UA-Compatible">
    <title>Document</title>
    <link rel="stylesheet" href="ui.css">
    
    <script>
function showtotal() {
//alert(str);
	  var price=document.getElementById("price").value;  
	   var qty=document.getElementById("qty").value; 
	   var total=price*qty; 
	   //alert(total);
	   document.getElementById("total").value = total;
}
</script>
    
</head>

<body>

<?php 

include("header2.php");	
include("dbcon.php");

?>&nbsp

<?php 

$iid = "";
$iname = "";
$name="";
//$dao=new DataAccess();
?>

<div class="container-fluid bg-secondary py-5">
        <div class="container py-5">
            <div class="row align-items-center py-4">
                <div class="col-md-6 text-center text-md-left">
                    <h1 class="mb-4 mb-md-0 text-primary text-uppercase">Book Product</h1>
                </div>
                <div class="col-md-6 text-center text-md-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="btn btn-outline-primary" href="index.php">Home</a>
                        <i class="fas fa-angle-double-right text-primary mx-2"></i>
                        <a class="btn btn-outline-primary " href="products.php">products</a>
                        <i class="fas fa-angle-double-right text-primary mx-2"></i>
                        <a class="btn btn-outline-primary disabled" href="">Book Product</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
if(isset($_POST["btn_insert"]))
{
if(!isset($_SESSION['email']))
   {
    echo"<script> location.replace('login.php'); </script>";
  }
  else
  {
$name=$_SESSION['email'];
$itid = $_GET['id'];
$q10="select * from item where iid=".$itid ;
$info121=$dao->query($q10);
$iqty = $info121[0]["quantity"];
$qty = $_POST["qty"];
if($iqty>$qty)
{
$q1="select * from item where iid=".$itid ;

$info1=$dao->query($q1);
$iname=$info1[0]["iname"];
$itemname = $iname;
$price = $_POST["offerprice"];
$qty = $_POST["qty"];
$total = $_POST["total"];
//$status=1;
$date1=date('Y-m-d',time());
$sql = "INSERT INTO cart(email,iid,iname,price,quantity,total,date1) VALUES ('$name','$itid' ,'$itemname','$price ','$qty','$total','$date1')";

$conn->query($sql);
echo"<script> location.replace('viewcart.php'); </script>";
			
}
else
{
echo "<script> alert('not suffient stock'); </script>";
}
}
}


?>


<?php
$dao=new DataAccess();
?>

<?php	$itid=$_GET['id']; 



			 $q="select * from item where iid=".$itid ;

$info=$dao->query($q);
$iname=$info[0]["iname"];
?>
 
   

<form action="" method="POST" enctype="multipart/form-data">

 <div class="upper">
        <div class="upper-left">
<?php 
if(isset($_SESSION['email']))
{ 
   $name=$_SESSION['email'];
?>

 <?php //<h7 class="title-w3-agileits title-black-wthree"></h7>?> 

<?php } ?>
            
            <img style="width:300; height:300" src=<?php echo BASE_URL."uploads/".$info[0]["image"]; ?> alt=" " class="img-responsive" />
        </div>
        <div class="content">
            <h3>Details</h3>
            <div style="display: block;">
            <strong><label for="name">Item Name:</label></strong><br>
                
                <strong><label for="name"><?php echo $info[0]["iname"]; ?></label></strong><br>
                <strong> <label for="price">Price :</label></strong>&nbsp &nbsp &nbsp &nbsp
                <input id="price" name="offerprice" type="text" value="<?php echo $info[0]["price"];  ?>" readonly style="margin-top: 8px;"><br>
                <strong><label for="qty">Quantity :</label></strong>&nbsp
                <input id="qty" name="qty" type="text" onkeyup="showtotal()" style="margin-top: 8px;"><br>
                <label for="name">Available Stock:</label>
                <label><?php echo $info[0]["quantity"]; ?></label><br>
                <strong><label for="Total">Total :</label></strong>&nbsp &nbsp &nbsp &nbsp
                <input id="total" name="total" type="text" readonly style="margin-top: 8px;"><br>
                
            </div>
        </div>
    </div>
    <div class="lower">
        <div class="btn-grp">
                <button class="buttons" name="btn_insert" id="btn-1">Add To Cart</button>
                      
        </div>
    </div>
    </form>
</body>

</html>