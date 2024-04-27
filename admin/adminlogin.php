<?php
include("../shared/nav2.php");
include("../shared/connection.php");

   if(isset($_POST['login']))
{
$name=$_POST['uname'];
$password=$_POST['password'];
$select="SELECT * FROM `admin` WHERE `admin_username` = '$name' AND `admin_password` = '$password' ";
$run_select=mysqli_query($connect,$select);
$row = mysqli_num_rows($run_select);
$array=mysqli_fetch_assoc($run_select);
if($row>0)
{
  $_SESSION['admin_id']=$array['admin_id'];
  $_SESSION['admin_name']=$array['admin_name'];
  $_SESSION['admin_username']=$array['admin_username'];
  $_SESSION['admin_image']=$array['admin_image'];
  $_SESSION['admin_title']=$array['admin_title'];
  header("location: /blood_project/admin/adminprofile.php");
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../user/Login.css">

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
        <form action="#" method="post" class="login_form hide">
          <h3>Log In</h3>
          <div class="input_field">
            <label for="loginUsername"><i class="bx bx-user"></i> Username</label>
            <input class="input" type="text" name="uname" id="loginUsername">
          </div>
          <div class="input_field">
            <label for="loginPassword"><i class="bx bx-lock-alt"></i> Password</label>
            <input class="input" type="password" name="password" id="loginPassword">
          </div>
          <button type="submit" name="login" class="btn">Log in</button>
          <div class="icons">
            <i class='bx bxl-facebook-circle'></i>
            <i class='bx bxl-twitter'></i>
            <i class='bx bxl-instagram'></i>
              <i class='bx bxl-gmail'></i>
          </div>
          <?php
              if (isset($_POST['login']))
    {   
      echo "<b class='err'>Wrong Data</b>";
    }
?>
        </form>
      </div>
    </section>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="../user/login.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</form>

</body>
</html>