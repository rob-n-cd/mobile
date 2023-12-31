<!DOCTYPE html>
<html lang="en">
<?php require('../config/autoload.php'); 
include("dbcon.php");
$dao=new DataAccess();


$email=$_SESSION['email'];
$q2="select * from register where email='$email'";
$info1=$dao->query($q2);
if(!isset($_SESSION['email']))
{
    header('location:../login.php');
}
else{
    ?>
    <head>
        <meta charset="utf-8">
        <title>SMART STORE</title>
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

    <body>
    
        <!-- Top Bar Start -->
        <div class="top-bar d-none d-md-block">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="top-bar-left">
                            <div class="text">
                                <i class="fa fa-phone-alt"></i>
                                <p>+1234567890</p>
                            </div>
                            <div class="text">
                                <i class="fa fa-envelope"></i>
                                <p>smartstore.org</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="top-bar-right">
                            <div class="social">
                                <a href="twitter.com"><i class="fab fa-twitter"></i></a>
                                <a href="facebook.com"><i class="fab fa-facebook-f"></i></a>
                                <a href="linkedin.com"><i class="fab fa-linkedin-in"></i></a>
                                <a href="instagram.com"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top Bar End -->

        <!-- Nav Bar Start -->
        <div class="navbar navbar-expand-lg bg-dark navbar-dark rounded-pill">
            <div class="container-fluid">
                <a href="index.html" class="navbar-brand">SMART STORE</a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav ml-auto">
                        <a href="headercat.php" class="nav-item nav-link active">Home</a>
                        <div class="nav-item dropdown">
                        <a href="#"  class="nav-link dropdown-toggle" data-toggle="dropdown">Products</a>
                        <div class="dropdown-menu">
                                <a href="headercom.php" class="dropdown-item">Mobile Companys</a>
                                <a href="headercat.php" class="dropdown-item">Mobile Categorys</a>
                    
                            </div>
                        </div>
                        <style>
                                    .dropdown-item:hover{
                                            background-color: green;
                                    }
                                </style>
                        <a href="carthome.php" class="nav-item nav-link">My-cart</a>
                        <a href="ads.html" class="nav-item nav-link ">+Ads</a>
                        <a href="blog.html" class="nav-item nav-link">About</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu">
                                <a href="viewbookcust.php" class="dropdown-item">Booking Page</a>
                                <a href="#" class="dropdown-item">Return Product</a>
                                <a href="logout.php" class="dropdown-item">logout</a>
                            </div>
                        </div>
                        <a href="#" class="nav-item nav-link"><?= $info1[0]['name'] ?></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Nav Bar End -->
        
        



        
        <!-- Page Header Start -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Upcoming Companies</h2>
                    </div>
                    <div class="col-12">
                        <a href="">Mobile</a>
                        <a href="">Comapnies</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->
        
        
        <!-- Event Start -->
        <div class="event">
            <div class="container">
                <div class="section-header text-center">
                    <p>Upcoming Companies</p>
                    <h2>Be ready for our upcoming Companies</h2>
                </div>
                <div class="row">
                    <?php

     $id = $_GET['id'];
$q="select * from addmobile where status = 1 and    ctid = '$id'";

$info=$dao->query($q);

                    $i=0;
                    while($i<count($info))
                    {
                        ?>

                    <div class="col-lg-6">
                        <div class="card-title event-content" style="background-color:aliceblue;">
                            <img src=<?php echo BASE_URL."upload/".$info[$i]["mimg"]; ?> alt="Image">
                            <div class="event-content">
                                <div class="event-meta">
                                  
                                </div>
                                <div class="event-text">
                                    <h3><?php echo $info[$i]["mname"]?></h3>
                                    <p>
                                        
                                    </p>
                                    <a class="btn btn-custom" href="singleitem.php?id=<?=$info[$i]["mid"]?>">BUY</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                    $i++;
                    }
                        ?>
                </div>
            </div>
        </div>
        <!-- Event End -->
  
        <!-- Page Header Start -->
    
                 <a class="btn btn-custom" href="pastevent.php">Past Companies </a>
                    
                 
        

        <!-- Footer Start -->
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-contact">
                            <h2>Our Head Office</h2>
                            <p><i class="fa fa-map-marker-alt"></i>b143 Street,angamaly, </p>
                            <p><i class="fa fa-phone-alt"></i>+9947126589</p>
                            <p><i class="fa fa-envelope"></i>sacredheart.org</p>
                            <div class="footer-social">
                                <a class="btn btn-custom" href="twitter.com"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-custom" href="www.facebook.com"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-custom" href=""><i class="fab fa-youtube"></i></a>
                                <a class="btn btn-custom" href=""><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-custom" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-link">
                            <h2>Popular Links</h2>
                            <a href="">About Us</a>
                            <a href="">Contact Us</a>
                            <a href="">Popular Causes</a>
                            <a href="">Upcoming Events</a>
                            <a href="">Latest Blog</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-link">
                            <h2>Useful Links</h2>
                            <a href="">Terms of use</a>
                            <a href="">Privacy policy</a>
                            <a href="">Cookies</a>
                            <a href="">Help</a>
                            <a href="">FQAs</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-newsletter">
                            <h2>Newsletter</h2>
                            <form>
                                <input class="form-control" placeholder="Email goes here">
                                <button class="btn btn-custom">Submit</button>
                                <label>Don't worry, we don't spam!</label>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container copyright">
                <div class="row">
                    <div class="col-md-6">
                        <p>&copy; <a href="#">sacred heart orphanage</a>, All Right Reserved.</p>
                    </div>
                    <div class="col-md-6">
                        <p>Designed By <a href="https://htmlcodex.com">HTML Codex</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->

        <!-- Back to top button -->
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        
        <!-- Pre Loader -->
        <div id="loader" class="show">
            <div class="loader"></div>
        </div>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/counterup/counterup.min.js"></script>
        <script src="lib/parallax/parallax.min.js"></script>
        
        <!-- Contact Javascript File -->
        <script src="mail/jqBootstrapValidation.min.js"></script>
        <script src="mail/contact.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
        <?php } ?>
    </body>
</html>
  
   