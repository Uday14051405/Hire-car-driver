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
                    <a href="DriverDashboard.php" class="nav-item nav-link active">Home</a>
                    <a href="DriverYourprofile.php" class="nav-item nav-link">Your profile</a>
                    <a href="DriverBookingStatus.php" class="nav-item nav-link">Booking Status</a>
                    <a href="about.php" class="nav-item nav-link">About Us</a>
                    <a href="contact.php" class="nav-item nav-link">Contact Us</a>
                </div>
                <a href="index.php" class="btn btn-primary py-2 px-4 ms-3">logout</a>
            </div>
        </nav>
    </div>
    <!-- Navbar END -->
        <div class="container-fluid bg-primary py-5 bg-headerD" style="margin-bottom: 50px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn" >Driver Dashboard</h1>
                </div>
            </div>
        </div>


    <!-- Welcome paragraph  -->
<section class="team" style="padding: 40px 0;">
  <div class="container trustBadges">
    <div class="row text-center collapse show" id="readMore1" style>
      <h2 class="fw-bold text-primary section-title text-center py-4" style="position:relative;margin-bottom:60px;" data-aos="flip-left"data-aos-easing="ease-out-cubic"data-aos-duration="2000">Your Personalized Hub for Managing Inquiries and Details</h2>
      <div class="moreText" data-aos="fade-up" data-aos-anchor-placement="top-center" data-aos-duration="2000">
        <p style="text-align: justify;">
        Welcome to your dedicated Driver Dashboard on the Hire Car Driver platform. This exclusive space is designed to provide you with a personalized experience where you can conveniently access and manage all your inquiries and details. As a valued driver on our platform, your comfort and convenience are our top priorities, and this dashboard is tailored to cater to your specific needs.
          <br><br>
          Within this dashboard, you'll find everything you need to efficiently handle inquiries and view important details related to your driver profile. Whether you're checking for new booking requests, reviewing your schedule, or updating your contact information, this dashboard serves as your central hub for all driver-related activities.
          <br><br>
          We understand the importance of transparency and ease of access when it comes to managing your driver details and inquiries. That's why we've created this intuitive dashboard interface, allowing you to navigate effortlessly and find the information you need with just a few clicks.
          <br><br>
          So, sit back, relax, and explore your personalized Driver Dashboard. We're here to support you every step of the way as you continue to provide exceptional service to our valued customers. Welcome to your driver-centric space on the Hire Car Driver platform.
        </p>
      </div>
    </div>
  </div>
</section>
    <!-- Welcome paragraph End -->


   <!-- Service Start -->
   <div class="container-fluid py-5" id="services">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-5 mb-5 mx-auto" style="max-width: 600px;" data-aos="flip-up" data-aos-duration="2000">
                <h1 class="fw-bold text-primary text-uppercase">Explore Our Services</h1>
                    <!-- <h5 class="mb-0 ">We prioritize your safety.Our drivers are thoroughly vetted for your peaceof mind</h5> -->
            </div>
            <div class="ourValue_side_circle">
                
                <div class=" our-values section-inner" id="feature">

                    <div class="value" data-aos="fade-down-right" data-aos-duration="2000">
                        <div class="value-img"> <a href="DriverYourprofile.php"><img src="./img/your_profile_gif.gif" id="hourly_img_id"
                                alt=""></a>
                        </div>
                        <div class="value-content">
                            <a href="DriverYourprofile.php"><h2 class="driver_heading_gap">Your Profile</h2></a>
                        </div>
                    </div>

                    <div class="value" data-aos="fade-down-left" data-aos-duration="2000">
                        <div class="value-img">
                            <a href="DriverBookingStatus.php"><img src="./img/booking_statusgif.gif" alt=""></a>
                        </div>
                        <div class="value-content">
                            <a href="DriverBookingStatus.php"><h2>Booking Status</h2></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Service End -->



    
<!-- footer Start -->
<?php 
include 'footerDriver.php';
?>
<!-- footer End -->

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