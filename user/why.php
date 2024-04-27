<?php
include('../shared/nav.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Why to Donate</title>
    <link rel="stylesheet" href="../user/why.css">
</head>
<body>
    <br> <br> <br>
    <section class="blood">
    <div class="why"><h1>Why give blood?</h1s> </div>
    <p class="text">Why should people donate blood?
         <B>Safe blood saves lives.</B> <br>
    blood is needed by women with complications during <br>
     pregnancy and child birth, childern with severe anaemia, <br>
     often resulting from maleria or malnutrition, accident victims <br>
     and surgical and cancer patients.</p>
    </section> <br><br><br>
     <div class="process"><b>DONATION PROCESS</b> </div> <br><br>
     <section class="container">
        <div class="card">
            <div class="card-image first">
                <img src="registeration.jpg" alt="">
            </div>
            <h2>Registration</h2>
            <p>You need to complete a very simple registration form. which contains all required contact information to enter in the donation process.</p>
        </div>
        <div class="card">
            <div class="card-image second">
                <img src="screening.jpg" alt="">
            </div>
            <h2>Screening</h2>
            <p>A drop of blood from your finger will take for simple test to ensecure tht your blood iron levels are proper enough for donation process </p>
        </div>
        <div class="card">
            <div class="card-image third">
                <img src="donation.jpg" alt="">
            </div>
            <h2>Donation</h2>
            <p>After ensuring and passed screening test successfully you will be directed to a donor bed for donation. it will take only 6-10 minutes </p>
        </div>
     </section> <br><br><br>
     <div class="process"><b>Blood Types</b></div>
     <div class="table table">
         <table id="tab">
             <thead>

             </thead>
             <tbody>
                 <tr>
                     <th id="hello">Blood Type</th>
                     <th>Donate to</th>
                     <th>Recieve from</th>
                 </tr>
                 <tr><td class="kamal">A+</td> <td>A+ AB+</td> <td>A+ A- <br> O+ O-</td></tr>
                 <tr><td class="kamal"> o+</td><td>O+ A+ <br>B+ Ab+</td> <td>O+ O-</td> </tr>
                 <tr><td class="kamal">B+</td><td>B+ AB+</td> <td>B+ B- <br>O+ O- </td></tr>
                 <tr><td class="kamal">AB+</td><td>Ab+</td><td>All</td></tr>
                 <tr><td class="kamal">A- </td><td>A+ A- <br>AB+ AB-</td><td>A- O-</td></tr>
                 <tr><td class="kamal">O- </td><td>All</td><td>O-</td></tr>
                 <tr><td class="kamal">B-</td><td>B+ B- <br>AB+ AB- </td><td>B- o-</td></tr>
                 <tr><td class="kamal">AB-</td><td>AB+ AB-</td><td>AB- A- <br>B- O-</td></tr>
             </tbody>
         </table>
     </div>
     <?php
        include '../user/footeru.php';
        ?>
</body>
</html>