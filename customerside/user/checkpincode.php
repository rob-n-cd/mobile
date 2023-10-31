<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport">
    <meta http-equiv="X-UA-Compatible">
    <title>Document</title>
    <link rel="stylesheet" href="ui.css">
    
    <script>

    
</head>

<body>

<?php include("userheader.php");	
include("dbcon.php");

?>

<?php
$pin1="";
$days = "";
$date2="";
?>



<?php
if(isset($_POST["btn_insert"]))
{

$pin1 = $_POST["pin"];


 $sql1="select * from pincode where pin=".$_POST["pin"];

 $result = $conn->query($sql1);
 if ($result->num_rows > 0) {
$row = $result->fetch_assoc();

$days= $row["days"]; 
$date1=date('Y-m-d',time());

//echo date('Y-m-d', strtotime(' + 3 days'));
$newdate = strtotime( $date1.'+'.$days.'days');
//$newdate = strtotime("today" .'+'.$days.'days');
//echo date("Y-m-d ", $newdate);

$date2 =date("d-m-Y", $newdate);
//echo $date2;
}
else
{
	 //echo "<script> alert('Sorry Not Available');</script> ";
	 $date2='Sorry Not Available';
	}

}

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
            
            <img style="width:300; height:300" src="img/welcome_img.png" alt=" " class="img-responsive" />
        </div>
        <div class="content">
            <h3>Availabilty Of Items</h3>
            <div style="display: block;">
                
                 <label for="price">Pincode:</label><br>
                <input id="pin" name="pin" type="text" value='<?php echo $pin1 ?>' style="margin-top: 8px;"><br>
				
				 
				<label for="name">Delivery Date:</label><br>
                
                <label for="name"><?php echo  $date2; ?></label><br>
               
                
            </div>
        </div>
    </div>
   <div class="lower">
        <div class="btn-grp">
                <button class="buttons" name="btn_insert" id="btn-1">Check Availability</button>
                <button class="buttons" id="btn-2">test2</button>
                      
        </div>
    </div>
    </form>
</body>

</html>