<?php
include("../shared/connection.php");
include("../shared/navu.php");
if(isset($_POST['editpass'])){
  header("location: /blood_project/admin/editpassword.php");
}
if(isset($_POST['logout']))
{
  session_unset();
  session_destroy();
  header("location: /blood_project/user/login.php");
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../admin/blood.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <title></title>
  </head>
  <body>
    

  <div class="content">
    <aside>
      <nav>
        <div class="profile">
          <img  src="<?php echo $_SESSION['user_image']?>" style="width:30%;" alt="">
          <p><?php  echo $_SESSION['user_fname'] ; echo" "; echo $_SESSION['user_lname']; ?></p>
        </div>
        <hr>
        <a href="patientform.php">
          <i class="fa-solid fa-lock"></i>
          <span>Need</span>
        </a>
        <a href="../user/donationform.php">
          <i class="fa-solid fa-gear"></i>
          <span>Donate now</span>
        </a>
        <a href="../user/contactus.php">
          <i class="fa-solid fa-handshake-angle"></i>
          <span>help</span>
        </a>
        <br><br><br><br><br><br><br><br><br><br>
        <form method="POST">
          <?php if($_SESSION['user_id']) { ?>
          <button name="logout" style="width:100%;" class="btn btn-danger">Logout</button>
         
        <?php } ?>
</form>
      </nav>
    </aside>

    <main >
      <div class="main">
      <img  src="<?php echo $_SESSION['user_image'];?>" style="width:100%;margin-left:50%;" alt="pic">
       
    </div>
    <ul class="info" style="margin-right:30%;">
      <li>Full Name : &emsp; <?php  echo $_SESSION['user_fname'];  echo " "; echo  $_SESSION['user_lname']; ?></li>
      <li>Username : &emsp; <?php echo   $_SESSION['user_username']; ?> </li>
      <li>Phone Number : &emsp; <?php echo "0", $_SESSION['user_phone']; ?> </li>
      <li>Gender: &emsp; <?php echo   $_SESSION['user_gender']; ?></li>
    </a>
    </ul>
    </main>
  </div>
  <?php
        include '../user/footeru.php';
        ?>
  </body>
</html>