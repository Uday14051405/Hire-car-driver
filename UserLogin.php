<?php
    $conn = mysqli_connect('localhost', 'root', '', 'hire_a_driver');
    if (!$conn) {
        die("Connection Problem => ".mysqli_connect_error($conn));
    }

    session_start();
    // error_reporting(0);
?>
<?php
    $flag = 0;
    $flag1 = 0;
    if(isset($_POST['lgn']))
    {

        $sql = "SELECT * FROM `userregister`";
        $result = mysqli_query($conn,$sql);
		while($d = mysqli_fetch_array($result))
		{
            if($d['email'] == $_POST['mail'])
            {
                if($d['password'] == $_POST['ph'])
                {

                    $check = $_SESSION['path'];
                    $count = 1;
                    if($check == 1){
                        $_SESSION['count'] = $count;
                        echo "<script>window.location='Service_forms/hourly_form.php';</script>";
                    }
                    else if($check == 2){
                        $_SESSION['count'] = $count;
                        echo "<script>window.location='Service_forms/night_form.php';</script>";
                    }
                    else if($check == 3){
                        $_SESSION['count'] = $count;
                        echo "<script>window.location='Service_forms/outstation_form.php';</script>";
                    }
                    else if($check == 4){
                        $_SESSION['count'] = $count;
                        echo "<script>window.location='Service_forms/permanent_form.php';</script>";
                    }
                    else if($check == 5){
                        $_SESSION['count'] = $count;
                        echo "<script>window.location='Service_forms/temporary_form.php';</script>";
                    }
                    else{
                        $_SESSION['count'] = $count;
                        echo "<script>window.location='UserDashbord.php';</script>";
                        
                    }
                }
                else
                {
                    $flag=1;
                }
            }
            else{
                    $flag1=1;

            }
        }
    }
?>

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

        <!-- Stylesheet -->
        <link href="css/logi.css" rel="stylesheet">
    </head>
    <body>

    <!-- Navbar Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-dark py-lg-0" id="newnaav">
            <a href="index.php" class="navbar-brand p-0" >
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
                    <a href="index.php" class="nav-item nav-link ">Home</a>
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
                    <a href="about.php" class="nav-item nav-link">About Us</a>

                    <a href="contact.php" class="nav-item nav-link">Contact Us</a>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar END -->
     <div class="wrapper login-1">
            <div class="container-login" data-aos="flip-left" data-aos-easing="ease-out-cubic"  data-aos-duration="1000">
                <div class="col-left">
                    <div class="login-text">
                        <h2 class="h2_drive_portal">Client Portal</h2>
                        <p>Create your account.<br>It's totally free.</p>
                        <a class="btn" href="/phpt/College_Project/Hire a Driver/Registration_form/UserRegister.php">Sign Up</a>
                        <!-- <img src="\img\im\login.png" alt="" srcset=""> -->
                    </div>
                </div>
                <div class="col-right">
                    <!-- <input type="submit" class="back-button" value="Back" id="back_btn" onclick="back_btn()"> -->
                    <div class="login-form">
                        <h2>Login</h2>
                        <form method="POST">
                            <p>
                                <label>Username or email address<span>*</span></label>
                                <input type="text" placeholder="Username or Email" name="mail"  required>
                                <?php
                                    if($flag1==1)
                                    {
                    
                                        echo "<center><span style='color:Red'>you input Wrong Email Address!</span></center>";
                                    }
                                ?>
                            </p>
                            <!-- <br> -->
                            <p>
                                <label>Password<span>*</span></label>
                                <input type="password" placeholder="Password" name="ph" required>
                                <?php
                                    if($flag==1)
                                    {
                
                                        echo "<center><span style='color:Red'>Wrong Password</span></center>";
                                    }
                                ?>
                            </p>
                            <p>
                                <input type="submit" value="Sign In" name="lgn"/>
                            </p>
                            <p>
                                <a href="Forgetpassword.php">Forget Password?</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
    </div>

<!-- footer Start -->
<?php 
include 'footer.php';
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

             <!-- Animation js      -->
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>

    </body>
</html>

