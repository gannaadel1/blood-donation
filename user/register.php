<?php
include '../shared/connection.php';
include '../shared/nav.php';

if(isset($_POST['signup']))
{
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $username=$_POST['uname'];
    $phone=$_POST['phone'];
    $password=$_POST['password'];
    $gender=$_POST['gender'];
    $image=$_POST['image'];
    $select = "SELECT * FROM `user` WHERE `user_username` = '$username'";
    $run_select = mysqli_query($connect , $select);
    $row = mysqli_num_rows($run_select);
    if($row>0)
    {
       
    }
    else
    {
        $insert="INSERT INTO `user` VALUES(NULL,'$fname','$lname','$username','$image','$phone','$password','$gender')";
        $run_insert=mysqli_query($connect,$insert);
        header("location: /blood_project/user/login.php");
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup</title>
    <link rel="stylesheet" href="Login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../admin/style.css">
    <style>
      body {
    background-image: linear-gradient( rgb(143,6,6), rgb(255,255,255)) !important;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
    
  }
      </style>
</head>
<body>
    <section class="register-login_section">
        <div class="my_container">
          <form action="#" method="post" class="signup_form">
            <h3>Sign up</h3>
            <div class="form_row">
              <div class="input_field">
                <label for="firstName">First Name</label>
                <input class="" type="text" name="fname" id="firstName">
              </div>
              <div class="input_field">
                <label for="lastName">Last Name</label>
                <input class="input" type="text" name="lname" id="lastName">
              </div>
            </div>
            <div class="input_field">
              <label for="signupEmail">Username</label>
              <input class="input" type="text" name="uname" id="signupEmail">
            </div>
            <div class="input_field">
              <label for="signupEmail">Phone number</label>
              <input class="input" type="number" name="phone" id="signupEmail">
            </div>
            <div class="input_field">
              <label for="signupPassword">Password</label>
              <input class="input" type="password" name="password" id="signupPassword">
            </div>
            <div class="radio_container">
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
            <div class="radio_field">
            <label for="female">User Image</label>
             <br><br>
              <input type="file" name="image" id="image">
            </div>
            <br>
            <button type="submit" name="signup" class="btn">Sign up</button>
            <?php
              if (isset($_POST['signup']))
    {   
      echo "<b class='err'>Username is already taken</b>";
    }
?>
            <p>By signing up, you agree to our <a href="#">Terms of Use</a> and <a href="#">Privacy Policy</a></p>
            <p>Already a member?<a href="../user/login.php" id="LogInBtn">Log in</a></p>

            <div class="icons">
            <i class='bx bxl-facebook-circle'></i>
            <i class='bx bxl-twitter'></i>
            <i class='bx bxl-instagram'></i>
              <i class='bx bxl-gmail'></i>
          </div>
          </form>
</section>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
          <?php
        include '../user/footeru.php';
        ?>
</body>
</html>
