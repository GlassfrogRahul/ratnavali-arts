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
    <title>Document</title>
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
            <video src="./asssets/video/v1.mp4" class="d-none d-md-block" autoplay playsinline muted="true" loop height="auto" width="100%"></video>
            <video src="./asssets/video/m1.mp4" class="d-md-none" autoplay playsinline muted="true" loop height="auto" width="100%"></video>

        </section><!--End Banner-->

        <!--Video Section-->
        <section class="video-section">
            <div class="container d-flex flex-column align-items-center">
                <h1 class="h2 -u-color-brown mb-5">Believe In Magic</h1>
                <p class="mb-5 col-md-11">At Ratnavali Arts, designing jewellery is not just a job, it is our ongoing passion. Working with all their dedication, craftspeople meticulously transpose the paper sketch into real jewellery.</p>
                <div class="video-box col-md-10">
                    <button class="play " onclick="playVideo(this)" type="button"><img src="./asssets/svg/play-button.svg" alt="Play Button"></button>
                    <button class="pause active" onclick="pauseVideo(this)" type="button"><img src="./asssets/svg/pause-button.svg" alt="Pause Button"></button>
                    <video src="./asssets/video/v2.mp4" playsinline muted="true" loop height="auto" width="100%"></video>
                </div>
            </div>
        </section><!--End Video Section-->

        <!--Heading Box-->
        <section class="heading-box -u-bg-light-brown">
            <h2 class="h2 text-center text-normal">MANUFACTURING</h2>
        </section><!--End Heading Box-->

        <!--Banner-->
        <section class="banner">
            <img src="./asssets/images/manufacturing.png" width="100%" height="auto" alt="Process Image">
        </section><!--End Banner-->

        <!--Card Text Box-->
        <section class="card-text-box">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-7 mt-5 col-xl-">
                        <div class="row card-image-row">
                            <div class="col-6 mb-5">
                                <img src="./asssets/images/sh-1.png" width="100%" height="100%" alt="">
                            </div>
                            <div class="col-6 mb-5">
                                <img src="./asssets/images/sh-2.png" width="100%" height="100%" alt="">
                            </div>
                            <div class="col-6 mb-5 mb-lg-0">
                                <img src="./asssets/images/sh-3.png" width="100%" height="100%" alt="">
                            </div>
                            <div class="col-6 mb-5 mb-lg-0">
                                <img src="./asssets/images/sh-4.png" width="100%" height="100%" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-xl-">
                        <div class="card card-text d-flex flex-column align-items-center text-center">
                            <img src="./asssets/images/monogram.png" class="mb-3" width="30" height="30" alt="Monogram Logo">
                            <h3 class="mb-5 text-normal h2 -u-color-brown">JEWELRY MANUFACTURING</h3>
                            <p>At Ratnavali Arts, we create pieces with artful decorative details. We are the whole company that starts working from scratch and making a product live.</p>
                            <p>We are a jewelry manufacturing company that makes every product from the heart and guarantees that it is of the best quality. </p>
                            <p>We work with brands and their designers to bring their products to market, efficiently, and of the highest quality. </p>
                            <p>Much of the fame and success of the company can be attributed to the extremely skilled set of artisans who have been working with Ratnavali Arts for many years.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--End Card Text Box-->

        <!--Heading Box-->
        <section class="heading-box -u-bg-light-brown">
            <h2 class="h2 text-center text-normal">ROUGH TO STONE</h2>
        </section><!--End Heading Box-->

        <!--Banner-->
        <section class="banner">
            <img src="./asssets/images/rough-to-stone.png" width="100%" height="auto" alt="Process Image">
        </section><!--End Banner-->

        <!--Card Text Box-->
        <section class="card-text-box">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-7 mt-5 col-xl-">
                        <div class="row card-image-row">
                            <div class="col-6 mb-5">
                                <img src="./asssets/images/shb-1.png" width="100%" height="100%" alt="">
                            </div>
                            <div class="col-6 mb-5">
                                <img src="./asssets/images/shb-2.png" width="100%" height="100%" alt="">
                            </div>
                            <div class="col-6 mb-5 mb-lg-0">
                                <img src="./asssets/images/shb-3.png" width="100%" height="100%" alt="">
                            </div>
                            <div class="col-6 mb-5 mb-lg-0">
                                <img src="./asssets/images/shb-4.png" width="100%" height="100%" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-xl-">
                        <div class="card card-text d-flex flex-column align-items-center text-center">
                            <img src="./asssets/images/monogram.png" class="mb-3" width="30" height="30" alt="Monogram Logo">
                            <h3 class="h2 mb-5 text-normal -u-color-brown">STONE MANUFACTURING</h3>
                            <p>Some of the world's  prestigious jewelry houses trust Ratnavali to polish  and transform stones. We find out the rough and select its part from where to take a stone out after selecting the area and marking it we start cutting a stone a go further with polishing.</p>
                            <p>In order to produce the best gems, we always search for the best material because it is our gems' rare beauty and unique quality that often times attracts customers. It inspires us to create our most spectacular pieces</p>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--End Card Text Box-->

        <!--Two Column-->
        <section class="two-column mt-5 d-none">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <p>We're one of the renowned jewelry manufacturers in Jaipur. We provide the most professionally crafted and custom jewelry with full in-house service from start to end. </p>
                    </div>
                    <div class="col-md-6 position-relative">
                        <img src="./asssets/images/we-are-one.png" width="100%" height="400" alt="">
                    </div>
                </div>
            </div>
        </section><!--End Two Column-->

        <!--Two Column-->
        <section class="two-column d-none">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 position-relative">
                        <img src="./asssets/images/women-empowerment.png" width="100%" height="400" alt="">
                    </div>
                    <div class="col-md-6">
                        <a href="./women-empowerment.php"><span>WOMEN EMPOWERMENT</span></a>
                    </div>
                </div>
            </div>
        </section><!--End Two Column-->

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