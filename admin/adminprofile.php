<?php
include '../shared/connection.php';
include '../shared/nav2.php';
if(isset($_POST['editpass'])){
    header("location: /blood_project/admin/editpassword.php");
}
if(isset($_POST['logout']))
{
    session_unset();
    session_destroy();
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
          <img  src="<?php echo $_SESSION['admin_image'];?>" style="width:30%;" alt="">
          <p><?php  echo $_SESSION['admin_name']; ?></p>
        </div>

        <a href="editpassword.php">
          <i class="fa-solid fa-lock"></i>
          <span>Change Password</span>
        </a>
        <hr>
        <a href="../admin/dashboard.php">
          <i class="fa-solid fa-house-chimney"></i>
          <span>Dashboard</span>
        </a>
        <a href="../admin/donationtable.php">
          <i class="fa-solid fa-hand-holding-medical"></i>
          <span>Blood Donors</span>
        </a>
        <a href="../admin/addfoundation.php">
          <i class="fa-solid fa-handshake-angle"></i>
          <span>Add foundation</span>
        </a>
        <a href="../admin/addadmin.php">
          <i class="fa-solid fa-user-tie"></i>
          <span>Add Admin</span>
        </a>
        <br><br><br><br><br><br><br><br><br>
        <form method="POST">
          <?php if($_SESSION['admin_id']) { ?>
          <button name="logout" style="width:100%;" class="btn btn-danger">Logout</button>
         
        <?php } ?>
</form>
      </nav>
    </aside>

    <main >
      <div class="main">
        <img  src="<?php echo $_SESSION['admin_image'];?>" style="width:100%;margin-left:50%;" alt="pic">
       
    </div>
    <ul class="info" style="margin-right:30%;">
      <li>Name : &emsp; <?php  echo $_SESSION['admin_name']; ?></li>
      <li >Username : &emsp; <?php echo  $_SESSION['admin_username']; ?></li>
      <li>Role : &emsp; <?php echo  $_SESSION['admin_title']; ?></a>
    </ul>
    </main>
  </div>
  <?php
        include '../admin/footera.php';
        ?>
  </body>
</html>
