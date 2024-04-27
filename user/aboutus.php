<?php
include '../shared/nav.php';
include '../shared/connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Donate</title>
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="aboutus.css">
</head>
 <body>
    <!-- =========Start Navbar========= -->

     <!-- =========End Navbar========= -->  
     <!-- ======cards start here==+====-->
     <h1>About us</h1>
     <div class="container">
        <div class="who">
            <div class="icon"></class><i class="fa-solid fa-user-doctor"></i></div>
            <br>
            <p class="head">Who are we?</p>
            <p><span class="bold">ReLife</span> is a nonprofit organization that was formed in 2005.we work in partnership with the Egypt’s blood center,a network of community blood centers that are responsible for nearly 60 percent of the blood supply. </p>
            
        </div>
        <div class="mission">
            <div class="icon"><i class="fa-solid fa-house-medical-flag"></i></div>
            <br>
            <p class="head">The Mission</p>
            <p>We believes that no one should die for lack of access to a safe and adequate blood supply.Our mission is to fund initiavties that improve the availability,quality and safety of blood and related products to save,extend,or enhance the lives of patients.</p>
            
        </div>
        <div class="stakeholders">
            <div class="icon"><i class="fa-solid fa-people-group"></i></div>
            <br>
            <p class="head">Our Stakeholders</p>
            <p>Our first responsibility is to the pastients and their loved ones,as well as the blood donors who give their time and support,other stakeholders include those who support and belive in our mission.</p>
        
        </div>
     </div>
     <hr>
     <div id="our">
        <br> 
        <h1>Our Values</h1>
        <p class="abyd">ReLife protects and advances our member’s intersets by: </p>
        <ul class="list">
            <li> 
             <b>Advocating</b>  for laws and regulations recognizing the essential role that independent blood centers play in the healthcare system
            </li>
            <li>
                <b>Respect</b> for the worth and dignity of individuals.
            </li>
            <li>
                <b>Serving</b> as a thought-leader in the advancement of evidence-based medical related to health and safety
            </li>
            <li>
                <b>Commitment</b>  beyond the law
            </li>
            <li>
                <b>Inclusiveness, Social justice</b> and respect for diversity
            </li>
        </ul> 
    </div>
     <!-- our values ENDs here-->
     <hr>
         <!-- ======our partners start here======-->
         <h1>our partners</h1>
         <div class="container">
            <div class="partners">
                <div class="icon"></class><i class="fa-solid fa-handshake"></i></div>
                <br>
                <p class="head">Tabibi</p>
                <p class="head2">Tabibi,digital health platform, announced latealy our new partnership about the plasma Project to collect Blood Plasma and manufacture its derivatives.
                    <br>
                    Founded in 2011,Tabibi has over two million pages, 24/7 Telehealth service in <b> seven Arab countries</b> and +500,000 daily users.Publishing promotional information on its platform to encourage users to donate.
                </p>
                
            </div>
            <div class="partners">
                <div class="icon"><i class="fa-solid fa-handshake"></i></div>
                <br>
                <p class="head">Blood Health Network</p>
                <p  class="head2">The <b>Blood Health Network</b> is coordinated by the Blood Diseases and Disorders Education program, a national health education program led by the National Herat,lung ,and Blood institute (NHLBI). it is comprised of public and private organizations and programs from across the country, including patint and advocacy organizations, federal agencies , nonprofits, and community-based organizations.</p>
                
            </div>
       
         </div>
<?php
include '../user/footeru.php';
?>
    <!-- linking bootstrap -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
 </body>
</html>