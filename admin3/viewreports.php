
<!DOCTYPE html>
<html lang="en">
    <?php 
     require('../config/autoload.php'); 
     include("header.php");
include("dbcon.php");
$dao=new DataAccess();
?>
            
            <H1><center> RETURN  PAGE </center> </H1>
                <table  border="1" class="table" style="margin-top:100px;">
                    <tr>
                        
                        <th>Sl No</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Email</th>
                        <th>Place</th>
                        <th>product name</th>
                        <th>price</th>
                        <th>Quandity</th>
                        <th>Total</th>
                        <th>Booking Date</th>
                        <th>Return Date</th>
                        <th>Discription</th>
                        <th>Admin Conformation</th>
                        
                     
                      
                    </tr>
<?php
   
	//$fields=array('reid','retname','retaddress','reemail','replace','reproduct','reprice','requandity','retotal','bookdate','redate','discription');

  //  $users=$dao->selectAsTable($fields,'goret');
    
   // echo $users;   
    $display = "SELECT * FROM `goret` where 1 ";
     $sql = mysqli_query($conn,$display);
     while($row = mysqli_fetch_assoc($sql))
     {
    echo"
    <tr>
    <td ><b>".$row['reid']."</b></td>";
    echo"<td ><b>".$row['retname']."</b></td>";
    echo"<td ><b>".$row['retaddress']."</b></td>";
    echo"<td><b>".$row['reemail']."</b></td>
    <td><b>".$row['replace']."</b></td>
    <td><b>".$row['reproduct']."</b></td>
    <td><b>".$row['reprice']."</b></td>
    <td><b>".$row['requandity']."</b></td>
    <td><b>".$row['retotal']."</b></td>
    <td><b>".$row['bookdate']."</b></td>
    <td><b>".$row['redate']."</b></td>
    <td><b>".$row['discription']."</b></td>
    <td><a href= 'deletereport.php?rid=$row[reid]' class=bttn> cancel </a></td>
    </tr>
    <style>
     .bttn{
        background-color: #48a041;

        text-decoration:none;
        padding-bottom:5px;
        padding-top:5px;
        padding-left:5px;
        padding-right:5px;
        border: 1px solid ;
        border-radius:4px;
        align-item:center;
        font-size:16px;
        color:aliceblue;
        font-shadow:none;
        
     }
    </style>";
}
     //}
    ?>
         
                </table>
            </div>    


         


</form>
</div>

            
            
            
        </div><!-- End row -->
    </div><!-- End container -->
    </div><!-- End container_gray_bg -->
