<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

 <!-- Animation CSS -->
 <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

<!-- Favicon -->
<link href="img/favicon.ico" rel="icon">

<!-- Google Web Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">

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

 <link href="zdemprofile.css" rel="stylesheet">

<body>
  <div class="main-content">
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
                    <a href="DriverYourprofile.php" class="nav-item nav-link active">Your profile</a>
                    <a href="DriverBookingStatus.php" class="nav-item nav-link ">Booking Status</a>
                    <a href="about.php" class="nav-item nav-link">About Us</a>
                    <a href="contact.php" class="nav-item nav-link">Contact Us</a>
                </div>
                <a href="index.php" class="btn btn-primary py-2 px-4 ms-3">logout</a>
            </div>
        </nav>
    </div>
      <!-- Navbar END -->
        
    <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center bg-headerYP">
      <!-- Mask -->
      <span class="mask bg-gradient-default opacity-8"></span>
      <!-- Header container -->
      <div class="container-fluid d-flex align-items-center">
        <div class="row">
          <div class="col-lg-7 col-md-10">
            <h1 class="display-2 text-white">Hello Dhawal</h1>
            <p class="text-white mt-0 mb-5">This is your profile page. You can see the progress you've made with your work and manage your projects or assigned tasks</p>
            <a href="#!" class="btn btn-info" style="color:white;">Edit profile</a>
          </div>
        </div>
      </div>
    </div>



    <!-- Page content -->
        <div class="col-xl-8 order-xl-1">
          <div class="card bg-secondary shadow">
            <div class="row justify-content-center">
              <div class="col-lg-3 order-lg-2">
                <div class="card-profile-image">
                  <a href="#">
                    <img src="img/profilePhoto.png" class="rounded-circle">
                  </a>
                </div>
              </div>
            </div>
            <div class="card-header bg-white border-0">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">My account</h3>
                </div>
                <!-- <div class="col-4 text-right">
                  <a href="#!" class="btn btn-sm btn-primary">Settings</a>
                </div> -->
              </div>
            </div>
            <div class="card-body">
              <form>
                <h6 class="heading-small text-muted mb-4">User information</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-username">Full name</label>
                        <input type="text" id="input-username" class="form-control form-control-alternative" placeholder="Username" value="Dhawal">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">Email address</label>
                        <input type="email" id="input-email" class="form-control form-control-alternative" placeholder="dhawal@example.com">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-first-name">Phone number</label>
                        <input type="text" id="input-first-name" class="form-control form-control-alternative" placeholder="First name" value="91687624215">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-last-name">Gender</label>
                        <input type="text" id="input-last-name" class="form-control form-control-alternative" placeholder="Last name" value="Male">
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="my-4">
                <!-- Address -->
                <h6 class="heading-small text-muted mb-4">Contact information</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-address">Address</label>
                        <input id="input-address" class="form-control form-control-alternative" placeholder="Home Address" value="Bld Mihail Kogalniceanu, nr. 8 Bl 1, Sc 1, Ap 09" type="text">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-city">City</label>
                        <input type="text" id="input-city" class="form-control form-control-alternative" placeholder="City" value="Mumbai">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-country">Country</label>
                        <input type="text" id="input-country" class="form-control form-control-alternative" placeholder="Country" value="India">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-country">Postal code</label>
                        <input type="number" id="input-postal-code" class="form-control form-control-alternative" placeholder="400009">
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="my-4">
                 <!-- Documents -->
                 <h6 class="heading-small text-muted mb-4">Documents</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-city">Aadhar Card</label>
                        <input type="text" id="input-city" class="form-control form-control-alternative" placeholder="" value="8459-7894-1864">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-country">PAN Card</label>
                        <input type="text" id="input-country" class="form-control form-control-alternative" placeholder="" value="DJEJS489515">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-country">Driving Licence</label>
                        <input type="number" id="input-postal-code" class="form-control form-control-alternative" placeholder="DL-7819582695">
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="my-4">
                <!-- Driving Proof -->
                <h6 class="heading-small text-muted mb-4">Driving Proofs</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-city">Year of Experience</label>
                        <input type="text" id="input-city" class="form-control form-control-alternative" placeholder="" value="5 year">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-country">Reference</label>
                        <input type="text" id="input-country" class="form-control form-control-alternative" placeholder="" value="Repido">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-country">Vechicle Type</label>
                        <input type="number" id="input-postal-code" class="form-control form-control-alternative" placeholder="Manual">
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="my-4">
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<!-- Footer Start -->
<?php
        include 'footerDriver.php';
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
</body>