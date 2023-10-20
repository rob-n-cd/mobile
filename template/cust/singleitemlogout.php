
<?php
require('../config/autoload.php'); 
include("dbcon.php");
$id=$_GET['id'];

echo"<script> location.replace('login.php'); </script>";
?>