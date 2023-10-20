


// less secure app in google and on


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
 $i=0;
include("dbcon.php");
require('../config/autoload.php');
$dao=new DataAccess();
$name=$_SESSION['email'] ;
$q="SELECT * FROM customer where cstemail='$name'";

              $info=$dao->query($q);
              
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Example 1</title>
    <link rel="stylesheet" href="style.css" media="all" />
  </head>
  <body>
    
    <header class="clearfix" >
      <div id="logo">
        <img src="emmas.png">
      </div>
      <h1 >INVOICE</h1>
      <div id="company" class="clearfix">
        <div>EMMA'S Polymers</div>
        <div>Ochanthuruth P O,<br /> Ernakulam, Kerala</div>
        <div>682508</div>
        <div><a href="mailto:company@example.com">emmaspolymers@gmail.com</a></div>
      </div>
      <div id="project">
        <div><span>NAME  :</span><?php echo $info[0]['cstname'];?></div>
        <div><span>EMAIL :</span><?php echo $info[0]["cstemail"];?></div>
        <div><span>PHONE :</span><?php echo $info[0]["cstphone"];?></div>
       
        <div><span>DATE  :</span><?php echo  date("Y/m/d"); ?></div>
        
        
      </div>
    </header>
    <main>
    <table border="1"  id="printTable"   style="width:100%" >        <thead>
          <tr>
          <th>Sr.No</th>
            <th>ITEM NAME</th>
            <th>QUANTITY</th>
            <th>PRICE</th>
            <th>TOTAL</th>
          </tr>
        </thead>
        <tbody>
        
        

        <?php


$sql = "SELECT * FROM cart WHERE status1=1 and email='".$name."'";
$result = $conn->query($sql);
	   




	
	
	
	


if ($result->num_rows > 0) {
$j=1;


 // output data of each row
    while($row = $result->fetch_assoc()) {
		
		
      echo "<tr> <td>".$j."</td> <td> "  . $row["iname"]. "</td> <td>"  . $row["quantity"]. "</td> <td>" . $row["price"]. "</td>  <td>" . $row["total"]. "</td>  </tr>";
	  $j=$j+1;
	    
}
}


 ?>

 <?php
 $sql123 = "select sum(total) as t from cart where status1=1 and  email='$name'";
$result123 = $conn->query($sql123);
	   $row = $result123->fetch_assoc();
	   $total=$row["t"];
	    echo "<tr> <td colspan='4'  style='text-align:right'>Total:</td><td> ", $total, "</td></tr>";
	   ?>
       





      </table>


      <?php

$q1="select * from cart where status1=1 and email='".$name."'";
$result1 = $conn->query($q1);

if ($result1->num_rows > 0) {

    while($row = $result1->fetch_assoc()) {
		

   $a=$row["quantity"];
   $b=$row["iid"];
   $sql12 =" UPDATE item SET quantity=quantity- $a WHERE iid=$b" ;
   $conn->query($sql12);
   
}
}
$date1=date("Y/m/d");
$sql11 =" UPDATE cart SET status1=2, book_date='$date1' WHERE status1=1 and email='$name'" ;

if ($conn->query($sql11) === TRUE) {
	echo "<script> alert('Payment Sucessful');</script> ";
	 
	
	 }
	 ?>
     <br /><br />

<input type="button" onclick="printData();" value="PRINT"  />

<a href="index.php">HOME</a>
</div>
</div>
</div>
      <div id="notices">
        
        
      </div>
    </main>
    <footer>
      Invoice was created on a computer and is valid without the signature and seal.
    </footer>
  </body>
</html>