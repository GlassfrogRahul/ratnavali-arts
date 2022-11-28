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
        content="At Ratnavaliarts we belive in making women empowerment Ratnavali Arts is a platform for women empowerment that shares stories, articles and art from diverse women around the world.
" />
    <title>Ratnavali Arts -  Women Empowerment </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/index.css">
</head>
<body class="page">

    <?php include('header.php'); ?>

    <main class="main" id="main">

        <!--Banner-->
        <section class="banner">
            <video preload="none" src="./asssets/video/v3.mp4" autoplay="true" playsinline="true" muted loop height="auto" width="100%"></video>
        </section><!--End Banner-->

        <!--Video Section-->
        <section class="video-section">
            <div class="container d-flex flex-column align-items-center">
                <h1 class="h2 -u-color-brown mb-5">The Magic Of Women Artisans</h1>
                <p class="mb-5 col-md-8">It's all about believing in yourself! <br> Our women artisans our strength!</p>
                <div class="video-box col-md-10">
                    <button class="play " onclick="playVideo(this)" type="button"><img src="./asssets/svg/play-button.svg" alt="Play Button"></button>
                    <button class="pause active" onclick="pauseVideo(this)" type="button"><img src="./asssets/svg/pause-button.svg" alt="Pause Button"></button>
                    <video preload="none" src="./asssets/video/w2.mp4" playsinline="true" muted loop height="auto" width="100%"></video>
                </div>
            </div>
        </section><!--End Video Section-->

        <!--Banner-->
        <section class="banner">
            <img src="./asssets/images/women-banner.png" width="100%" height="auto" alt="Process Image">
        </section><!--End Banner-->

        <!--Card Text Box-->
        <section class="card-text-box">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-7 mt-5 col-xl-">
                        <div class="row card-image-row">
                            <div class="col-md-6 mb-5">
                                <img src="./asssets/images/shw-1.png" width="100%" height="100%" alt="">
                            </div>
                            <div class="col-md-6 mb-5">
                                <img src="./asssets/images/shw-2.png" width="100%" height="100%" alt="">
                            </div>
                            <div class="col-md-6 mb-5 mb-lg-0">
                                <img src="./asssets/images/shw-3.png" width="100%" height="100%" alt="">
                            </div>
                            <div class="col-md-6 mb-5 mb-lg-0">
                                <img src="./asssets/images/shw-4.png" width="100%" height="100%" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-xl-">
                        <div class="card card-text d-flex flex-column align-items-center text-center">
                            <img src="./asssets/images/monogram.png" class="mb-3" width="30" height="30" alt="Monogram Logo">
                            <h3 class="mb-5 text-normal h2 -u-color-brown">WOMEN ARTISANS</h3>
                            <p>Women are nurtured by nature. They fulfil various responsibilities every day, be it of a mother, a wife, a daughter or a daughter-in-law. </p>
                            <p>Our women artisans are a part of our business where they sole handedly handle thread collection and working with full dedication. </p>
                            <p>Our ladies are amazing learners and have made impressive progress. Not only some products are made but our women artist has completed thousands of orders of thread pieces. Not only thread collection, our women artisans are working in jewellery manufacturing also.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--End Card Text Box-->

        <!--Images Grid-->
        <section class="images-grid">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <img src="./asssets/images/g-1.png" width="100%" height="auto" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8">
                        <img src="./asssets/images/g-2.png" width="100%" height="auto" alt="">
                    </div>
                    <div class="col-lg-4">
                        <div class="row h-100">
                            <div class="col-6 col-md-12">
                                <img src="./asssets/images/g-3.png" width="100%" height="100%" alt="">
                            </div>
                            <div class="col-6 col-md-12">
                                <img src="./asssets/images/g-4.png" width="100%" height="100%" alt="">
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="row h-100">
                            <div class="col-6 col-md-12">
                                <img src="./asssets/images/g-5.png" width="100%" height="100%" alt="">
                            </div>
                            <div class="col-6 col-md-12">
                                <img src="./asssets/images/g-6.png" width="100%" height="100%" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <img src="./asssets/images/g-7.png" width="100%" height="auto" alt="">
                    </div>
                    
                </div>
            </div>
        </section><!--End Images Grid-->

        <!--Heading Box-->
        <section class="heading-box -u-bg-light-brown">
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