<?php
  session_start();
  $_SESSION['path'] = 1; 
?>
<!DOCTYPE temporary>
<temporary lang="en">

<head>
    <meta charset="utf-8">
    <title>Hire a Driver</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free temporary Templates" name="keywords">
    <meta content="Free temporary Templates" name="description">

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

        <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 50px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn" >Hourly Driver</h1>
                </div>
            </div>
        </div>

    <!-- End Navbar -->

    <!-- Paragraph -->
<section class="team" >    <!-- style="padding: 40px 0;" -->
  <div class="container trustBadges">
    <div class="row text-center collapse show" id="readMore1" style>
      <h2 class="fw-bold text-primary section-title text-center py-4" style="position:relative;margin-bottom:60px;" data-aos="flip-left"data-aos-easing="ease-out-cubic"data-aos-duration="2000">Drivers on Hourly Basis</h2>
      <div class="moreText" data-aos="fade-up" data-aos-anchor-placement="top-center" data-aos-duration="2000">
        <p style="text-align: justify;">
          "Looking for a driver for a short duration? Look no further! Our verified drivers are available on an hourly basis to cater to all your short-term travel needs. Whether you're planning a shopping spree, a brief city tour, a crucial business meeting, attending a social gathering, or making a spontaneous visit, our hourly basis driver service is your go-to solution!"
          <br><br>
          "At Driver on Hire, we understand that some journeys are brief but crucial. That's why we offer the flexibility of hiring drivers on an hourly basis for short-term trips or special events. Our service is not only convenient but also affordable, ensuring you have a reliable driver whenever you need one. "
          <br><br>
          "Rest assured, our pool of experienced drivers is committed to ensuring your safety during every commute. No need to stress about parking, navigating through traffic, or embarking on a route hunting saga. Our drivers are well-versed in local traffic patterns, guaranteeing an efficient and stress-free journey."
          <br><br>
          "For your next short-term trip or special event, make the smart choice — enjoy a hassle-free and comfortable ride with Driver on Hire. Your convenience is our priority, and we're here to make your hourly basis hiring experience seamless and enjoyable. Experience the difference with Driver on Hire!"
        </p>
      </div>
    </div>
  </div>
</section>
    <!-- End Paragraph -->


    <!-- Price list Start-->

  <div class="main_container_details_price" style="padding-bottom: 50px;">
    <div class="container_details_p">
      <h1 class="title_details" data-aos="fade-down" data-aos-duration="2000">Hourly Driver Charges</h1>


      <div class="container mt-5 column_details_p" data-aos="zoom-in-up" data-aos-duration="2000">
            <div class="card pricing-box rate_box_details_p">
                <div class="card-body">
                  <div id="drop_rate_list">
                    <!-- <img src="img/im/service_logo/down-list2.png" alt="" id="drop-list"> -->
                    <select id="plan-select" class="form-control mb-3" onmouseover="showOptions()" onchange="showPlanDetails()" >

                        <option value="3hrs">3 Hours</option>
                        <option value="6hrs">6 Hours</option>
                        <option value="9hrs">9 Hours</option>
                        <option value="12hrs">12 Hours</option>

                    </select>
                    </div>

                    <div class="price__table">
                      <div class="pricingTable" id="plan-details-3hrs">
                        <ul class="pricingTable-firstTable">
                          <li class="pricingTable-firstTable_table">
                            <h1 class="pricingTable-firstTable_table__header" id="vehicle__header_manual">Manual / Automatic Car</h1>
                            <ul class="pricingTable-firstTable_table__options">
                              <li>3 Hr - INR 500/-</li>
                              <li>After 11PM To 6AM - INR 300/-</li>
                              <li>Overtime - INR 100/- per hour</li>
                            </ul>
                            <?php
                                  if($_SESSION['count'] == 1)
                                  {

                                  ?>
                                    <a href="Service_forms/hourly_form.php">
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
                              <li>3 Hr - INR 600/-</li>
                              <li>After 11PM To 6AM - INR 300/-</li>
                              <li>Overtime - INR 100/- per hour</li>
                            </ul>
                            <?php
                                  if($_SESSION['count'] == 1)
                                  {

                                  ?>
                                    <a href="Service_forms/hourly_form.php">
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
                      <div class="pricingTable" id="plan-details-6hrs" style="display: none;">
                        <ul class="pricingTable-firstTable">
                          <li class="pricingTable-firstTable_table">
                            <h1 class="pricingTable-firstTable_table__header" id="vehicle__header_manual">Manual / Automatic Car</h1>
                            <ul class="pricingTable-firstTable_table__options">
                              <li>6 Hr - INR 700/-</li>
                              <li>After 11PM To 6AM - INR 300/-</li>
                              <li>Overtime - INR 100/- per hour</li>
                            </ul>
                            <?php
                                  if($_SESSION['count'] == 1)
                                  {

                                  ?>
                                    <a href="Service_forms/hourly_form.php">
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
                              <li>6 Hr - INR 800/-</li>
                              <li>After 11PM To 6AM - INR 300/-</li>
                              <li>Overtime - INR 100/- per hour</li>
                            </ul>
                            <?php
                                  if($_SESSION['count'] == 1)
                                  {

                                  ?>
                                    <a href="Service_forms/hourly_form.php">
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
                      <div class="pricingTable" id="plan-details-9hrs" style="display: none;">
                        <ul class="pricingTable-firstTable">
                          <li class="pricingTable-firstTable_table">
                            <h1 class="pricingTable-firstTable_table__header" id="vehicle__header_manual">Manual / Automatic Car</h1>
                            <ul class="pricingTable-firstTable_table__options">
                              <li>9 Hr - INR 900/-</li>
                              <li>After 11PM To 6AM - INR 300/-</li>
                              <li>Overtime - INR 100/- per hour</li>
                            </ul>
                            <?php
                                  if($_SESSION['count'] == 1)
                                  {

                                  ?>
                                    <a href="Service_forms/hourly_form.php">
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
                              <li>9 Hr - INR 1000/-</li>
                              <li>After 11PM To 6AM - INR 300/-</li>
                              <li>Overtime - INR 100/- per hour</li>
                            </ul>
                            <?php
                                  if($_SESSION['count'] == 1)
                                  {

                                  ?>
                                    <a href="Service_forms/hourly_form.php">
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
                              <li>12 Hr - INR 1200/-</li>
                              <li>After 11PM To 6AM - INR 300/-</li>
                              <li>Overtime - INR 100/- per hour</li>
                            </ul>
                            <?php
                                  if($_SESSION['count'] == 1)
                                  {

                                  ?>
                                    <a href="Service_forms/hourly_form.php">
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
                              <li>12 Hr - INR 1300/-</li>
                              <li>After 11PM To 6AM - INR 300/-</li>
                              <li>Overtime - INR 100/- per hour</li>
                            </ul>
                            <?php
                                  if($_SESSION['count'] == 1)
                                  {

                                  ?>
                                    <a href="Service_forms/hourly_form.php">
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

</temporary>