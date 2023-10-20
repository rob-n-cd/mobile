<!DOCTYPE html>
<html lang="en">
<?php require('../config/autoload.php'); ?>
<?php
$dao=new DataAccess();
?>
<head>
    <meta charset="utf-8">
    <title>EMMA'S Polymers</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="template/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Oswald:wght@400;500;600&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Flaticon Font -->
    <link href="template/lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="template/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="template/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="template/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid bg-dark py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-lg-left mb-2 mb-lg-0">
                    <div class="d-inline-flex align-items-center">
                        
                    </div>
                </div>
                <div class="col-md-6 text-center text-lg-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-white px-3" href="https://www.facebook.com/login.php">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="text-white px-3" href="https://twitter.com/i/flow/login">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a class="text-white px-3" href="https://www.linkedin.com/login/">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a class="text-white px-3" href="https://www.instagram.com/?hl=en">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a class="text-white pl-3" href="https://www.youtube.com/">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid position-relative nav-bar p-0">
        <div class="container position-relative" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-secondary navbar-dark py-3 py-lg-0 pl-3 pl-lg-5">
                <a href="" class="navbar-brand">
                    <h1 class="m-0 display-5 text-white"><span class="text-primary">EMMA'S </span>  Polymers</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        <a href="index.php" class="nav-item nav-link active">Home</a>
                        <a href="about.php" class="nav-item nav-link">About</a>
                        <a href="products.php" class="nav-item nav-link">Products</a>

                       
                        <a href="viewcart.php" class="nav-item nav-link">My Cart</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Profile</a>
                            <div class="dropdown-menu rounded-0 m-0">
                                <a href="profile.php" class="dropdown-item"><?php echo $_SESSION['email'];?></a>
                                

                               
                                <a href="datepaysel.php" class="dropdown-item">My Payments</a>
                                <a href="cancelbooking.php" class="dropdown-item">Cancel Booking</a>
                                <a href="viewreturn.php" class="dropdown-item">Return Product</a>
                                <a href="order.php" class="dropdown-item">My Orders</a>
                                <a href="feedback.php" class="dropdown-item">Feedback</a>
                                <a href="logout.php" class="dropdown-item">Logout</a>
                                
                                
                            </div>
                        </div>

                        
                        <a href="contact.php" class="nav-item nav-link">Contact Us</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->


    


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