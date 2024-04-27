<?php
include '../shared/connection.php';
include '../shared/nav2.php';
$select="select * from `application`";
$selectquery=mysqli_query($connect,$select);
if(isset($_GET["delete"])){ 
    $id =$_GET["delete"];
    $delete="DELETE FROM `application` WHERE `app_id` = $id";
    $deletequery = mysqli_query($connect,$delete);
    header("location: /blood_project/admin/apptable.php");

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>users</title>
    <link rel="stylesheet" href="../admin/blood.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
   
</head>
<body>
    <br>
    <br>
    
<table class="table table-striped-columns">

<thead>
        <th>applicant ID</th>
        <th>National ID</th>
        <th>Full Name</th>
        <th>Phone Number </th>
        <th>Job Title</th>
        <th>Age</th>
        <th>Iamge</th> 
        <th>Delete</th>
    </thead>
    <tbody>
    <?php foreach($selectquery as $record ) {?>
    
    <tr>
        <td><?php echo $record["app_id"];?></td>
        <td><?php echo $record["app_nid"];?></td>
        <td><?php echo $record["app_fname"];?></td>
        <td><?php echo $record["app_phone"];?></td>
        <td><?php echo $record["app_job"];?></td>
        <td><?php echo $record["app_age"];?></td>
        <td><?php echo $record["app_image"];?></td>
        <td><a class="btn btn-danger" href="../admin/apptable.php?delete=<?php echo $record['app_id']; ?>" onclick="return confirm('Are you sure?')">Delete</a></td>
        </tr>

<?php } ?>
    </tbody>
</table>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  
</body>
    </html>