<?php
include '../shared/nav.php';
include '../shared/connection.php';
if(isset($_POST['login'])){
    $username = $_POST['uname'];
    $password = $_POST['password'];
    $select = "SELECT * FROM `user` WHERE `user_username` = '$username' AND `user_password` = '$password'";
    $run_select = mysqli_query($connect , $select);
    $row = mysqli_num_rows($run_select);

    if($row > 0)
    {
        header("location: /blood/patientform.php");
    }
    else
    {
        
      echo "WRONG DATA";
    }
  }



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<body>
    <form method="post">
            <input type="text" placeholder="Username" name="uname">
            <br><br>
            <input type="password" placeholder="Password" name="password">
            <br><br>
            <input  style="background-color:rgb(32,28,28);color:white;" type="submit"  name="login" value="Log in">
            <br><br><br>
                <p><br><br>By loging in, you agree to our <a href="#">Terms of Use</a> and <a href="#">Privacy Policy</a>.</p>
               <p>I don't have an account . <a  href="register.php" id="signUpBtn">Create new account</a></p>
</form>
    
</body>
</html>
