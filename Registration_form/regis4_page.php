<?php
  include '../include/conn.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/registration.css">
    <!-- Animation CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Register Yourself</title>
   </head>
<body id="loaddata">
  <div class="container" id= "forth_container" data-aos="fade-up-left">
    <div class="forth_title">Terms & Conditions
      <input type="submit" class="back-button" value="Back" id="back_btn" onclick="back_btn()">
    </div>
    <div class="forth_content">
      <form action="" method="post">
        <div class="user-details">
          
          <div class="t_and_c">
            <span class="details">1.  I have a valid license and have minimum experience required to drive a car.</span>
          </div>
          <div class="t_and_c">
            <span class="details">2.  I will never use the customers information to call for any promotion or help after the trip ends.</span>
          </div>
          <div class="t_and_c">
            <span class="details">3.  I will never forcefully ask for tips from the customer.</span>
          </div>
          <div class="t_and_c">
            <span class="details">4.  I will never drive customer's vehicle for personal purpose without the owner's permission.</span>
          </div>
          <div class="t_and_c">
            <span class="details">5.  I will never drive the vehicle after smoking or drinking.</span>
          </div>
          <div class="t_and_c">
            <span class="details">6.  I am ready to pay the registration fees to the company.</span>
          </div>
          <div class="t_and_c">
            <span class="details">7.  I will solely be responsible for any theft or damage done to the owner's car or in case of any accident.</span>
          </div>
          <div class="t_and_c">
            <span class="details">8.  I will drive the vehicle with utmost safety follow all the traffic regulations.</span>
          </div>
          <div class="t_and_c">
            <span class="details">9.  I am ready to pay any traffic challan or fine caused during my trip under my drive.</span>
          </div>
          <div class="t_and_c">
            <span class="details">10. The driver must check the condition of the vehicle before taking the command of the driver seat, and inform if any damage with the vehicle.</span>
          </div>
          <div class="t_and_c">
            <span class="details">11. I do not have any problem for my photo being used for promotional activity of the company.</span>
          </div>
          <div class="t_and_c">
            <span class="details">12. The driver must be on time.</span>
          </div>
          <div class="t_and_c">
            <span class="details">13. Any change in terms or conditions will intimated.</span>
          </div>
        </div>

        <div class="T-C-details">
          <input type="radio" name="T-C" id="dot-1" value="1" required>
          <span class="T-C-title">You have to agree T&C.</span>
          <div class="lbl_category">
            <label for="dot-1">
              <span class="dot one"></span>
              <span class="T-C">I Agree</span>
            </label>
          </div>
        </div>

        <div class="button">
          <input type="submit" value="Finish" id="next_btn" name="next_4" onclick="validate()">
        </div>
      </form>
    </div>
  </div>

  <script>
    function back_btn() {
      window.location.href= "regis3_page.php"; 
    }


    // Using javascript for appling required validator on redio button
    function validate(){
      var valid = false;

      if(document.getElementById("dot-1").checked){
        valid = true;
      }
      
      if(valid == false){
        alert("Please select gender");
      }
    }
  </script>

   <!-- Animation js      -->
   <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>
</body>
</html>

<?php
  if(isset($_POST['next_4'])){
    $term = $_POST['T-C'];

    
    session_start();
    $sql2 = "SELECT * FROM temp_driver where id = '$_SESSION[id]';";
    $result2 = mysqli_query($conn, $sql2);
    while($a = mysqli_fetch_assoc($result2)){
      $name = $a['name'];
      $email = $a['email'];
      $phone = $a['phone'];
      $phone_alt = $a['phone_alt'];
      $address = $a['address'];
      $gender = $a['gender'];
    }


    $sql = "INSERT INTO `register` (`name`, `email`, `phone`, `phone_alt`, `password`, `cnf_password`, `address`, `gender`, `aadhar_card_doc`, `driving_lic_doc`, `passport_photo`, `experience`, `reference`, `video_proof`, `drived_vehicle`, `terms_and_con`) VALUES ('$name','$email','$phone','$phone_alt','$_SESSION[pass]','$_SESSION[cnf_pass]','$address','$gender','$_SESSION[ac_folder]','$_SESSION[dl_folder]','$_SESSION[pp_folder]','$_SESSION[experience]','$_SESSION[reference]','$_SESSION[vp_folder]','$_SESSION[vehicle_type]','$term');";
    $result = mysqli_query($conn, $sql);

    $sql3 = "DELETE FROM temp_driver WHERE email = '$_POST[email]';";
    mysqli_query($conn, $sql3);

    echo "<script>window.location= '../login.php';</script>";
  }
?>