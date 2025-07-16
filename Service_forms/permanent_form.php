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
    <link rel="stylesheet" href="../css/service_form.css"/>
    <!-- Animation CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  </head>
  <body>
    <section class="container" data-aos="flip-up"  data-aos-duration="2000">
      <div class="column">
      <header>Permanent Driver</header>
      </div>
      <form action="" method="post" class="form">
        
                 
          
          <div class="column">
            <div class="select-box">
              <select name="subscription">
                <option hidden>Subsctiption Type</option>
                <option value="3 Months">3 Months</option>
                <option value="6 Months">6 Months</option>
                <option value="9 Months">9 Months</option>
                <option value="12 Months">12 Months</option>
              </select>
            </div>
            
            <div class="select-box">
              <select name="car_type">
                <option hidden>Car Type</option>
                <option value="Manual">Manual</option>
                <option value="Automatic">Automatic</option>
                <option value="Luxury">Luxury</option>
              </select>
            </div>
          </div>
          
        


      <div class="input-box address">  
        <div class="column">
          <input type="date" name="date" required />

          
          <div class="select-box">
            <select name="duty_hrs">
              <option hidden>Duty Hours</option>
              <option value="8 Hours">8 Hours</option>
              <option value="10 Hours">10 Hours</option>
              <option value="12 Hours">12 Hours</option>
            </select>
          </div>
        </div><br>
      </div>

          
        <h4>Duty Start Time</h4>
          
          <div class="input-box">
            <input type="time" name="time" required />
          </div>
        


        <div class="input-box address">
          <h4>Address</h4>
          <input type="text" placeholder="Enter street address" name="street_address" required />
          <input type="text" placeholder="Enter street address line 2" name="street_address_opt"/>
          <div class="column">
            <div class="select-box">
              <select name="state">
                <option hidden>State</option>
                <option value="Goa">Goa</option>
                <option value="Gujarat">Gujarat</option>
                <option value="Madhya Pradesh">Madhya Pradesh</option>
                <option value="Maharashtra">Maharashtra</option>
              </select>
            </div>
            <input type="text" placeholder="Enter your city" name="city" required />
          </div>
          <div class="column">
            <input type="text" placeholder="Enter your district" name="district" required />
            <input type="number" placeholder="Enter postal code" name="zipcode" />
          </div>
        </div><br>


        

        <button name="submit" onclick="calculateDays()">Submit</button>
      </form>
    </section>
  </body>
  <script>
    function calculateDays(){
      var d1 = document.getElementById("d1").value;
      var d2 = document.getElementById("d2").value;
      const dateOne = new Date(d1);
      const dateTwo = new Date(d2);
      const time = Math.abs(dateTwo - dateOne);
      const days = Math.cell(time / (1000 * 60 * 60 * 24));
      if(days > 30){
        alert('The period should not exceed 30 days');
      }
    }
  </script>

  
     <!-- Animation js      -->
     <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>

</html>

<?php
  if(isset($_POST['submit'])){
    
    $subscription = $_POST['subscription'];
    $car_type = $_POST['car_type'];
    $date = date('Y-m-d', strtotime($_POST['date']));
    $duty_hrs = $_POST['duty_hrs'];
    $time = $_POST['time'];
    $street_address = $_POST['street_address'];
    $street_address_opt = $_POST['street_address_opt'];
    $state = $_POST['state'];
    $city = $_POST['city'];
    $district = $_POST['district'];
    $zipcode = $_POST['zipcode'];

       
      

    $sql = "INSERT INTO `permanent_form` (`subscription`, `car_type`, `date`, `duty_hours`, `time`, `street_address`, `street_address_opt`, `state`, `city`, `district`, `zipcode`) VALUES ('$subscription', '$car_type', '$date', '$duty_hrs', '$time', '$street_address', '$street_address_opt', '$state', '$city', '$district', 'zipcode');";

    $result = mysqli_query($conn, $sql);

    header('Location: ../Registration_form/finish.php');
  }
?>