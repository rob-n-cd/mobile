<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport">
    <meta http-equiv="X-UA-Compatible">
    <title>Document</title>
    <link rel="stylesheet" href="../user/css/ui.css">
    
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

<?php //include("header.php");	
include("dbcon.php");

?>

<?php require('../config/autoload.php'); 

$iid = "";
$iname = "";
$name="";
$dao=new DataAccess();
?>



<?php
if(isset($_POST["btn_insert"]))
{
if(!isset($_SESSION['email']))
   {
	   header('location:../login.php');
  }
  else
  {
    $q1="select * from addmobile";
$info121=$dao->query($q1);
$iqty = $info121[0]["qty"];
$qty = $_POST["qty"];
$_SESSION['qundity'] = $qty;
echo $iqty;

if($iqty>$qty)
{
    $itid = $_GET['id'];
$q2="select * from addmobile where mid=".$itid ;

$info1=$dao->query($q2);
$iname=$info1[0]["mname"];
$itemname = $iname;
$price = $_POST["offerprice"];
$qty = $_POST["qty"];
$total = $_POST["total"];
$_SESSION['itemname'] = $itemname;
$status=1;
$sql = "INSERT INTO `cart`(`carname`,`quandity`,`proprice`,`status`,`total`) VALUES ('$itemname','$qty','$proprice','$status','$total')";

$conn->query($sql);
 header('location:viewcart.php');
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



			 $q="select * from addmobile where mid=".$itid ;

$info=$dao->query($q);
$iname=$info[0]["mname"];
?>
 
   

<form action="" method="POST" enctype="multipart/form-data">

 <div class="upper">
        <div class="upper-left">
<?php 
if(isset($_SESSION['email']))
{ 
   $name=$_SESSION['email'];
?>

 <h7 class="title-w3-agileits title-black-wthree"><?php  echo $name ?></h7>

<?php } ?>
            <h3>Product Details</h3>
            <img style="width:300; height:300" src=<?php echo BASE_URL."upload/".$info[0]["mimg"]; ?> alt=" " class="img-responsive" />
        </div>
        <div class="content">
            <h3>Details</h3>
            <div style="display: block;">
                <label for="name">Item Name:</label><br>
                
                <label for="name"><?php echo $info[0]["mname"]; ?></label><br>
                 <label for="price">Price:</label><br>
                <input id="price" name="offerprice" type="text" value="<?php echo $info[0]["mprize"];  ?>" readonly style="margin-top: 8px;"><br>
                <label for="qty">Quantity:</label><br>
                <input id="qty" name="qty" type="text" onkeyup="showtotal()" style="margin-top: 8px;"><br>
                <label for="Total">Total</label><br>
                <input id="total" name="total" type="text" readonly style="margin-top: 8px;"><br>
                <label for="">Something 2</label><br>
                <input id="something2" type="text" style="margin-top: 8px;"><br>
            </div>
        </div>
    </div>
    <div class="lower">
        <div class="btn-grp">
                <button class="buttons" name="btn_insert" id="btn-1">Add Cart</button>
                <button class="buttons" id="btn-2">test2</button>
                <button class="buttons" id="btn-3">test3</button>        
        </div>
    </div>
    </form>
</body>

</html>