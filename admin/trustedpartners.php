<?php
include ('../shared/connection.php');
include ('../shared/nav.php');
$select = "SELECT * FROM `foundations` ";
$run_select = mysqli_query($connect , $select);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trusted Places</title>
    <!-- fontawesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../admin/trust.css">
  
    <meta name="viewport" content="width=device-width, initial-scale=1.0" user-scalable="no">
</head>
<body>
  <h1>Donation places</h1>
 
  <section class="zed">
  
  <?php foreach($run_select as $data ) { ?> 
    <figure class="snip1390">
          
        <img src="<?php echo $data['foundation_image']; ?>" alt="profile-sample3" class="profile" />
        <figcaption>
          
          
          <blockquote>  <div class="card_content">
            <p class="card_title"><i class="fa-solid fa-user"><?php echo $data['foundation_name'];?></i>&emsp;</p>
            <br>
            <p class="card_text"><i class="fa-solid fa-location-dot"></i>&emsp;<?php echo $data['foundation_location'];?></p>
            <p class="card_text"><i class="fa-solid fa-phone"></i>&emsp;<?php echo "0"; echo $data['foundation_phone'];?></p>
          </div>  
        </blockquote>
        
        </figcaption>
      
      </figure>
      <?php } ?>
    </section>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      <script src="reviews.js"></script>

</body>
</html>
