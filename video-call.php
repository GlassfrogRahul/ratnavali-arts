<?php
    require_once('config.php');
    require_once('authentication.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords"
        content="Jewellery Manufacturer,  Jewelry Manufacturer from Jaipur,  Silver Jewellery Manufacturer,  Gold Jewellery Manufacturer,  Designer Jewelry Manufacturer,  Gemstone Jewellery Manufacturer Gemstone Jewellery Manufacturer Jaipur, Gold Jewellery Wholesale" />
    <meta name="description"
        content="At Ratnavaliarts.com, We are providing the video call option where you can come and visit our whole manufacturing unit." />
    <title>Ratnavali Arts - Video Call Available With Us</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/index.css">
</head>
<body class="page">

    <?php include('header.php'); ?>

    
    <main class="main" id="main">

        <section class="banner-lg">
            <h1 class="h2">An inside look at our manufacturing UNIT</h1>
            <img src="./asssets/images/video-banner.png" alt="">
        </section>

        <section class="card-text-box">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-9 col-md-9">
                        <div class="card card-text card-text-lg d-flex flex-column align-items-center text-center">
                            <img src="./asssets/images/monogram.png" class="mb-5" width="30" height="30" alt="Monogram Logo">
                            <h2 class="mb-3">Video Call Facility</h2>
                            <p>We are providing the video call option where  you can come and visit our whole manufacturing unit with us. </p>
                            <p>Click on book appointment to see the available time and date for your appointment and book it for factory visit.</p>
                            <a href="book-appointment.php" class="btn d-flex align-items-center">Book Appointment</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--Heading Box-->
        <section class="heading-box -u-bg-light-brown mt-5 pt-5">
            <h3 class="text-center">TAKE A LOOK AROUND</h3>
        </section><!--End Heading Box-->

        <!--Two Column-->
        <section class="two-column">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <a href="index.php"><span>HOMEPAGE</span></a>
                    </div>
                    <div class="col-md-6 position-relative">
                        <img src="./asssets/images/homepage.png" width="100%" height="400" alt="">
                    </div>
                </div>
            </div>
        </section><!--End Two Column-->

        <!--Two Column-->
        <section class="two-column">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 position-relative">
                        <img src="./asssets/images/contact.png" width="100%" height="400" alt="">
                    </div>
                    <div class="col-md-6">
                        <a href="contact.php"><span>CONTACT</span></a>
                    </div>
                </div>
            </div>
        </section><!--End Two Column-->

    </main>

    <?php include('footer.php'); ?>

    
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="./js/custom.js"></script>
</html>