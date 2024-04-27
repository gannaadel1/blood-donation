<?php
include('../shared/connection.php');
include('../shared/nav.php');

if(isset($_POST['submit']))
{
 
    $nid= $_POST['nid'];
    $fname = $_POST['fname'];
    $phone= $_POST['phone'];
    $job= $_POST['job'];
    $age= $_POST['age'];
    $image= $_POST['image'];    
    $select = "SELECT * FROM `application` WHERE `app_nid` = '$nid'";
    $run_select = mysqli_query($connect , $select);
    $row = mysqli_num_rows($run_select);
    if($row>0)
    {
       
    }
    else
    {
      $insert= "INSERT INTO `application` VALUES (NULL, '$nid','$fname' , '$phone' , '$job','$age','$image')";
      $run_insert = mysqli_query($connect , $insert);
        header("location: /blood_project/user/home.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Volunteers</title>
    <link rel="stylesheet" href="../user/job.css">
</head>
<body>
<div class="card">
      <p class="text">Application</p>
      <form class=""  method="post">
        <label for="">Full Name</label>
        <input type="text" name="fname" value="">

        <label for="">National ID</label>
        <input type="number" name="nid" value="">

        <label for="">Phone Number</label>
        <input type="number" name="phone" value="">

        <label for="">Age</label>
        <input type="number" name="age" value="">

        <label for="">Job title</label>
        <input type="text" name="job" value="">

        <label for="">image</label>
        <input type="file" name="image" value="">

 <br><br>  
<button type="submit" class="add" name="submit" id="button">submit</button>
<?php
              if (isset($_POST['submit']))
    {   
      echo "<b class='err'>National ID submited before</b>";
    }
?>
</form>
</div>
<?php
        include '../user/footeru.php';
        ?>
</body>
</html>


