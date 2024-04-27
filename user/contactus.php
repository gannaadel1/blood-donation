<?php
  include '../shared/Connection.php';
  include '../shared/nav.php';
    
    if(isset($_POST['submit'])){
      $uname = $_POST['uname'];
      $umessage = $_POST['umessage'];
      $uemail = $_POST['uemail'];
      $uphone=$_POST['uphone'];
      
      $insertQuery = "INSERT INTO `contact_us` VALUES(NULL, '$uname','$uemail','$umessage','$uphone')";
      $insert_run = mysqli_query($connect, $insertQuery); 
      header("location: /blood_project/user/home.php");
     
}
     
    
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>now</title>
    <!-- fontawesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- fontawesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!-- style css -->
    <link rel="stylesheet"href="../user/contactus.css">
  </head>
  <body>
   
    
    
    <div class="card mb-3 w-70" >
      <div class="row">
        <div class="col-md-4 col-sm-12">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3453.731910946314!2d31.239307585419866!3d30.044548181882323!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145840ce4e765e11%3A0x3aabc54aa10fb3d!2z2KfZhNiq2K3YsdmK2LHYjCDYp9mE2K_ZiNin2YjZitmG2Iwg2LnYp9io2K_ZitmG2Iwg2YXYrdin2YHYuNipINin2YTZgtin2YfYsdip4oCs!5e0!3m2!1sar!2seg!4v1661089373217!5m2!1sar!2seg"  height="490px" width=400px style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" margin-right=25%></iframe>
        </div>
        <div class="col-md-8">
          <div class="card-body">  
            <h5 class="card-title">Contact us <i class="fa-solid fa-phone"></i></h5>
          </div>
      
          <div>
                <form class="bord" method="POST">
                  <div>
                    <label for="fname">&emsp;Full Name</label><br>
                    <input type="text" id="fname" name="uname"class="inbut" ><br>
                    <label for="email">&emsp;Email</label><br>
                    <input type="email" id="email" name="uemail"class="inbut"><br>
                    <label for="phone">&emsp;Phone number </label><br>
                    <input type="tel" id="phone" name="uphone"class="inbut">
                    <br><br>
                  </div>
                  <div>
                    <label for="message">&emsp; Your Message <i class="fa-solid fa-envelope"></i></label><br>
                    <textarea name="umessage" id="message" class="inbut" placeholder="Please Write Your Message"></textarea>
                    <br><br>
                    <input type="submit" value="Send" name="submit" id="signup" >
                  </div>
                
                </form>
              </div>
          </div>
          </div>
          </div></div>

        <?php
        include '../user/footeru.php';
        ?>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
      
    </body>
    </html>