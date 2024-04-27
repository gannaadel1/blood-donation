<?php
include('../shared/connection.php');
include('../shared/nav2.php');
if(isset($_POST['submit']))
{
    $fname = $_POST['foundation_name'];
    $fimage= $_POST['foundation_image'];
    $flocation= $_POST['foundation_location'];
    $fphone= $_POST['foundation_phone'];

    
  $insert= "INSERT INTO `foundations` VALUES (NULL, '$fname' , '$fimage' , '$flocation' , '$fphone')";
    $run_insert = mysqli_query($connect , $insert);

}
$update = false;
$fname = "";
$fimage = "";
$flocation = "";
$fphone = "";

$update = false;
if(isset($_GET['edit'])){
    $update = true;
    $id =$_GET['edit'];
    $select = "SELECT * FROM `foundations` WHERE `foundation_id` = $id ";
    $run_select = mysqli_query($connect , $select);
    $array = mysqli_fetch_assoc($run_select);
    $fname = $array['foundation_name'];
    $fimage = $array['foundation_image'];
    $flocation= $array['foundation_location'];
    $fphone= $array['foundation_phone'];
}

if(isset($_POST['update']))
{
    $fname = $_POST['foundation_name'];
    $fimage = $_POST['foundation_image'];
    $flocation= $_POST['foundation_location'];
    $fphone=$_POST['foundation_phone'];

    if($_FILES["foundation_image"]["size"] == 0){
      $update1 ="UPDATE `foundations`
    SET `foundation_name` = '$fname',
    `foundation_location` = '$flocation',
    `foundation_phone` = '$fphone'
    WHERE `foundation_id` = $id ";
    $run_update = mysqli_query($connect , $update1);
    header("location: /blood_project/admin/foundations.php");
    }else{
      $update1 ="UPDATE `foundations`
    SET `foundation_name` = '$fname',
    `foundation_image` = '$fimage',
    `foundation_location` = '$flocation',
    `foundation_phone` = '$fphone'
    WHERE `foundation_id` = $id ";
    $run_update = mysqli_query($connect , $update1);
    header("location: /blood_project/admin/foundations.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Foundation</title>
    <link rel="stylesheet" href="../admin/foundation.css">
</head>
<body>
<div class="card">
      <p class="text">Foundations</p>
      <form class=""  method="post">
        <label for="">Foundation Name</label>
        <input type="text" name="foundation_name" value="<?php echo  $fname ;?>">
        <label for=""> Foundation Location</label>
        <input type="text" name="foundation_location" value="<?php echo  $flocation ;?>">
        <label for="">Foundation Phone</label>
        <input type="number" name="foundation_phone" value="<?php echo $fphone ?>">
        <label for="">image</label>
        <input type="file" name="foundation_image">
        
      <?php
      if ($update){

      
      ?> 
      <br>
      <button type="submit" name="update" id="button"> update</button>
      <?php }
      else{

      ?>
<br><br>
<button type="submit" class="add" name="submit" id="button"> Add foundation</button> <?php } ?>
</form>
</div>
<?php
        include '../admin/footera.php';
        ?>
</body>
</html>


