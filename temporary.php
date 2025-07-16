<?php
  session_start();
  $_SESSION['path'] = 5; 
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

        <div class="container-fluid bg-primary py-5 bg-headerT" style="margin-bottom: 50px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn" >Temporary Driver</h1>
                </div>
            </div>
        </div>

   
    <!-- End Navbar -->

    <!-- Paragraph -->
<section class="team" >
  <div class="container trustBadges">
    <div class="row text-center collapse show" id="readMore1" style>
    <h2 class="fw-bold text-primary section-title text-center py-4" style="position:relative;margin-bottom:60px;" data-aos="flip-left"data-aos-easing="ease-out-cubic"data-aos-duration="2000">Flexible Staffing Solutions: Bring in Temporary Drivers</h2>
      <div class="moreText" data-aos="fade-up" data-aos-anchor-placement="top-center" data-aos-duration="2000"> 
        <p style="text-align: justify;">
            "In times of unexpected travel demands, our top-tier Driver on Hire service is here to support you. Whether it's a business trip, vacation, emergency, or a special event, our team of reliable and skilled temporary drivers stands ready to take the wheel, ensuring a seamless journey."
            <br><br>
            "By entrusting driving responsibilities to our proficient drivers, you gain valuable time to concentrate on your priorities. Our services are customized to meet specific needs, whether for a few hours, a day, or more extended periods. Additionally, opting for a driver from our service offers a cost-effective alternative, saving you money on car ownership and maintenance."
            <br><br>
            "Our temporary drivers undergo rigorous screening and training processes to ensure they are trustworthy professionals behind the wheel. When the need arises for temporary drivers to address your short-term transportation needs, Driver on Hire is your go-to solution! Experience the utmost convenience and flexibility in hiring temporary drivers by turning to us. Your satisfaction is our priority!"
        </p>
      </div>
    </div>
  </div>
</section>
 
    <!-- End Paragraph -->


   <!-- Price list Start-->

   <div class="main_container_details_price" style="padding-bottom: 50px;">
    <div class="container_details_p">
      <h1 class="title_details" data-aos="fade-down" data-aos-duration="2000">Temporary Driver Charges</h1>


      <div class="container mt-5 column_details_p" data-aos="zoom-in-up" data-aos-duration="2000">
            <div class="rate_box_details_p card pricing-box ">
                <div class="card-body">
                  <div id="drop_rate_list">
                    <!-- <img src="img/im/service_logo/down-list2.png" alt="" id="drop-list"> -->
                    <select id="plan-select" class="form-control mb-3" onmouseover="showOptions()" onchange="showPlanDetails()" >

                        <option value="8hrs">8 Hours / Day</option>
                        <option value="10hrs">10 Hours / Day</option>
                        <option value="12hrs">12 Hours / Day</option>

                    </select>
                    </div>

                    <div class="price__table">
                      <div class="pricingTable" id="plan-details-8hrs">
                        <ul class="pricingTable-firstTable">
                          <li class="pricingTable-firstTable_table">
                            <h1 class="pricingTable-firstTable_table__header" id="vehicle__header_manual">Manual / Automatic Car</h1>
                            <ul class="pricingTable-firstTable_table__options">
                              <li>Per day - INR 400/-</li>
                              <li>Over time Per hours - INR 100</li>
                            </ul>
                            <?php
                              if($_SESSION['count'] == 1)
                              {
                              
                              ?>
                                <a href="Service_forms/temporary_form.php">
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
                              <li>Per day - INR 500/-</li>
                              <li>Over time Per hours - INR 100</li>
                            </ul>
                            <?php
                              if($_SESSION['count'] == 1)
                              {
                              
                              ?>
                                <a href="Service_forms/temporary_form.php">
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
                      <div class="pricingTable" id="plan-details-10hrs" style="display: none;">
                        <ul class="pricingTable-firstTable">
                          <li class="pricingTable-firstTable_table">
                            <h1 class="pricingTable-firstTable_table__header" id="vehicle__header_manual">Manual / Automatic Car</h1>
                            <ul class="pricingTable-firstTable_table__options">
                              <li>Per day - INR 450/-</li>
                              <li>Over time Per hours - INR 100</li>
                            </ul>
                            <?php
                              if($_SESSION['count'] == 1)
                              {
                              
                              ?>
                                <a href="Service_forms/temporary_form.php">
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
                              <li>Per day - INR 500/-</li>
                              <li>Over time Per hours - INR 100</li>
                            </ul>
                            <?php
                              if($_SESSION['count'] == 1)
                              {
                              
                              ?>
                                <a href="Service_forms/temporary_form.php">
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
                      <div class="pricingTable" id="plan-details-12hrs" style="display: none;">
                        <ul class="pricingTable-firstTable">
                          <li class="pricingTable-firstTable_table">
                            <h1 class="pricingTable-firstTable_table__header" id="vehicle__header_manual">Manual / Automatic Car</h1>
                            <ul class="pricingTable-firstTable_table__options">
                              <li>Per day - INR 500/-</li>
                              <li>Over time Per hours - INR 100</li>
                            </ul>
                            <?php
                              if($_SESSION['count'] == 1)
                              {
                              
                              ?>
                                <a href="Service_forms/temporary_form.php">
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
                              <li>Per day - INR 550/-</li>
                              <li>Over time Per hours - INR 100</li>
                            </ul>
                            <?php
                              if($_SESSION['count'] == 1)
                              {
                              
                              ?>
                                <a href="Service_forms/temporary_form.php">
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