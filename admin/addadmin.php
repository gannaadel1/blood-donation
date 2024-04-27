<?php
include("../shared/connection.php");
include("../shared/nav2.php");

if(isset($_POST['add']))
{
    $username=$_POST['uname'];
    $name=$_POST['adname'];
    $title=$_POST['title'];
    $password=$_POST['password'];
    $image=$_POST['image'];
    $select = "SELECT * FROM `admin` WHERE `admin_username` = '$username'";
    $run_select = mysqli_query($connect , $select);
    $row = mysqli_num_rows($run_select);
    if($row>0)
    {
       
    }
    else
    {
        $insert="INSERT INTO `admin` VALUES(NULL,'$username','$name','$title','$password','$image')";
        $run_insert=mysqli_query($connect,$insert);
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
    <title>Add New Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
          <form  method="post" class="signup_form">
            <h3>Add New Admin</h3>
            <div class="form_row">
            <div class="input_field">
              <label for="signupEmail">Username</label>
              <input class="input" type="text" name="uname" id="signupEmail">
            </div>
            <div class="input_field">
                <label for="firstName">Admin Name</label>
                <input class="" type="text" name="adname" id="firstName">
              </div>
            <div class="input_field">
              <label for="signupEmail"> Admin Title</label>
              <input class="input" type="text" name="title" id="signupEmail">
            </div>
            <div class="input_field">
              <label for="signupPassword">Password</label>
              <input class="input" type="password" name="password" id="signupPassword">
            </div>
            <div class="radio_field">
            <label for="female">Admin Image</label>
            <br><br>
            <input type="file" name="image" id="image">
        </div>
    </div>
            <br>
            <button type="submit" name="add" class="btn"> Add Admin </button>
            <?php
              if (isset($_POST['add']))
    {   
      echo "<b class='err'>Username is already taken</b>";
    }
?>
            <div class="icons">
                <br>
            <i class='bx bxl-facebook-circle'></i>
            <i class='bx bxl-twitter'></i>
            <i class='bx bxl-instagram'></i>
            <i class='bx bxl-gmail'></i>
          </div>
    </form>
</div>
</section>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        
</body>
</html>