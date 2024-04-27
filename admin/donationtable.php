

<?php
include '../shared/connection.php';
include '../shared/nav2.php';

$select = "SELECT * FROM donator";
$run_select = mysqli_query ($connect, $select);

if(isset($_GET['delete'])){
    $id=$_GET['delete'];
    $delete="DELETE FROM donator WHERE donator_id=$id";
    $run_delete=mysqli_query($connect,$delete);
    header("location: /blood_project/admin/donationtable.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>foundations</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

</head>
<body>
    <br>
    <br>
    <br>
<table class="table table-striped-columns">

<thead>
<th> ID</th>
<th> national_id</th>
<th> name</th>
<th>phone</th>
<th> donator_age</th>
<th> donator_address</th>
<th> donator_location  </th>
<th> blood_type </th>

<th> donator_diseases  </th>
        <th> for Delete </th>

        
    </thead>
    <tbody>
    <?php foreach ($run_select as $record) { ?>
    <tr>

    <td> <?php echo $record ['donator_id']; ?> </td>   
    <td> <?php echo $record ['national_id']; ?> </td>  
    <td> <?php echo $record ['donator_name']; ?> </td>
       <td> <?php echo $record ['donator_phone']; ?> </td>
       <td> <?php echo $record ['donator_age']; ?> </td>
       <td> <?php echo $record ['donator_address']; ?> </td>
       <td> <?php echo $record ['donate_location']; ?> </td>
       <td> <?php echo $record ['blood_type']; ?> </td>
       
       <td> <?php echo $record ['donator_diseases']; ?> </td>

       <td><a class="btn btn-danger" href="./donationtable.php?delete=<?php echo $record['donator_id']; ?>" onclick="return confirm('Are you sure?')">Delete</a></td>
    </tr>
    <?php    } ?>
    </tbody>
</table>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  
</body>
    </html>


