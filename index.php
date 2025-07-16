<?php
session_start();
$_SESSION['path'] = 0;
$_SESSION['count'] = 0;
$_SESSION['count1'] = 0;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Hire a Driver</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">
    
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
    <style>
    .carousel-item {
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

.carousel-caption {
    position: relative;
    z-index: 1;
}

#read_more_about:hover{
    border: 2px solid #06A3DA;
    /* border-radius: 10px; */
    padding: 6px;
}

#about_para_421{
    /* padding: 20px 0px 20px; */
    padding: 20px 100px 20px;
}

.py-md-3{
    margin-top: 50px;
}

#content_home{
    margin-top:75px;
}
.py-5{
    padding-bottom: 0rem !important;
}

</style>
</head>

<body>

    <!-- Navbar & Carousel Start -->
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
                    <a href="index.php" class="nav-item nav-link active ">Home</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle " data-bs-toggle="dropdown">Services</a>
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
                <a href="login.php" class="btn btn-primary py-2 px-4 ms-3">Driver Portal</a>
            </div>
        </nav>
    </div>

    <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" style="background-image: url('img/carousel-1.jpg'); height:780px;" >
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center" style="height:780px;">
                    <div class="p-3 pt" style="max-width: 900px;">
                        <h5 class="text-white text-uppercase mb-3 animated slideInDown">Your driver, just a click
                            away</h5>

                        <h1>
                            <a href="" class="typewrite" data-period="2000"
                                data-type='[ "Seamless rides at your fingertips", "Drive away with a single tap"]'>
                                <span class="wrap"></span>
                            </a>
                        </h1>
                        <script>
                        var TxtType = function(el, toRotate, period) {
                            this.toRotate = toRotate;
                            this.el = el;
                            this.loopNum = 0;
                            this.period = parseInt(period, 10) || 2000;
                            this.txt = '';
                            this.tick();
                            this.isDeleting = false;
                        };

                        TxtType.prototype.tick = function() {
                            var i = this.loopNum % this.toRotate.length;
                            var fullTxt = this.toRotate[i];

                            if (this.isDeleting) {
                                this.txt = fullTxt.substring(0, this.txt.length - 1);
                            } else {
                                this.txt = fullTxt.substring(0, this.txt.length + 1);
                            }

                            this.el.innerHTML = '<span class="wrap">' + this.txt + '</span>';

                            var that = this;
                            var delta = 200 - Math.random() * 100;

                            if (this.isDeleting) {
                                delta /= 2;
                            }

                            if (!this.isDeleting && this.txt === fullTxt) {
                                delta = this.period;
                                this.isDeleting = true;
                            } else if (this.isDeleting && this.txt === '') {
                                this.isDeleting = false;
                                this.loopNum++;
                                delta = 500;
                            }

                            setTimeout(function() {
                                that.tick();
                            }, delta);
                        };

                        window.onload = function() {
                            var elements = document.getElementsByClassName('typewrite');
                            for (var i = 0; i < elements.length; i++) {
                                var toRotate = elements[i].getAttribute('data-type');
                                var period = elements[i].getAttribute('data-period');
                                if (toRotate) {
                                    new TxtType(elements[i], JSON.parse(toRotate), period);
                                }
                            }
                            // INJECT CSS
                            var css = document.createElement("style");
                            css.type = "text/css";
                            css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
                            document.body.appendChild(css);
                        };
                        </script>

                        <a href="UserLogin.php" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Book
                            a driver</a>
                        <!-- onclick="scrollToServices()" -->
                    </div>
                </div>
            </div>
            <div class="carousel-item" style="background-image: url('img/carousel-2.jpg');height:780px;">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center" style="height:780px;">
                    <div class="p-3 pt" style="max-width: 900px;">
                        <h5 class="text-white text-uppercase mb-3 animated slideInDown">Your driver, just a click
                            away</h5>
                        <h1 class="display-1 text-white mb-md-4 animated zoomIn">Where convenience meets the road
                            with a tap</h1>
                        <a href="UserLogin.php" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Book
                            a driver</a>

                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    


    <!-- Welcome paragraph  -->
<section style="margin:4rem 0;">
    <div class="container trustBadges mt-5" >
        <div data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
            <h2 class="fw-bold hello text-primary text-center mb-3 " style="padding:0 8rem;">Effortless Journeys with Our Premier Driver Services by Skilled Professionals</h2>
        </div>
        
        <div data-aos="fade-up" data-aos-anchor-placement="top-center" data-aos-duration="2000"> 
            <p class="text-center lightPara" id="about_para_421" >
                Welcome to Driver on Hire – your gateway to hassle-free and enjoyable journeys! With our premier driver
                on call service, bid farewell to the challenges of driving, parking headaches, and navigating through
                traffic. If you're in search of a reliable driver for rent near you, look no further – we've got you
                covered. Our mission is to deliver exceptional chauffeur services that cater to all your commuting
                needs.</p>
                <p class="text-center">
                    <!-- <a class="custom-anchor" data-bs-toggle="collapse" href="#readMore1" role="button" aria-expanded="true"
                    aria-controls="readMore1">Read More...</a> -->
                    <a class="custom-anchor" href="about.php" id="read_more_about">Read More..</a>
                </p>
            </div>
    </div>
</section>
    <!-- Welcome paragraph End -->


    <!-- content description -->
    <section class="content-desc layout_padding" style="background-color: #f3f5fa;    padding: 0.5rem 0;">
        <div class="container">
            <div data-aos="fade-down" data-aos-duration="1000">

                <h1 class="fw-bold text-primary text-center" id="content_home">Simplify Your Commute with DriveEase</h1>
            </div>
            <div class="section-title text-center position-relative pb-5 mb-5 mx-auto" style="max-width: 600px;"></div>
            <p class="text-center lightPara mb-0" style="margin-bottom:2rem;" data-aos="fade-up" data-aos-anchor-placement="top-center" data-aos-duration="2000">
                Tired of the temporary commute struggles? Choose DriveEase, your go-to solution for hiring
                professional drivers on demand. Whether it's a one-time ride or regular transportation, we've
                got the perfect solution for you. Booking a driver is a breeze with our user-friendly online
                platform. Simply input your pickup and drop-off locations, and we'll connect you with a skilled
                driver tailored to your needs.
            </p><br>
            <p class="text-center">
                <!-- <a class="custom-anchor" data-bs-toggle="collapse" role="button" aria-expanded="true"
                            aria-controls="readMore2" href="#readMore2">Read More...</a> -->
            </p>
            <div class="collapse show" id="readMore2" style>
                <div class="moreText1">
                    <ol>
                        <img src="img/verified.png" class="img-simplify" id="img-simp1" alt="" srcset=""   data-aos="fade-right" data-aos-duration="2000"/>
                        <li class="fw-bold pb-3" data-aos="fade-left" data-aos-duration="2000">
                            Rapid Recruitment and Verified Drivers:
                            <p class="lightPara fw-normal">
                                At DriveEase, your safety and peace of mind are our top priorities. Our drivers
                                undergo rigorous vetting, ensuring they are licensed, well-trained, and
                                trustworthy. With an efficient recruitment process, we guarantee timely
                                availability to seamlessly integrate into your schedule.
                            </p>
                        </li><br>
                        <img src="img/minutes.png" class="img-simplify" id="img-simp2" alt="" srcset="" data-aos="fade-right" data-aos-duration="2000"/>
                        <li class="fw-bold pb-3" data-aos="fade-left" data-aos-duration="2000">
                            60-Minute Driver Arrival Assurance:
                            <p class="lightPara fw-normal">
                                In urgent situations, DriveEase steps up with a commitment – our drivers will
                                reach your location within 60 minutes. The process is straightforward, making it
                                easy and quick to find the perfect fit for your specific requirements.
                            </p>
                        </li><br>

                        <img src="img/personalized.png" class="img-simplify" id="img-simp3" alt="" srcset="" data-aos="fade-right" data-aos-duration="2000"/>
                        <li class="fw-bold pb-3" data-aos="fade-left" data-aos-duration="2000">
                            Tailored Drivers for Personalized Service:
                            <p class="lightPara fw-normal">
                                Experience a journey tailored to your preferences. Our professional drivers are
                                adept at delivering a personalized experience. Whether you have unique needs or
                                own luxury vehicles, we customize our service to ensure a premium and
                                individualized journey for every passenger.
                            </p>
                        </li><br>

                        <img src="img/flexible.png" class="img-simplify" id="img-simp4" alt="" srcset="" data-aos="fade-right" data-aos-duration="2000"/>
                        <li class="fw-bold pb-3" data-aos="fade-left" data-aos-duration="2000">
                            Flexible Hiring Options:
                            <p class="lightPara fw-normal">
                                DriveEase understands that your transportation needs may vary. That's why we
                                offer flexible hiring options, providing reliable and consistent support
                                tailored to your specific requirements. Our long-term driver services guarantee
                                dependable assistance whenever you need it.
                            </p>
                            <!-- <span class="d-block mt-4 fw-normal lightPara">
                                        Embark on a hassle-free commute with DriveEase. Hire a driver today and discover the unparalleled convenience of having a professional driver at your service. Your journey simplified, your peace of mind prioritized – that's the DriveEase commitment!
                                    </span> -->
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!-- End content description -->



    <!-- Service Start -->
    <div class="container-fluid py-5" id="services">
        <div class="container py-5" >
            <div class="section-title text-center position-relative pb-5 mb-5 mx-auto" style="max-width: 600px;" data-aos="flip-up" data-aos-duration="2000">
                <h1 class="fw-bold text-primary text-uppercase">Explore Our Services</h5>
                    <h5 class="mb-0 ">We prioritize your safety.Our drivers are thoroughly vetted for your peace
                        of mind
                </h1>
            </div>
            <div class="ourValue_side_circle">
                <div class=" our-values section-inner" id="feature">

                    <div class="value" data-aos="fade-down-right" data-aos-duration="2000">
                        <div class="value-img">
                             <a href="hourly.php">
                                <img src="./img/hourglass__1.gif" id="hourly_img_id" alt="">
                            </a>
                        </div>
                        <div class="value-content">
                            <a href="hourly.php"><h2 class="driver_heading_gap">Hourly Drivers</h2></a>
                            <p>Hourly drivers excel in delivering personalized and original transportation services for
                                conference attendees, guaranteeing flexibility and convenience that aligns seamlessly
                                with event schedules.</p>
                        </div>
                    </div>

                    <div class="value" data-aos="fade-down" data-aos-duration="2000">
                        <div class="value-img">
                            <a href="temporary.php"><img src="./img/temporary_key.gif" alt=""></a>
                        </div>
                        <div class="value-content">
                            <a href="temporary.php"><h2>Temporary Drivers</h2></a>
                            <p>Temporary drivers fill in during regular driver unavailability or peak demand, providing
                                flexibility and support amid workforce shortages.</p>
                        </div>
                    </div>

                    <div class="value" data-aos="fade-down-left" data-aos-duration="2000">
                        <div class="value-img"> <a href="Outstation.php"><img src="./img/outstation_road.gif" alt=""></a>
                        </div>
                        <div class="value-content">
                            <a href="Outstation.php"><h2>Outstation Drivers</h2></a>
                            <p>Our outstation drivers specialize in ensuring dependable travel beyond hometowns. Their
                                expertise shines in diverse situations, providing a seamless and authentic client
                                experience.</p>
                        </div>
                    </div>

                    <div class="value" data-aos="fade-up-right" data-aos-duration="2000">
                        <div class="value-img"> <a href="Night.php"><img src="./img/moon2.gif" id="night_img_id"
                                alt=""></a>
                        </div>
                        <div class="value-content">
                            <a href="Night.php"><h2 class="driver_heading_gap">Night Drivers</h2></a>
                            <p>Designed for flexibility, our short-term drivers step in during peak demand or when
                                regular drivers are unavailable. This ensures adaptability and continuity, providing
                                support whenever and wherever it's needed.</p>
                        </div>
                    </div>

                    <div class="value" data-aos="fade-up-left" data-aos-duration="2000">
                        <div class="value-img"> <a href="permanent.php"><img src="./img/handshake_permanent.gif" alt=""></a>
                        </div>
                        <div class="value-content">
                            <a href="permanent.php"><h2>Permanent Drivers</h2></a>
                            <p>Dedicated for the long haul, permanent drivers are committed to serving individuals,
                                families, or organizations. They handle pick-up, drop-off, and scheduling preferences
                                with unwavering dedication.</p>
                        </div>
                    </div>

                      
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->





 <!-- Footer Start -->
 <?php include 'footer.php'?>
    
    <!-- Footer End -->


    <!-- Back to Top -->
    <!-- <a href="#" class="btn btn-lg btn-primary  back-to-top"><i class="bi bi-arrow-up"></i></a> -->

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

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>


<script>
  AOS.init();
</script>


</body>
</html>