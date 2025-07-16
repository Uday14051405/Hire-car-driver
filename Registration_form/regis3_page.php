<?php
    error_reporting(0);
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
  <div class="container" data-aos="fade-up-right">
    <div class="third_title">Driving Proof
      <input type="submit" class="back-button" value="Back" id="back_btn" onclick="back_btn()">
    </div>
    <div class="third_content">
      <form action="" method="post" enctype="multipart/form-data">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Year of Experience</span>
            <input type="text" placeholder="In Years" name="experience"  >
          </div>
          <div class="input-box">
            <span class="details">Reference</span>
            <input type="text" placeholder="Enter Reference" name="reference"  >
          </div>
          <div class="input-box">
            <span class="details">Video Proof</span>
            <input type="file" name="video_proof" class="customfile"  >
        </div>
        
    </div>
    
        
         
        <div class="vehicle_type-details">
            <span class="vehicle_type-title">Which vehicles have you driven before?</span><br>
            <ul class="checkbox-list">
                <li><input type="checkbox" name="vehicle_type[]" id="option1" value="Manual"> <label for="option1"->Manual</label></li>
                <li><input type="checkbox" name="vehicle_type[]" id="option2" value="Automatic"> <label for="option2">Automatic</label></li>
                <li><input type="checkbox" name="vehicle_type[]" id="option3" value="Luxury"> <label for="option3">Luxury</label></li>
            </ul>
        </div>
        <div class="button">
          <input type="submit" value="Next" id="next_btn" name="next_3" onclick="validate()">
        </div>
      </form>
    </div>
  </div>

  <script>
    function back_btn() {
      window.location.href= "regis2_page.php";
    }
  </script>

  <!-- Using javascript for appling   validator on checkbox -->
  <script>
    function validate(){
      var valid = false;

      if(document.getElementById("option1").checked){
        valid = true;
      }
      else if(document.getElementById("option2").checked){
        valid = true;
      }
      else if(document.getElementById("option3").checked){
        valid = true;
      }

      if(valid == false){
        alert("Please select atleast one vehicle type");
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
  if(isset($_POST['next_3'])){

    // For upload file
    $vp_filename = $_FILES['video_proof']['name'];
    $vp_tmpname = $_FILES['video_proof']['tmp_name'];
    $vp_folder = "documents/".$vp_filename;
    move_uploaded_file($vp_tmpname, $vp_folder);

    // For checkbox
    $drive_type = $_POST['vehicle_type'];
    $all_drive_type = implode(',', $drive_type);     // Using implode function to divide array into string sepereted by comma.

    $_SESSION['experience'] = $_POST['experience'];
    $_SESSION['reference'] = $_POST['reference'];
    $_SESSION['vp_folder'] = $vp_folder;
    $_SESSION['vehicle_type'] = $all_drive_type;
    
    header("Location: regis4_page.php");

  }
?>