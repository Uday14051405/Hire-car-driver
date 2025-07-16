<?php
  include '../include/conn.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Book Your Driver</title>
    
    <!-- Animation CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <?php include '../allcsslinks.php'?>
    <link rel="stylesheet" href="../css/service_form.css" />

  </head>
  <body>

  
    <section class="container"  data-aos="flip-up"  data-aos-duration="2000">
      <div class="column">
      <header>Hourly Driver</header>
      </div>
      <form action="" method="post" class="form">
        
        <div class="column">
          <div class="radio-button-box">
            <h4>Trip Type</h4>
            <div class="radio-button-option">
              <div class="radio">
                <input type="radio" id="round_trip"/>
                <label>Round Trip</label>
              </div>
              <div class="radio">
                <input type="radio" id="one_way"/>
                <label>One Way</label>
              </div>
            </div>
          </div>
          <div class="radio-button-box" id="radio_bx">
            <h4>Vehicle Transmission Type</h4>
            <div class="radio-button-option">
              <div class="radio">
                <input type="radio" name="vehicle_trans" value="manual"/>
                <label>Manual</label>
              </div>
              <div class="radio">
                <input type="radio" name="vehicle_trans" value="automatic"/>
                <label>Automatic</label>
              </div>
            </div>
          </div>
        </div>

        <div class="input-box address">
          <h4>Address</h4>
          <input type="text" placeholder="Enter Full address" name="address" required /><br><br>
          <h4>Locations</h4>
          <div class="column">
            <div class="select-box">
              <select name="pickup">
                <option hidden>Pickup Location</option>
                <option value="yours">Your Address</option>
                <option value="Nala supara">Nala Supara</option>
                <option value="Naigaon">Naigaon</option>
              </select>
            </div>
            
            <div class="select-box">
              <select name="visit">
                <option hidden>Visiting Location</option>
                <option value="Gateway Of India">Gateway Of India</option>
                <option value="Marine Drive">Marine Drive</option>
                <option value="Shree Siddhivinayak Temple">Shree Siddhivinayak Temple</option>
              </select>
            </div>

            <div class="select-box">
              <select name="drop">
                <option hidden>Drop Location</option>
                <option value="yours">Your Address</option>
                <option value="Nala Supara">Nala Supara</option>
                <option value="Naigaon">Naigaon</option>
              </select>
            </div>
          </div>
        </div>

        <div class="radio-button-box">
          <h4>Select Date</h4>
          <div class="radio-button-option">
            <div class="radio">
              <input type="radio" name="radio" />
              <label>Today</label>
            </div>
            <div class="radio">
              <input type="radio" name="radio" />
              <label >Tommorow</label>
            </div>
            <div class="radio">
              <input type="radio" name="radio" />
              <label>Specific Date</label>
            </div>
          </div>
        </div>

        <div class="column">
          <div class="input-box">
            <h4>Date</h4>
            <input type="date" name="date" required />
          </div>
          <div class="input-box">
            <h4>Set Time</h4>
            <!-- <input type="time" id="appt" name="appt" min="09:00" max="18:00" required /> -->
            <input type="time" name="time"  required />
          </div>
        </div><br>


        <div class="column">
          <div class="select-box">
            <select name="car_type">
              <option hidden>Car Type</option>
              <option value="Hatchback">Hatchback</option>
              <option value="Sedan">Sedan</option>
              <option value="SUV">SUV</option>
              <option value="Luxury">Luxury</option>
              <option value="Sedan Luxury">Sedan Luxury</option>
              <option value="SUV Luxury">SUV Luxury</option>
            </select>
          </div>

          
          <div class="select-box">
            <select name="duty_hrs">
              <option hidden>Duty Hours</option>
              <option value="2 Hours">2 Hours</option>
              <option value="4 Hours">4 Hours</option>
              <option value="6 Hours">6 Hours</option>
              <option value="8 Hours">8 Hours</option>
            </select>
          </div>
        </div>

        <button name="submit">Submit</button>
      </form>
    </section>


    
    
    <!-- Animation js      -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
      </script>

<?php include '../alljslinks.php'?>

  
  </body>
</html>

<?php
  if(isset($_POST['submit'])){
    
    $vehicle_trans = $_POST['vehicle_trans'];
    $address = $_POST['address'];

    $pickup = $_POST['pickup'];
    if($pickup =='yours'){
      $pickup = $address;
    }

    $visit = $_POST['visit'];

    $drop = $_POST['drop'];
    if($drop =='yours'){
      $drop = $address;
    }

    $date = date('Y-m-d', strtotime($_POST['date']));
    $time = $_POST['time'];
    $car_type = $_POST['car_type'];
    $duty_hrs = $_POST['duty_hrs'];

    $sql = "INSERT INTO `hourly_form` (`vehicle_transmission`, `address`, `pickup_loc`, `visit_loc`, `drop_loc`, `date`, `time`, `car_type`, `duty_hrs`) VALUES ('$vehicle_trans', '$address', '$pickup', '$visit', '$drop', '$date', '$time', '$car_type', '$duty_hrs');";

    $result = mysqli_query($conn, $sql);

    header('Location: ../Registration_form/finish.php');
  }
?>

