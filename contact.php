<?php
    session_start();
?>
<!DOCTYPE temporary>
<temporary lang="en">

<head>
    <meta charset="utf-8">
    <title>Hire a Driver</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free temporary Templates" name="keywords">
    <meta content="Free temporary Templates" name="description">

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

</head>

<body>
    <!-- Navbar-->
  
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-dark  py-lg-0">
            <a href="index.php" class="navbar-brand p-0">
                <h1 class="m-0">
                    <img src="img\im\logo.png" alt="" width="45px" height="50px">
                    <i class=""></i>Hire Car Driver
                </h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse"style="margin-right: 2%;">
                <div class="navbar-nav ms-auto py-0">
                    <!--Home navbar  -->
                    <?php    
                    if($_SESSION['count'] != 0)
                    {
                        ?>
                        <a href="UserDashbord.php" class="nav-item nav-link">Home</a>
                        <?php
                    }
                    else if($_SESSION['count1'] == 1)
                    {
                        ?>
                        <a href="DriverDashboard.php" class="nav-item nav-link">Home</a>
                        <?php
                    }
                    else{
                        ?>
                        <a href="index.php" class="nav-item nav-link">Home</a>
                        <?php
                    }
                    // Home navbar End

                    // your profile navbar End 
                    if($_SESSION['count'] != 0)
                    {
                        ?>
                        <a href="UserYourprofile.php" class="nav-item nav-link">Your profile</a>
                        <?php
                    }
                    else if($_SESSION['count1'] == 1)
                    {
                        ?>
                        <a href="DriverYourprofile.php" class="nav-item nav-link">Your profile</a>
                        <?php
                    }
                    ?>
                    <!--your profile navbar End -->

                    <!--Services navbar-->
                    <?php
                    if($_SESSION['count1'] != 1)
                    {
                        ?>
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
                    <?php
                    }
                    ?>
                    <!--Services navbar END -->

                    <!-- Booking status navbar-->
                    <?php
                    if($_SESSION['count'] != 0)
                    {
                        ?>
                        <a href="UserBookingStatus.php" class="nav-item nav-link">Booking Status</a>
                        <?php
                    }
                    else if($_SESSION['count1'] == 1)
                    {
                        ?>
                        <a href="DriverBookingStatus.php" class="nav-item nav-link">Booking Status</a>
                        <?php
                    }
                    ?>
                    <!-- Booking status navbar End -->

                    <!-- about contact navbar -->
                    <a href="about.php" class="nav-item nav-link ">About Us</a>

                    <a href="contact.php" class="nav-item nav-link active">Contact Us</a>
                    <!-- about contact navbar END-->
                </div>

                <!-- Logout navbar -->
                <?php
                if($_SESSION['count'] != 0)
                {
                    ?>
                    <a href="index.php" class="btn btn-primary py-2 px-4 ms-3">Logout</a>
                    <?php
                }
                else if($_SESSION['count1'] != 0)
                {
                    ?>
                    <a href="index.php" class="btn btn-primary py-2 px-4 ms-3">Logout</a>
                    <?php
                }
                else{
                    ?>
                    <a href="login.php" class="btn btn-primary py-2 px-4 ms-3">Driver Portal</a>
                    <?php
                }
                ?>
                <!-- Logout navbar End -->
            </div>
        </nav>

        <div class="container-fluid bg-primary py-5 bg-headerC" style="margin-bottom: 50px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn"  id="reflect">Contant Us</h1>
                </div>
            </div>
        </div>

    </div>
    <!-- End Navbar -->

    <!-- Paragraph -->
<section class="team" style="padding: 20px 0;">
    <div class="container trustBadges">
        <!-- <h2 class="fw-bold text-primary text-center mb-3">Drivers on Hourly Basis</h1> -->
            <div class="row text-center collapse show" id="readMore1" style>
                <div class="col-md-7 moreText">
                    <p style="text-align: justify;" data-aos="fade-right" data-aos-duration="2000">
                    At Hire Car Driver, we value your feedback, inquiries, and suggestions. Our dedicated team is here to assist you with any questions or concerns you may have regarding our services. Whether you're looking for more information about our car hire options, need assistance with a booking, or have feedback to share, we're here to help.
                    <br><br>
                    You can reach out to us through multiple channels for your convenience. If you prefer to speak with a member of our team directly, you can give us a call at [phone number]. Our friendly and knowledgeable customer service representatives are available [hours of operation] to assist you with any inquiries you may have.
                    <br><br>
                    Alternatively, you can reach us via email at [email address]. Whether you have a question about our services or need assistance with a specific booking, our team will respond promptly to your email inquiries, providing you with the assistance you need in a timely manner.
                    <br><br>
                    For general inquiries or feedback, you can also fill out the contact form provided on our website. Simply enter your name, email address, and message, and our team will get back to you as soon as possible.
                    <br><br>
                    Additionally, we understand the importance of social media in today's digital age. You can connect with us on our social media platforms, including [list of social media platforms], where you can stay updated on our latest news, promotions, and announcements, as well as reach out to us with any questions or feedback.
                    </p>
                </div>
                <div class="col-md-5">
                    <center><img src="./img/contactus-content-gif.gif" alt="" class="vert-mover" style="width:100%" data-aos="fade-left" data-aos-duration="2000"/></center>
                    <!-- S:\Xampp\htdocs\phpt\Hire a Driver\img\about.jpg -->
                </div>
            </div>
    </div>
</section>
 
    <!-- End Paragraph -->

 <!-- Footer Start -->
 <?php
    if($_SESSION['count'] != 0)
    {
        include 'footerUser.php';
    }
    else if($_SESSION['count1'] == 1)
    {
        include 'footerDriver.php';
    }
    else{
        include 'footer.php';
      
    }
?>
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

       <!-- Animation js      -->
       <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>


</body>

</temporary>