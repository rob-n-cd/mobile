<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>CITY MOBILES</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free Website Template" name="keywords">
        <meta content="Free Website Template" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        
        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>
</html>



<script>
function printData()
{
   var divToPrint=document.getElementById("printTable");
   newWin= window.open("");
   newWin.document.write(divToPrint.outerHTML);
   newWin.print();
   newWin.close();
}
</script>

<?php  
 //session_start();
include("dbcon.php");
require('../config/autoload.php');
$dao=new DataAccess();
?>
<div class="row">
 <div class="col-md-12">
 <div class="table-responsive">
                                <table border="1"  id="printTable" style="width:100%" >
                                    <thead>
                          <center> CITY </center>
                           <center> MOBILES </center>
                            <tr>
                             <th style="text-align:left">BillNo.1</th>
                               <th colspan="2" style="text-align:left"></th>
                              <th style="text-align:left" >Date:<?php echo  date("Y/m/d"); ?></th>
                            </tr>
                           <tr>
                        <th>Item name</th>
                        <th>Quantity</th>
                        
			<th>Rate</th>
<th>Total</th>
</tr>
                      
                                    </thead>
                                    <tbody>
                                   
 <?php
$name=$_SESSION['email'] ;

 

$sql = "SELECT * FROM cart WHERE status=1 and uemail='$name'";
$result = $conn->query($sql);


	
	
	
	


if ($result->num_rows > 0) {


 // output data of each row
    while($row = $result->fetch_assoc()) {
		
		
      echo "<tr> <td> "  . $row["itnme"]. "</td> <td>"  . $row["qty"]. "</td> <td>" . $row["offerprice"]. "</td>  <td>" . $row["total"]. "</td>  </tr>";
	  
	    
}
}


 ?>

 <?php
 $sql123 = "select sum(total) as t from cart where status=1 and  uemail='$name'";
$result123 = $conn->query($sql123);
	   $row = $result123->fetch_assoc();
	   $total=$row["t"];
	    echo "<tr> <td colspan='3'  style='text-align:right'>Total:</td><td> ", $total, "</td></tr>";
	   ?>
       




</table>



<?php

$q1="select * from cart where status=1 and uemail='".$name."'";
$result1 = $conn->query($q1);

if ($result1->num_rows > 0) {

    while($row = $result1->fetch_assoc()) {
		

   $a=$row["qty"];
   $b=$row["itid"];
   $sql12 =" UPDATE item40 SET qty=qty- $a WHERE itid=$b" ;
   $conn->query($sql12);
   
}
}
$sql11 =" UPDATE cart SET status=2 WHERE status=1 and uemail='$name'" ;

if ($conn->query($sql11) === TRUE) {
	echo "<script> alert('Payment Sucessfully');</script> ";
	 
	
	 }
	 ?>
     <br /><br />

<input type="button" onclick="printData();" value="PRINT"  />

<a href="category.php">HOME</a>
</div>
</div>
</div>

</form>




