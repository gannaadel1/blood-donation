<?php
include ('../shared/connection.php');
include ('../shared/nav2.php');
$queryuser="SELECT  COUNT(*) AS countuser fROM `user`";
$query_result_user=mysqli_query($connect,$queryuser);
while($record= mysqli_fetch_assoc($query_result_user))
{
    $outputuser = $record['countuser'];
}
$querymessages="SELECT  COUNT(*) AS countmessages fROM `contact_us`";
$query_result_messages=mysqli_query($connect,$querymessages);
while($record= mysqli_fetch_assoc($query_result_messages))
{
    $outputmessage = $record['countmessages'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>teachers</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link rel="stylesheet" href="../admin/style.css">
    <link rel="stylesheet" href="../admin/blood.css">
</head>
<body>
    <br>
    <div class="title"> <b>Dashboard</b></div> <br> 
    <section class="container">
        <div class="card">
            <i class="fa-solid fa-comments icon"></i>
            <p>Comments</p>
            <h2><?php
  echo $outputmessage;
    ?> </h2>
        
    <br>
    <br>
    <br>
             
        </div>
        <div class="card">
            <i class="fa-solid fa-person-circle-check icon"></i>
            <p>users</p>
            <h2>    <?php
    echo $outputuser;
    ?></h2>
            
            <h3></h3>
        </div>
       
        </div>
    </section>
    <?php
        include '../admin/footera.php';
        ?>
</body>
</html>