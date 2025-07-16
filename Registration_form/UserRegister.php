<?php
    include "../include/conn.php";
    error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Register</title>
    <link rel="stylesheet" href="../css/registration.css">
    <!-- Animation CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

   </head>
  
<body>
  

  <!-- User FORM -->
  <div class="loaddata">

    <div class="container" data-aos="fade-down"data-aos-easing="linear"data-aos-duration="500">
      <div class="first_title">User Details
    </div>
    
    <div class="first_content">
      <form action="" method="post">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" placeholder="Enter your name" id="id_name" name="name"  >
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="email" placeholder="Enter your email" id="id_email" name="email"  >
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="tel" placeholder="Enter your number" id="id_number" name="number"  >
          </div>
          <div class="input-box">
            <span class="details">Alternate Phone Number</span>
            <input type="tel" placeholder="Enter your number" id="id_number2" name="number_alt">
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" placeholder="Enter your password" id="id_pass" name="pass"  >
          </div>
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="password" placeholder="Confirm your password" id="id_pass_cnf" name="pass_cnf"  >
          </div>
        <div class="input-box">
            <span class="details">Address</span>
            <input type="text" placeholder="Enter your address" id="id_address" name="address"  >
        </div>
      </div>
        <div class="gender-details">
            <input type="radio" name="gender" id="dot-1" value="Male"  >
            <input type="radio" name="gender" id="dot-2" value="Female"  >
            <input type="radio" name="gender" id="dot-3" value="Others"  >
            <span class="gender-title">Gender</span>
            <div class="category">
              <label for="dot-1">
              <span class="dot one"></span>
              <span class="gender">Male</span>
            </label>
            <label for="dot-2">
              <span class="dot two"></span>
              <span class="gender">Female</span>
            </label>
            <label for="dot-3">
              <span class="dot three"></span>
              <span class="gender">Others</span>
              </label>
            </div>
          </div>
        <div class="button">
          <input type="submit" value="Submit" id="next_btn" name="next_1" onclick="validate()">
        </div>
      </form>
    </div>
  </div>
</div>
  
    <!-- Animation js      -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>

  
</body>
</html>


<?php
    if(isset($_POST['next_1'])){

        $name = $_POST["name"];
        $email = $_POST["email"];
        $number = $_POST['number'];
        $number_alt = $_POST['number_alt'];
        $pass = $_POST['pass'];
        $cnf_pass = $_POST['pass_cnf'];


      if($pass != $cnf_pass){
        echo "<script>alert('Password does not match the confirm password')</script>";
      }
      else{
          $sql = "INSERT INTO `userRegister` (`name`, `email`, `phone`, `phone_alt`, `password`) VALUES ('$name','$email','$number','$number_alt','$pass');";
          $result = mysqli_query($conn, $sql);
          if(!$result){
            die("Error");
          }
        echo "<script>window.location='../UserLogin.php';</script>";
        
      }
    }
?>