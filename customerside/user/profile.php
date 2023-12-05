<!DOCTYPE html>
<html>
<head>
<?php
//require('../config/autoload.php'); 
//$dao=new DataAccess();
include('header2.php');?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.title {
  color: grey;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}
</style>
</head>
<body>


<?php
include("dbcon.php");
//SESSION_start();
$name=$_SESSION['email'];

$sql="SELECT * FROM customer where cstemail='".$name."'";

$result1 = $conn->query($sql);

if ($result1->num_rows > 0) {

    $row = $result1->fetch_assoc(); 
		$_SESSION['id']=$row['rid'];


   $a=$row["cstname"];
   $b=$row["cstphone"];
  

}
if(isset($_POST['btn-home']))
{
  echo"<script> location.replace('editprofile.php'); </script>";
}

//$info=$conn->query($sql);
//$info=$dao->query($sql);
//echo $sql;
?>
<form action="" method="POST" enctype="multipart/form-data">
 
<h2 style="text-align:center">User Profile</h2>

<div class="card">
  <img src="profile.jpg" alt="John" style="width:100%">
  <h1><?php echo $a;?></h1>
  <p class="title"><?php echo $_SESSION['email'];;?></p>
  <p><?php echo $b;?></p>
  
  <p><button name="btn-home">Edit</button></p>
  
</div>
</form>
</body>
</html>