<?php
include '../shared/connection.php';
include '../shared/nav2.php';

$select = "SELECT * FROM `contact_us`";
$run_select = mysqli_query ($connect, $select);

if(isset($_GET['delete'])){
    $id=$_GET['delete'];
    $delete="DELETE FROM `contact_us` WHERE `message_id`=$id";
    $run_delete=mysqli_query($connect,$delete);
    header("location: /blood_project/admin/contactustable.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact us list </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

</head>
<body>
    <br>
    <br> 
    <br>
<table class="table table-striped-columns">

<thead>
        <th>  ID </th>
        <th>   Name </th>
        <th> Email</th>
        <th> the message </th>
        <th> Phone </th>
        <th> for Delete </th>

        
    </thead>
    <tbody>
    <?php foreach ($run_select as $record) { ?>
    <tr>

    <td> <?php echo $record ['message_id']; ?> </td>   
    <td> <?php echo $record ['message_name']; ?> </td>
       <td> <?php echo $record ['message_email']; ?> </td>
       <td> <?php echo $record ['message_content']; ?> </td>
       <td> <?php echo $record ['message_phone']; ?> </td>

       <td><a class="btn btn-danger" href="./contactustable.php?delete=<?php echo $record['message_id']; ?>" onclick="return confirm('Are you sure?')">Delete</a></td>
    </tr>
    <?php    } ?>
    </tbody>
</table>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  
</body>
    </html>