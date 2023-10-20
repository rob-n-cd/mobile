<?php 
 
 include("header2.php");

include("dbcon.php");
?>
&nbsp
 <div class="container-fluid bg-secondary py-5">
        <div class="container py-5">
            <div class="row align-items-center py-4">
                <div class="col-md-6 text-center text-md-left">
                    <h1 class="mb-4 mb-md-0 text-primary text-uppercase">Selecet Date</h1>
                </div>
                <div class="col-md-6 text-center text-md-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="btn btn-outline-primary" href="index.php">Home</a>
                        <i class="fas fa-angle-double-right text-primary mx-2"></i>
                        <a class="btn btn-outline-primary disabled" href="">Profile</a>
                        <i class="fas fa-angle-double-right text-primary mx-2"></i>
                        <a class="btn btn-outline-primary disabled" href="">Select Date</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php

$elements=array(
    "fdate"=>"");


$form=new FormAssist($elements,$_POST);





$labels=array('fdate'=>"From Date");


$rules=array(


"fdate"=>array("required"=>true,'date'=>array('from'=>'-30 days 12 am','to'=>'today')),
      











);


$validator = new FormValidator($rules,$labels);

if(isset($_POST["btn_insert"]))
{








    $_SESSION['seldate']=$_POST['fdate'];
             
             

echo "<script>document.location='mypayments.php' </script>";


}


?>
<br></br>



<body>

<form action="" method="POST" enctype="multipart/form-data">


<div class="row" >
                <div class="col-md-6">
<strong>Selecet Date:</strong>

            <input id="qty" class="form-control p-4" name="fdate" type="date" max=<?php echo date('Y-m-d',time());  ?> style="margin-top: 8px;"><br>

<button class="btn btn-primary py-3 px-5" type="submit" name="btn_insert"  >Submit</button>



</div>
</div>









</form>