<?php
include '../shared/connection.php';
include '../shared/nav2.php';
$select="select * from `foundations`";
$selectquery=mysqli_query($connect,$select);

if(isset($_GET["delete"])){
    $id =$_GET["delete"];
    $delete="DELETE FROM `foundations` WHERE `foundation_id` = $id";
    $deletequery = mysqli_query($connect,$delete);
    header("location: /blood_project/admin/foundations.php");

}
// if(isset($_POST['add']))
// {
//     header("location: /blood_project/admin/addfoundation.php");
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>foundations</title>
    <link rel="stylesheet" href="../admin/blood.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

</head>
<body>
    <!-- <form method="post">
        <button name="add" class="btns">Add foundation</button>
    </form> -->
    <br>
    <br>
<table class="table table-striped-columns">

<thead>
        <th>ID</th>
        <th>foundation name</th>
        <th>foundation image</th>
        <th>foundation location</th>
        <th>foundation phone</th>
        <th>for Delete</th>
        <th>for Update</th>

        
    </thead>
    <tbody>
    <?php foreach($selectquery as $record ) {?>
    
    <tr>
        <td><?php echo $record["foundation_id"];?></td>
        <td><?php echo $record["foundation_name"];?></td>
        <td><?php echo $record["foundation_image"];?></td>
        <td><?php echo $record["foundation_location"];?></td>
        <td><?php echo $record["foundation_phone"];?></td>

        <td><a class="btn btn-danger" href="./foundations.php?delete=<?php echo $record['foundation_id']; ?>" onclick="return confirm('Are you sure?')">Delete</a></td>
        <td><a class="btn btn-info" href="./addfoundation.php?edit=<?php echo $record ['foundation_id']; ?>" onclick="return confirm('Are you sure?')">Update</a></td>
        </tr>

<?php } ?>
    </tbody>
</table>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
 
</body>
    </html>