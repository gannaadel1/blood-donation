<?php
include("../shared/connection.php");
if(isset($_POST['logout']))
{
    session_unset();
    session_destroy();
   header("location: /blood_project/admin/adminlogin.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../admin/blood.css">
    <title>Document</title>
</head>
<body>
<header>
      <img src="../admin/heart.png" alt="pic" class="logo">
      </img>
      <form method="POST"> 
      <nav>
        
        <?php 
        if($_SESSION['admin_id'])
        { ?>
        <a href="../admin/adminprofile.php">Profile</a>
        <a href="../admin/dashboard.php">Dashboard</a>
        <a href="../admin/contactustable.php">Messages</a>
        <a href="../admin/donationtable.php">Donators</a>
        <a href="../admin/patienttable.php">Patients</a>
        <a href="../admin/foundations.php">Foundations</a>
        <a href="../admin/userstable.php">Users</a>
        <a href="../admin/apptable.php">Volunteers</a>
         <!-- <button class="btn btn-danger" type="submit" name="logout" >logout</button> -->
       <?php } ?>
      </nav>
      </form>
    </header>
</body>
</html>