<!DOCTYPE html>
<html lang="en">

<head>
<?php include('header.php')?>
</head>
    <!-- Navbar End -->

    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8 col text-center mb-4">
                    <h6 class="text-primary font-weight-normal text-uppercase mb-3">ITEMS</h6>
                    <h1 class="mb-4">Our Items Lineup</h1>
                </div>
            </div>
    
            <div class="row">
                <div class="col-12 text-center mb-2">

                    <ul class="list-inline mb-4" id="portfolio-flters">
                        
                    </ul>
                </div>
            </div>

           



            <div class="row mx-1 portfolio-container">
            <?php
               $cid=$_GET['id'];
              $q="select * from item where status=1 and cid=".$cid;

              $info=$dao->query($q);
              //print_r($info);

              $i=0;
              if(is_countable($info)) {
              while($i<count($info))

              { $s=$info[$i]["image"];

  ?>
               
                <div class="col-lg-4 col-md-6 col-sm-12 p-0 portfolio-item first">
                    <div class="position-relative overflow-hidden">
                        <div class="portfolio-img d-flex align-items-center justify-content-center">
                            <img class="img-fluid" src=<?php echo BASE_URL."uploads/".$info[$i]["image"]; ?> alt="">
                        </div>
                        <div class="portfolio-text bg-secondary d-flex flex-column align-items-center justify-content-center">
                            <h4 class="text-white mb-4">Item Name : <?php echo $info[$i]["iname"]?></h4>
                            <div class="d-flex align-items-center justify-content-center">
                                

                                <a class="btn btn-outline-primary m-1" href="login.php?id=<?=$info[$i]["iid"]?>">
                                <i class="fa fa-link"></i>
                                </a>
                                
                            </div>
                        </div>
                    </div>
                    <h4><?php echo $info[$i]["iname"]?></h4> </a>
                </div>
                
                <?php
                $i++;
              }
            }
             else{
              ?>
              <?php echo "No Item Found";}?>
             
              


</div> 
        </div>
    </div>
    <!-- Projects End -->


    

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="template/lib/easing/easing.min.js"></script>
    <script src="template/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="template/lib/isotope/isotope.pkgd.min.js"></script>
    <script src="template/lib/lightbox/js/lightbox.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="template/mail/jqBootstrapValidation.min.js"></script>
    <script src="template/mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="template/js/main.js"></script>
</body>

</html>