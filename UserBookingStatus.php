<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Login Form</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Login Form Template" name="keywords">
        <meta content="Login Form Template" name="description">

         <!-- Animation CSS -->
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

        
        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap"
            rel="stylesheet">
        
        <!-- Icon Font Stylesheet -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
        
        <!-- Libraries Stylesheet -->
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        
        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        
        <!-- Template Stylesheet -->
        <link href="css/style_all.css" rel="stylesheet">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        
    </head>
    
    <body>
    
        <!-- Navbar Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-dark py-lg-0">
            <a href="index.php" class="navbar-brand p-0">
                <h1 class="m-0">
                    <img src="img\im\logo.png" alt=""  id="logoimg" width="45px" height="55px">
                    <i class=""></i>Hire Car Driver
                </h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse" style="margin-right: 2%;">
                <div class="navbar-nav ms-auto py-0">
                    <a href="UserDashbord.php" class="nav-item nav-link ">Home</a>
                    <a href="UserYourprofile.php" class="nav-item nav-link ">Your profile</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Services</a>
                        <div class="dropdown-menu m-0">
                            <a href="hourly.php" class="dropdown-item">Hourly Driver</a>
                            <a href="temporary.php" class="dropdown-item">Temporary Driver</a>
                            <a href="Outstation.php" class="dropdown-item">Outsation Driver</a>
                            <a href="Night.php" class="dropdown-item">Night Driver</a>
                            <a href="Permanent.php" class="dropdown-item">Permanent Driver</a>
                        </div>
                    </div>
                    <a href="UserBookingStatus.php" class="nav-item nav-link active">Booking Status</a>
                    <a href="about.php" class="nav-item nav-link">About Us</a>
                    <a href="contact.php" class="nav-item nav-link">Contact Us</a>
                </div>
                <a href="index.php" class="btn btn-primary py-2 px-4 ms-3">logout</a>
            </div>
        </nav>
    </div>
    <!-- Navbar END -->
        <div class="container-fluid bg-primary py-5 bg-headerDBS" style="margin-bottom: 50px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn" >Booking Status</h1>
                </div>
            </div>
        </div>

  


    
<!-- Footer Start -->
<?php include 'footerUser.php'?>
    
    <!-- Footer End -->

   <!-- JavaScript Libraries -->
   <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>


    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    
    
      
      <!-- Animation js -->
      <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>


</body>