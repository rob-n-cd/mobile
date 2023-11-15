

<?php	
session_start();
include("dbcon.php");
$email = $_SESSION['email'];
echo $email;
$sql1 = "delete from register where  email='$email'";
$conn->query($sql1);

 header('location:login.php');



?>

