<?php
include '../shared/connection.php';
include '../shared/nav2.php';

$select = "SELECT * FROM `patient`";
$run_select = mysqli_query ($connect, $select);

if(isset($_GET['delete'])){
    $id=$_GET['delete'];
    $delete="DELETE FROM `patient` WHERE `patient_id`=$id";
    $run_delete=mysqli_query($connect,$delete);
    header("location: /blood_project/admin/patienttable.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Table </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

</head>
<body>
    <br>
<table class="table table-striped-columns">

<thead>
        <th>  ID </th>
        <th>   National ID </th>
        <th> Patient Name</th>
        <th> Patient Phone </th>
        <th> Patient Age </th>
        <th> Patient Address</th>
        <th> Patient Location </th>
        <th> Blood Type </th>
        <th> Patient Diseases </th>
        <th> Patient Gender </th>
        <th> for Delete </th>

        
    </thead>
    <tbody>
    <?php foreach ($run_select as $record) { ?>
    <tr>

    <td> <?php echo $record ['patiend_id']; ?> </td>   
    <td> <?php echo $record ['national_id']; ?> </td>
       <td> <?php echo $record ['patient_name']; ?> </td>
       <td> <?php echo $record ['patient_phone']; ?> </td>
       <td> <?php echo $record ['patient_age']; ?> </td>
       <td> <?php echo $record ['patient_address']; ?> </td>
       <td> <?php echo $record ['patient_location']; ?> </td>
       <td> <?php echo $record ['blood_type']; ?> </td>
       <td> <?php echo $record ['patient_diseases']; ?> </td>
       <td> <?php echo $record ['patient_gender']; ?> </td>
      

       <td><a class="btn btn-danger" href="./patienttable.php?delete=<?php echo $record['patient_id']; ?>" onclick="return confirm('Are you sure?')">Delete</a></td>
    </tr>
    <?php    } ?>
    </tbody>
</table>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script> 
</body>
    </html>