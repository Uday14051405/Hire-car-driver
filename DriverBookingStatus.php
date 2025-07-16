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
        
        <link href="css/bookinghistory.css" rel="stylesheet">
        
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
                    <a href="DriverDashboard.php" class="nav-item nav-link ">Home</a>
                    <a href="DriverYourprofile.php" class="nav-item nav-link ">Your profile</a>
                    <a href="DriverBookingStatus.php" class="nav-item nav-link active">Booking Status</a>
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


<!-- Booking History -->
<div class="booking_history">
    <div class="history_101">
        <h3>History</h3>
    </div>
    <br>

    <center>
        <div class="search-container">
            <input type="text" class="search-input" placeholder="Search...">
            <button class="search-button"><i class="fa fa-search"></i></button>
        </div>
    </center>
    <center>
        <?php
            // if(isset($_POST['book_hist'])){
                ?>

                <div class="table-responsive table-container">
                <table class="table table-hover table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th>S. No.</th>
                            <th>Trip Id</th>
                            <th>Recipt Id</th>
                            <th>Status</th>
                            <th>Visit Location</th>
                            <th>Date</th>
                            <th>Amount</th>
                            <th>Amount Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>6465456</td>
                            <td>5465465</td>
                            <td>Accepted</td>
                            <td>Panvel</td>
                            <td>24/12/20</td>
                            <td>500/-</td>
                            <td>Paid</td>
                            <td><a href="view.php?id=<?php //echo $res['id']?>"><button class="btn btn-primary"><i class="bi bi-eye-fill"></i> View</button></a></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>-</td>
                            <td>-</td>
                            <td>Rejected</td>
                            <td>Vasai</td>
                            <td>27/12/20</td>
                            <td>-</td>
                            <td>-</td>
                            <td><a href="view.php?id=<?php //echo $res['id']?>"><button class="btn btn-primary"><i class="bi bi-eye-fill"></i> View</button></a></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>7744556</td>
                            <td>8457667</td>
                            <td>Accepted</td>
                            <td>Nala Sopara</td>
                            <td>4/2/20</td>
                            <td>200/-</td>
                            <td>Unpaid</td>
                            <td><a href="view.php?id=<?php //echo $res['id']?>"><button class="btn btn-primary"><i class="bi bi-eye-fill"></i> View</button></a></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>4556546</td>
                            <td>7785554</td>
                            <td>Accepted</td>
                            <td>Virar</td>
                            <td>7/10/20</td>
                            <td>1700/-</td>
                            <td>Paid</td>
                            <td><a href="view.php?id=<?php //echo $res['id']?>"><button class="btn btn-primary"><i class="bi bi-eye-fill"></i> View</button></a></td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>1245863</td>
                            <td>3524177</td>
                            <td>Accepted</td>
                            <td>Boriwali</td>
                            <td>24/1/23</td>
                            <td>1000/-</td>
                            <td>Unpaid</td>
                            <td><a href="view.php?id=<?php //echo $res['id']?>"><button class="btn btn-primary"><i class="bi bi-eye-fill"></i> View</button></a></td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>-</td>
                            <td>-</td>
                            <td>Rejected</td>
                            <td>Churchgate</td>
                            <td>20/12/20</td>
                            <td>-</td>
                            <td>-</td>
                            <td><a href="view.php?id=<?php //echo $res['id']?>"><button class="btn btn-primary"><i class="bi bi-eye-fill"></i> View</button></a></td>
                        </tr>
                        
                    </tbody>
                </table>
                </div>

                <?php
            // }
        ?>
    </center>
</div>
<!-- Booking History End -->

  


    
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