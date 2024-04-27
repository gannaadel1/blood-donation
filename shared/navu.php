<?php
include("../shared/connection.php");


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../shared/nav.css">
    <link rel="stylesheet" href="../user/login.css">
    
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid cont">
                  <a class="navbar-brand" href="#">
                    <img src="../shared/Screenshot_2022-08-21_150958-removebg-preview.png" alt="" width="200" height="50" class="d-inline-block align-text-mid">
                  </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse NAVIGATION" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link " aria-current="page" href="../user/home.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " aria-current="page" href="../user/userprofile.php">My Profile</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " aria-current="page" href="../admin/trustedpartners.php">Our Partners</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " aria-current="page" href="../user/aboutus.php">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " aria-current="page" href="../user/contactus.php">Contact Us</a>
              </li>
              
            </ul>
          </div>
        </div>
      </nav>
</body>
</html>


