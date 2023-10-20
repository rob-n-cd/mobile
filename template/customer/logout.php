<?php
 require('../config/autoload.php'); 
 unset($_SESSION['email']);
echo"<script> location.replace('indexlogout.php'); </script>";
?>