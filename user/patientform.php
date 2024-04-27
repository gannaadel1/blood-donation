<?php
include("../shared/connection.php");
include("../shared/navu.php");
if(isset($_POST['submit'])){
    $national_id=$_POST['national_id'];
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $donator_age=$_POST['age'];
    $donator_address=$_POST['address'];
    $donator_location=$_POST['location'];
    $blood_type=$_POST['blood_type'];
    $donator_diseases=$_POST['status'];
    $gender=$_POST['gender'];
$insert="INSERT INTO `patient` VALUES (NULL,'$national_id ','$name','$phone','$donator_age' ,'$donator_address','$donator_location','$blood_type','$donator_diseases','$gender' ) ";
$run_insert= mysqli_query($connect , $insert);
header("location: /blood_project/user/userprofile.php");
}

?>

<html>
<head>
<link rel="stylesheet" href="../user/dform.css">
<link rel="stylesheet" href="../admin/blood.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
</head>
<body>
    <div class="donation_section">
        <form class="donation_form" method="POST" >
          <p><h2>Patient Form</h2></p>
            <div class="input_box">
              <div>
                <label for="name">Name</label>
                <input type="text" id="name" name="name" class="input">
              </div>
              <div>
               <label for="nationalid">National Id </label>
               <input type="number" id="nationalId" name="national_id" class="input">
                </div>
            </div>
              <div class="input_box">

                <div>
                  <label for="phonenumber">Phone Number</label>
                  <input type="tel" id="phone" name="phone" class="input">
                </div>
                <div>     
               <label for="adress">Age</label>
               <input type="number" id="age" name="age" class="input">
              </div>
              </div>
            <div class="input_box">
            <div>
                <label for="location">Location </label>
                <select name="location" id="location" class="input">
                <!-- <option name="location" value="Home">Home</option> -->
                <option name="location" value="Hospital">Hospital</option>
                </select>
              </div>
            
              <div style="margin-left:30%;">     
               <label for="adress">Address </label>
               <input type="text" id="address" name="address" class="input">
              </div>
               
            </div>
            <div class="input_box">
              <div>
              <label for="bloodType">Blood Type </label>
              <select name="blood_type" id="bloodtype" class="input">
                <option name="blood_type" value="A+">A+</option>
                <option name="blood_type" value="A-">A-</option>
                <option name="blood_type" value="B+">B+</option>
                <option name="blood_type" value="B-">B-</option>
                <option name="blood_type" value="O+">O+</option>
                <option name="blood_type" value="O-">O-</option>
                <option name="blood_type" value="AB+">AB+</option>
                <option name="blood_type" value="AB-">AB-</option>
              </select>
              </div>
              <div>
              <label for="donatorstatus">Diseases</label>
              <input type="text" id="donatorstatus" name="status" class="input">
              </div>
            </div>  
          <div class="gender">
               <p>Gender:</p>
            <div class="radio_field">
                <input type="radio" name="gender" id="male" value="male">
                <label for="male">Male</label>
              </div>  
              <div class="radio_field">
                <input type="radio" name="gender" id="female" value="female">
                <label for="female">Female</label>
              </div>
          </div>
            <!-- <input type="button" value="Submit" name="submit" type="submit" class="input_submit"> -->
          <button class="input_submit" name="submit">Submit</button>
          </form>
    </div>
</body>
</html>


