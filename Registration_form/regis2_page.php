<?php
  session_start();
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
  <div class="container" data-aos="fade-down-left">
    <div class="second_title">Document Verification
      <input type="submit" class="back-button" value="Back" onclick="back_btn()">
    </div>
    <div class="second_content">
      <form action="#" method="post" enctype="multipart/form-data">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Aadhar Card</span>
            <input type="file" name="aadhar_card" class="customfile"  >
          </div>
          <div class="input-box">
            <span class="details">PAN card</span>
            <input type="file" name="pan_card" class="customfile"  >
          </div>
          <div class="input-box">
            <span class="details">Passport Photo</span>
            <input type="file" name="passport_photo" class="customfile"  >
          </div>
          <div class="input-box">
            <span class="details">Driving Licence</span>
            <input type="file" name="driving_lic" class="customfile"  >
          </div>
        </div>
        <div class="button">
          <input type="submit" value="Next" id="next_btn" name="next_2">
        </div>
      </form>
    </div>
  </div>

  

  <script>
    function back_btn() {
      window.location.href= "regis1_page.php";
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
  if(isset($_POST['next_2'])){
    $ac_filename = $_FILES['aadhar_card']['name'];
    $ac_tmpname = $_FILES['aadhar_card']['tmp_name'];
    $ac_folder = "documents/".$ac_filename;
    move_uploaded_file($ac_tmpname, $ac_folder);

    $dl_filename = $_FILES['driving_lic']['name'];
    $dl_tmpname = $_FILES['driving_lic']['tmp_name'];
    $dl_folder = "documents/".$dl_filename;
    move_uploaded_file($dl_tmpname, $dl_folder);

    $pp_filename = $_FILES['passport_photo']['name'];
    $pp_tmpname = $_FILES['passport_photo']['tmp_name'];
    $pp_folder = "documents/".$pp_filename;
    move_uploaded_file($pp_tmpname, $pp_folder);



    $_SESSION['ac_folder']= $ac_folder;
    $_SESSION['dl_folder']= $dl_folder;
    $_SESSION['pp_folder']= $pp_folder;


    header("Location: regis3_page.php");

  }
?>