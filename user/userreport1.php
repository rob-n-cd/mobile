<?php 


include("userheader.php");
include("dbcon.php");
session_start();
$emailErr="";
if(isset($_POST["btn_insert"]))
{

if ($_POST["uname"]=="-Select-")
 {
   $emailErr = "Name is required";
  }
else
{	
 $_SESSION['email']=$_POST['uname'];
        
       
header('location:userreport2.php');
   
}
  

}

?>

<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>

 <form action="" method="POST" enctype="multipart/form-data">
 
User Name
<div class="row">
                    <div class="col-md-6">
<select name="uname">
<option>-Select-</option>
<?php
$name=$_SESSION['email'] ;
$sql="SELECT distinct uemail FROM cart where uemail='$name'";
$result = $conn->query($sql);;
while($row = $result->fetch_assoc())
{
?>
  <option value='<?php echo $row["uemail"];?>'><?php echo $row["uemail"]; ?></option>
<?php
}
?>
  </select>
<span class="error">* <?php echo $emailErr;?></span>
</div>
</div>
<br>
<br>

<br>
<br>
<button type="submit" name="btn_insert"  >Submit</button>
</form>


</body>

</html>


