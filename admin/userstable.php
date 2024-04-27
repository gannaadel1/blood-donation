<?php
include '../shared/connection.php';
include '../shared/nav2.php';
$select="select * from `user`";
$selectquery=mysqli_query($connect,$select);

if(isset($_GET["delete"])){ 
    $id =$_GET["delete"];
    $delete="DELETE FROM `user` WHERE `user_id` = $id";
    $deletequery = mysqli_query($connect,$delete);
    header("location: /blood_project/admin/userstable.php");

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
        <th>User ID</th>
        <th>User fname</th>
        <th>User lname </th>
        <th>User name </th>
        <th>User iamge</th>
        <th>User phone</th>
        <th>User password</th>
        <th>User gender</th>
        <th> Delete</th>




        
    </thead>
    <tbody>
    <?php foreach($selectquery as $record ) {?>
    
    <tr>
        <td><?php echo $record["user_id"];?></td>
        <td><?php echo $record["user_fname"];?></td>
        <td><?php echo $record["user_lname"];?></td>
        <td><?php echo $record["user_username"];?></td>
        <td><?php echo $record["user_image"];?></td>
        <td><?php echo $record["user_phone"];?></td>
        <td><?php echo $record["user_password"];?></td>
        <td><?php echo $record["user_gender"];?></td>


        <td><a class="btn btn-danger" href="./userstable.php?delete=<?php echo $record['user_id']; ?>" onclick="return confirm('Are you sure?')">Delete</a></td>
        </tr>

<?php } ?>
    </tbody>
</table>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  
</body>
    </html>