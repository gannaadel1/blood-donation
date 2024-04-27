<?php
include '../shared/connection.php';
include '../shared/nav2.php';

if(isset($_POST['change']))
{
    $old=$_POST['old'];
    
    $id=$_SESSION['admin_id'];
$select = "SELECT * FROM `admin` WHERE `admin_id` = $id";
$run_select = mysqli_query($connect , $select);
$array = mysqli_fetch_assoc($run_select);
$admin_password = $array['admin_password'];
    if($old == $admin_password)
    {
      $new=$_POST['new'];
      $confirm=$_POST['confirm'];
       if($new=="$confirm")
       {
            
            $update1="UPDATE `admin` SET `admin_password` = '$new' WHERE `admin_id` = $id ";
            $run_update=mysqli_query($connect,$update1);
            header("location: /blood_project/admin/adminprofile.php");

       }
       else
       {
        echo "not typical password";
       }
    }
    else
    {
        echo"wrong password";
    }
}
if(isset($_POST['cancel']))
{
  header("location: /blood_project/admin/adminprofile.php");
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="change-password.css">
    <link rel="stylesheet" href="../admin/blood.css">

    <title></title>
  </head>
  <body>

    <div class="contentedit">
        <img src="../admin/blood1.png" alt="pic">
      <div class="change">
        <h3>Change Password</h3>
        <div class="password">
          <form   method="post">
            <label for="">Old Password</label>
            <input type="password" name="old" >
            <label for="" class="text">New Password</label>
            <input type="password" name="new" >
            <label for="" class="text">Confirm New Password</label>
            <input type="password" name="confirm" >
            <button  type="submit" name="change"  class="change1">change</button>
            <button class="cancel" type="submit" name="cancel" class="cancel">cancel</button>
          </form>
            </div>
         
      </div>
    </div>
    <?php
        include '../admin/footera.php';
        ?>
  </body>
</html>
