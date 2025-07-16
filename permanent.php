<?php
session_start();
$_SESSION['path'] = 4;
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
    <link href="css/Pricelist.css" rel="stylesheet">

   
</head>

<body>
    <!-- Navbar-->
    <?php include 'NavbarServices.php'?>
    <!-- End Navbar -->

        <div class="container-fluid bg-primary py-5 bg-headerP" style="margin-bottom: 50px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn"  >Permanent Driver</h1>
                </div>
            </div>
        </div>

 
    <!-- End Navbar -->

    <!-- Paragraph -->
<section class="team" >
  <div class="container trustBadges">
   <div class="row text-center collapse show" id="readMore1" style>
      <h2 class="fw-bold text-primary section-title text-center py-4" style="position:relative;margin-bottom:60px;" data-aos="flip-left"data-aos-easing="ease-out-cubic"data-aos-duration="2000">Book Driver for Outstation</h2>
        <div class="moreText" data-aos="fade-up" data-aos-anchor-placement="top-center" data-aos-duration="2000">
          <p style="text-align: justify;">
            "Securing reliable permanent drivers can often be a challenging task, but Driver on Hire simplifies the process for you. Our team comprises skilled and professional drivers, ready to cater to your diverse transportation needs. Whether it's for personal commutes, corporate travel, or any other occasion, we have a comprehensive selection of experienced drivers available. These drivers are committed to providing a dependable service for long-term engagements, ensuring a trustworthy driving associate is at your disposal whenever needed."
            <br><br>
            "Our drivers are well-acquainted with local routes, guaranteeing smooth and efficient journeys. Prioritizing safety and flexibility, they uphold punctuality and professionalism, offering you a comfortable and secure travel experience. Drawing on years of experience in vehicle handling and route navigation, our drivers bring a wealth of expertise to ensure your satisfaction.."
            <br><br>
            "Driver on Hire takes pride in offering a seamless solution to hire permanent drivers, requiring just a few clicks. Our straightforward and hassle-free hiring process allows you to communicate your requirements, and we will promptly match you with the perfect permanent car driver based on your preferences. Enjoy the convenience and comfort of our Driver on Hire services. Contact us today to secure permanent drivers tailored to your specific needs. Trust us with your transportation requirements, and we commit to delivering excellence in every ride."
          </p>
      </div>
    </div>
  </div>
</section>
    <!-- End Paragraph -->

    <!-- Price list Start-->
  <div class="main_container_details_price" style="padding-bottom: 50px;">
    <div class="container_details_p">
      <h1 class="title_details" data-aos="fade-down" data-aos-duration="2000">Permanent Driver Charges</h1>


      <div class="container mt-5 column_details_p" data-aos="zoom-in-up" data-aos-duration="2000">
            <div class="card pricing-box rate_box_details_p">
                <div class="card-body">
                  <div id="drop_rate_list">
                    <!-- <img src="img/im/service_logo/down-list2.png" alt="" id="drop-list"> -->
                    <select id="plan-select" class="form-control mb-3" onmouseover="showOptions()" onchange="showPlanDetails()" >

                        <option value="3month">3 Month Membership</option>
                        <option value="6month">6 Month Membership</option>
                        <option value="9month">9 Month Membership</option>
                        <option value="12month">12 Month Membership</option>


                    </select>
                  </div>

                    <div class="price__table">
                      <div class="pricingTable" id="plan-details-3month">
                        <ul class="pricingTable-firstTable">
                          <li class="pricingTable-firstTable_table">
                            <h1 class="pricingTable-firstTable_table__header" id="vehicle__header_manual">Manual / Automatic Car</h1>
                            <ul class="pricingTable-firstTable_table__options">
                              <li>3 Month Membership without replacement - INR 30000/-</li>
                              <li>3 Month Membership with Two replacement - INR 32000/-</li>
                              <li>3 Month Membership with Unlimited replacement - INR 35000/-</li>
                            </ul>
                            <?php
                              if($_SESSION['count'] == 1)
                              {
                              
                              ?>
                                <a href="Service_forms/permanent_form.php">
                                  <button class="pricingTable-firstTable_table__getstart">BOOK NOW</button>
                                </a>
                              <?php
                              }
                              else
                              {
                              ?>
                                <a href="Userlogin.php">
                                  <button class="pricingTable-firstTable_table__getstart">BOOK NOW</button>
                                </a>
                              <?php
                              }
                            ?>
                          </li>
                          <li class="pricingTable-firstTable_table">
                            <h1 class="pricingTable-firstTable_table__header" id="vehicle__header_luxury">Luxury Car</h1>
                            <ul class="pricingTable-firstTable_table__options">
                              <li>3 Month Membership without replacement - INR 30000/-</li>
                              <li>3 Month Membership with Two replacement - INR 32000/-</li>
                              <li>3 Month Membership with Unlimited replacement - INR 35000/-</li>
                            </ul>
                            <?php
                              if($_SESSION['count'] == 1)
                              {
                              
                              ?>
                                <a href="Service_forms/permanent_form.php">
                                  <button class="pricingTable-firstTable_table__getstart">BOOK NOW</button>
                                </a>
                              <?php
                              }
                              else
                              {
                              ?>
                                <a href="Userlogin.php">
                                  <button class="pricingTable-firstTable_table__getstart">BOOK NOW</button>
                                </a>
                              <?php
                              }
                            ?>
                          </li>
                        </ul>
                      </div>
                    </div>


                    <div class="price__table">
                      <div class="pricingTable" id="plan-details-6month" style="display: none;">
                        <ul class="pricingTable-firstTable">
                          <li class="pricingTable-firstTable_table">
                            <h1 class="pricingTable-firstTable_table__header" id="vehicle__header_manual">Manual / Automatic Car</h1>
                            <ul class="pricingTable-firstTable_table__options">
                              <li>6 Month Membership without replacement - INR 55000/-</li>
                              <li>6 Month Membership with Two replacement - INR 56000/-</li>
                              <li>6 Month Membership with Unlimited replacement - INR 57000/-</li>
                            </ul>
                            <?php
                              if($_SESSION['count'] == 1)
                              {
                              
                              ?>
                                <a href="Service_forms/permanent_form.php">
                                  <button class="pricingTable-firstTable_table__getstart">BOOK NOW</button>
                                </a>
                              <?php
                              }
                              else
                              {
                              ?>
                                <a href="Userlogin.php">
                                  <button class="pricingTable-firstTable_table__getstart">BOOK NOW</button>
                                </a>
                              <?php
                              }
                            ?>
                          </li>
                          <li class="pricingTable-firstTable_table">
                            <h1 class="pricingTable-firstTable_table__header" id="vehicle__header_luxury">Luxury Car</h1>
                            <ul class="pricingTable-firstTable_table__options">
                              <li>6 Month Membership without replacement - INR 56000/-</li>
                              <li>6 Month Membership with Two replacement - INR 57000/-</li>
                              <li>6 Month Membership with Unlimited replacement - INR 58000/-</li>
                            </ul>
                            <?php
                              if($_SESSION['count'] == 1)
                              {
                              
                              ?>
                                <a href="Service_forms/permanent_form.php">
                                  <button class="pricingTable-firstTable_table__getstart">BOOK NOW</button>
                                </a>
                              <?php
                              }
                              else
                              {
                              ?>
                                <a href="Userlogin.php">
                                  <button class="pricingTable-firstTable_table__getstart">BOOK NOW</button>
                                </a>
                              <?php
                              }
                            ?>
                          </li>
                        </ul>
                      </div>
                    </div>


                    <div class="price__table">
                      <div class="pricingTable" id="plan-details-9month" style="display: none;">
                        <ul class="pricingTable-firstTable">
                          <li class="pricingTable-firstTable_table">
                            <h1 class="pricingTable-firstTable_table__header" id="vehicle__header_manual">Manual / Automatic Car</h1>
                            <ul class="pricingTable-firstTable_table__options">
                              <li>9 Month Membership without replacement - INR 85000/-</li>
                              <li>9 Month Membership with Two replacement - INR 86000/-</li>
                              <li>9 Month Membership with Unlimited replacement - INR 87000/-</li>
                            </ul>
                              <?php
                              if($_SESSION['count'] == 1)
                              {
                              
                              ?>
                                <a href="Service_forms/permanent_form.php">
                                  <button class="pricingTable-firstTable_table__getstart">BOOK NOW</button>
                                </a>
                              <?php
                              }
                              else
                              {
                              ?>
                                <a href="Userlogin.php">
                                  <button class="pricingTable-firstTable_table__getstart">BOOK NOW</button>
                                </a>
                              <?php
                              }
                            ?>
                          </li>
                          <li class="pricingTable-firstTable_table">
                            <h1 class="pricingTable-firstTable_table__header" id="vehicle__header_luxury">Luxury Car</h1>
                            <ul class="pricingTable-firstTable_table__options">
                              <li>9 Month Membership without replacement - INR 86000/-</li>
                              <li>9 Month Membership with Two replacement - INR 87000/-</li>
                              <li>9 Month Membership with Unlimited replacement - INR 88000/-</li>
                            </ul>
                            <?php
                              if($_SESSION['count'] == 1)
                              {
                              
                              ?>
                                <a href="Service_forms/permanent_form.php">
                                  <button class="pricingTable-firstTable_table__getstart">BOOK NOW</button>
                                </a>
                              <?php
                              }
                              else
                              {
                              ?>
                                <a href="Userlogin.php">
                                  <button class="pricingTable-firstTable_table__getstart">BOOK NOW</button>
                                </a>
                              <?php
                              }
                            ?>
                          </li>
                        </ul>
                      </div>
                    </div>


                    <div class="price__table">
                      <div class="pricingTable" id="plan-details-12month" style="display: none;">
                        <ul class="pricingTable-firstTable">
                          <li class="pricingTable-firstTable_table">
                            <h1 class="pricingTable-firstTable_table__header" id="vehicle__header_manual">Manual / Automatic Car</h1>
                            <ul class="pricingTable-firstTable_table__options">
                              <li>12 Month Membership without replacement - INR 115000/-</li>
                              <li>12 Month Membership with Two replacement - INR 117000/-</li>
                              <li>12 Month Membership with Unlimited replacement - INR 120000/-</li>
                            </ul>
                            <?php
                              if($_SESSION['count'] == 1)
                              {
                              
                              ?>
                                <a href="Service_forms/permanent_form.php">
                                  <button class="pricingTable-firstTable_table__getstart">BOOK NOW</button>
                                </a>
                              <?php
                              }
                              else
                              {
                              ?>
                                <a href="Userlogin.php">
                                  <button class="pricingTable-firstTable_table__getstart">BOOK NOW</button>
                                </a>
                              <?php
                              }
                            ?>
                          </li>
                          <li class="pricingTable-firstTable_table">
                            <h1 class="pricingTable-firstTable_table__header" id="vehicle__header_luxury">Luxury Car</h1>
                            <ul class="pricingTable-firstTable_table__options">
                              <li>12 Month Membership without replacement - INR 115000/-</li>
                              <li>12 Month Membership with Two replacement - INR 117000/-</li>
                              <li>12 Month Membership with Unlimited replacement - INR 120000/-</li>
                            </ul>
                            <?php
                              if($_SESSION['count'] == 1)
                              {
                              
                              ?>
                                <a href="Service_forms/permanent_form.php">
                                  <button class="pricingTable-firstTable_table__getstart">BOOK NOW</button>
                                </a>
                              <?php
                              }
                              else
                              {
                              ?>
                                <a href="Userlogin.php">
                                  <button class="pricingTable-firstTable_table__getstart">BOOK NOW</button>
                                </a>
                              <?php
                              }
                            ?>
                          </li>
                        </ul>
                      </div>
                    </div>


                  </div>

            </div>
        </div>

    </div>
  </div>
    <!-- Price list End-->

 <!-- Footer Start -->
 <?php
    if($_SESSION['count'] != 0)
    {
        include 'footerUser.php';
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


    <script>

function showOptions() {
        var selectElement = document.getElementById("plan-select");
        selectElement.size = selectElement.options.length;
      }

      // Hide options when mouse leaves the select element
      document.getElementById("plan-select").onmouseleave = function() {
        this.size = 1;
      };
        document.getElementById("drop_rate_list").blur(); // Close the dropdown

  function showPlanDetails() {
    var selectElement = document.getElementById("plan-select");
    var selectedOption = selectElement.options[selectElement.selectedIndex].value;
    var planDetails = document.getElementsByClassName("pricingTable");
    for (var i = 0; i < planDetails.length; i++) {
      if (planDetails[i].id === "plan-details-" + selectedOption) {
        planDetails[i].style.display = "block";
      } else {
        planDetails[i].style.display = "none";
      }
    }
  }
</script>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>


<script>
  AOS.init();
</script>

</body>

</html>
