<!-- Navbar CSS End -->
<style>
.navbar-dark .navbar-nav .nav-link {
    font-family: 'Nunito', sans-serif;
    position: relative;
    margin-left: 25px;
    padding: 35px 0;
    color: #FFFFFF;
    font-size: 18px;
    font-weight: 600;
    outline: none;
    transition: .5s;
}

.sticky-top.navbar-dark .navbar-nav .nav-link {
    padding: 20px 0;
    color: var(--dark);
}

.navbar-dark .navbar-nav .nav-link:hover,
.navbar-dark .navbar-nav .nav-link.active {
    color: var(--primary);
}

.navbar-dark .navbar-brand h1 {
    color: #FFFFFF;
}

.navbar-dark .navbar-toggler {
    color: var(--primary) !important;
    border-color: var(--primary) !important;
}



@media (max-width: 991.98px) {
    .sticky-top.navbar-dark {
        position: relative;
        background: #FFFFFF;
    }
    

    .navbar-dark .navbar-nav .nav-link,
    .navbar-dark .navbar-nav .nav-link.show,
    .sticky-top.navbar-dark .navbar-nav .nav-link {
        padding: 10px 0;
        color: var(--dark);
    }

    .navbar-dark .navbar-brand h1 {
        color: var(--primary);
    }
    .navbar-collapse{
        background-color: white;
    }
    nav.navbar.navbar-expand-lg {
        padding-top: 1rem ;
        padding-bottom: 1rem ;
        padding-right: 3rem ;
        padding-left: 3rem ;
    }
    
}

@media (min-width: 992px) {
    .navbar-dark {
        position: absolute;
        width: 100%;
        top: 0;
        left: 0;
        border-bottom: 1px solid rgba(256, 256, 256, .1);
        z-index: 999;
        /* background-color: #091e3e; */
    }
    
    
    .sticky-top.navbar-dark {
        position: fixed;
        background: #FFFFFF;
    }

    .navbar-dark .navbar-nav .nav-link::before {
        position: absolute;
        content: "";
        width: 0;
        height: 2px;
        bottom: -1px;
        left: 50%;
        background: var(--primary);
        transition: .5s;
    }

    .navbar-dark .navbar-nav .nav-link:hover::before,
    .navbar-dark .navbar-nav .nav-link.active::before {
        width: 100%;
        left: 0;
    }

    .navbar-dark .navbar-nav .nav-link.nav-contact::before {
        display: none;
    }

    .sticky-top.navbar-dark .navbar-brand h1 {
        color: var(--primary);
    }
    /* nav.navbar.navbar-expand-lg {
        padding-top: 1rem ;
        padding-bottom: 1rem ;
        padding-right: 3rem ;
        padding-left: 3rem ;
    } */
}
@media (max-width: 320px) {
    .sticky-top.navbar-dark {
        position: relative;
        background: #FFFFFF;
    }

    .navbar-dark .navbar-nav .nav-link,
    .navbar-dark .navbar-nav .nav-link.show,
    .sticky-top.navbar-dark .navbar-nav .nav-link {
        padding: 10px 0;
        color: var(--dark);
    }


    .navbar-dark .navbar-brand h1 {
        color: var(--primary);
    }
    .navbar-collapse{
        background-color: white;
    }
    nav.navbar.navbar-expand-lg {
        padding-top: 1rem ;
        padding-bottom: 1rem ;
        padding-right: 5px;
        padding-left: 10px ;
    }
    
}

@media (min-width: 320px) {
    .navbar-dark {
        position: absolute;
        width: 100%;
        top: 0;
        left: 0;
        border-bottom: 1px solid rgba(256, 256, 256, .1);
        z-index: 999;
        /* background-color: #091e3e; */
    }
    
    
    .sticky-top.navbar-dark {
        position: fixed;
        background: #FFFFFF;
    }

    .navbar-dark .navbar-nav .nav-link::before {
        position: absolute;
        content: "";
        width: 0;
        height: 2px;
        bottom: -1px;
        left: 50%;
        background: var(--primary);
        transition: .5s;
    }

    .navbar-dark .navbar-nav .nav-link:hover::before,
    .navbar-dark .navbar-nav .nav-link.active::before {
        width: 100%;
        left: 0;
    }

    .navbar-dark .navbar-nav .nav-link.nav-contact::before {
        display: none;
    }

    .sticky-top.navbar-dark .navbar-brand h1 {
        color: var(--primary);
    }
    nav.navbar.navbar-expand-lg {
        padding-top: 1rem ;
        padding-bottom: 1rem ;
        padding-right: 5px;
        padding-left: 10px ;
    }
    
}
</style>
<!-- Navbar CSS END -->


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
                <!--Home navbar  -->
                <?php    
                    if($_SESSION['count'] != 0)
                    {
                        ?>
                        <a href="UserDashbord.php" class="nav-item nav-link">Home</a>
                        <?php
                    }
                    else{
                        ?>
                        <a href="index.php" class="nav-item nav-link">Home</a>
                        <?php
                    }
                    ?>
                    <!-- Home navbar End -->

                    <!-- your profile navbar End  -->
                    <?php
                    if($_SESSION['count'] != 0)
                    {
                        ?>
                        <a href="UserYourprofile.php" class="nav-item nav-link">Your profile</a>
                        <?php
                    }
                    ?>
                    <!--your profile navbar End -->

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">Services</a>
                        <div class="dropdown-menu m-0">
                            <a href="hourly.php" class="dropdown-item">Hourly Driver</a>
                            <a href="temporary.php" class="dropdown-item">Temporary Driver</a>
                            <a href="Outstation.php" class="dropdown-item">Outsation Driver</a>
                            <a href="Night.php" class="dropdown-item">Night Driver</a>
                            <a href="Permanent.php" class="dropdown-item">Permanent Driver</a>
                        </div>
                    </div>
                    <!-- Booking status navbar-->
                    <?php
                    if($_SESSION['count'] != 0)
                    {
                        ?>
                        <a href="UserBookingStatus.php" class="nav-item nav-link">Booking Status</a>
                        <?php
                    }
                    ?>
                    <!-- Booking status navbar End -->

                    <!-- about contact navbar -->
                    <a href="about.php" class="nav-item nav-link">About Us</a>

                    <a href="contact.php" class="nav-item nav-link">Contact Us</a>
                     <!-- about contact navbar END-->
                     
                </div>
                <?php
                if($_SESSION['count'] != 0)
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
            </div>
        </nav>
    </div>
    <!-- Navbar END -->


