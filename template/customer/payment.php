<!DOCTYPE html>
<html lang="en">
<head>

<?php include("dbcon.php"); 
session_start();
?>
	<script type="text/javascript">
function validations()
{
 var  name = document.getElementById("Cname");
if(name.value=="")
{
 alert("Enter Card Holder Name...");
name.focus();
return false;
}
	
	
	 var  name = document.getElementById("date");
if(name.value=="")
{
 alert("Enter Card Month");
name.focus();
return false;
}
	
	 var  name = document.getElementById("Cyy");
if(name.value=="")
{
 alert("Enter Card Year");
name.focus();
return false;
}

		 var  name = document.getElementById("verification");
if(name.value=="")
{
 alert("Enter Card CVV / CVC");
name.focus();
return false;
}
	
var  name = document.getElementById("cardnumber");
if(name.value=="")
{
 alert("Enter Card Number");
name.focus();
return false;
}
	
var  name = document.getElementById("add");
if(name.value=="")
{
 alert("Enter  Address");
name.focus();
return false;
}


}

	
	</script>
	

  
    


  <meta charset="UTF-8">
  <title>Payment</title>
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
  <link rel="stylesheet" href="payment/style.css">
<meta name="robots" content="noindex,follow" />
</head>
<body>



<?php
if(isset($_POST["next"]))
{
	
	 header('location:email.php');
	
 }
 if(isset($_POST["back"]))
{
	
	 header('location:singleitem.php');
	
 }


	
//onSubmit="return validations()" 
?>
	<form action=""  method="POST" onSubmit="return validations();"   enctype="multipart/form-data">
  <div class="checkout-panel" style="margin-top:200px;">
    <div class="panel-body">
      
      
   <?php
		//session_start();
		 //$name=$_SESSION['email'] ;
		 //echo $name;
		 ?>


      <div class="payment-method">
        <label for="card" class="method card">
     
		 
          <div class="card-logos">
            <img src="payment/img/visa_logo.png"/>
            <img src="payment/img/mastercard_logo.png"/>
          </div>
<?php 
//session_start();
  $amt= $_SESSION['amount'];
  //$name=$_SESSION['cid'] ;
  $name=$_SESSION['email'] ;
  //echo $name;
?>
          <div class="radio-input">
            <input id="card" type="radio" name="payment">
            Pay Rs.<?php echo $amt;?> with credit card
          </div>
        </label>

        <label for="paypal" class="method paypal">
          <img src="payment/img/paypal_logo.png"/>
          <div class="radio-input">
            <input id="paypal" type="radio" name="payment">
             Pay Rs.<?php echo $amt;?> with pay pal
          </div>
        </label>
      </div>

      <div class="input-fields">
        <div class="column-1">
          <label for="cardholder">Cardholder's Name</label>
          <input type="text" onkeypress="return /[a-z]/i.test(event.key)" name="Cname" id="Cname" />

          <div class="small-inputs">
            <div> 
              <label for="date">Valid thru</label>
              <input type="text" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))" maxlength="2" minlength="2" id="date" name="Cmm" placeholder="MM " /> 
	      <input type="text" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))" maxlength="4" minlength="4" id="Cyy" placeholder= "YY" />

            </div>
 


            <div>
              <label for="verification">CVV / CVC *</label>
              <input type="password" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))" minlength="3" maxlength="3" name="cvv" id="verification"/>
            </div>
          </div>

        </div>
        <div class="column-2">
          <label for="cardnumber">Card Number</label>
          <input type="password" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))" minlength="16" maxlength="16" name="Cnum" id="cardnumber"/>

          <span class="info">* CVV or CVC is the card security code, unique three digits number on the back of your card separate from its number.</span>

	

       
      </div>
    </div>

    <div class="panel-footer">
      <button type="submit" class="btn back-btn" name="back" >Back</button>
     <button  type="submit" class="btn next-btn"  name="next" >Next Step</button>
		
		
    </div>
  </div>
	</form>
	
	
	
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="payment/script.js"></script>
  
</body>

</html>