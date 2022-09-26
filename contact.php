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

        <!--Form-->
        <section class="form-section -u-bg-light-brown mt-5">
            
            <div class="container-lg">
                <h1 class="h2 text-normal text-center -u-color-brown mb-4">Get in touch</h1>
                <p class="col-xl-5 col-lg-6 mx-auto mb-5 text-center">To inquire, please fill out the form below and our customer service team will contact you.</p>
                <form action="#" class="row">
                    <div class="col-md-6 mb-5">
                        <input type="text" name="first-name" id="first-name" placeholder="FIRST NAME*" required>
                    </div>
                    <div class="col-md-6 mb-5">
                        <input type="text" name="last-name" id="last-name" placeholder="LAST NAME*" required>
                    </div>
                    <div class="col-md-6 mb-5">
                        <input type="number" name="phone" id="phone" placeholder="CONTACT NUMBER*" required>
                    </div>
                    <div class="col-md-6 mb-5">
                        <input type="email" name="email" id="email" placeholder="EMAIL*" required>
                    </div>
                    <div class="col-12 mb-5">
                        <textarea name="message" id="message" rows="5" placeholder="MESSAGE*"></textarea>
                    </div>
                    <div class="col-12 d-flex align-items-center justify-content-center">
                        <button type="submit">SUBMIT AN ENQUIRY</button>
                    </div>
                </form>
            </div>
        </section><!--End Form-->

        <!--Contact-->
        <section class="contact-section">
            <div class="container-lg">
                <h2 class="text-center -u-color-brown h2 mb-5">CONTACT US</h2>
                <div class="row mb-5">
                    <div class="col-lg-4 col-md-6 text-center d-flex flex-column align-items-center">
                        <h3 class="mb-3">ADDRESS</h3>
                        <address>
                            322, Opposite Jaidurga School, <br>
                            Mount Road, Jaipur- 302002
                        </address>
                    </div>
                    <div class="col-lg-4 col-md-6 text-center d-flex flex-column align-items-center">
                        <h3 class="mb-3">CONTACT</h3>
                        <a href="tel:+918058888990">+918058888990</a>
                        <a href="tel:+919928159664">+919928159664</a>
                        <a href="mailto:ratnavali_arts@yahoo.co.in">ratnavali_arts@yahoo.co.in</a>
                        <a href="mailto:officeratnavaliarts@gmail.com">officeratnavaliarts@gmail.com</a>

                    </div>

                    <div class="col-lg-4 col-md-6 text-center d-flex flex-column align-items-center">
                        <h3 class="mb-3">SOCIAL LINK</h3>
                        <a href="#">SOCIAL LINK 1</a>
                        <a href="#">SOCIAL LINK 2</a>
                        <a href="#">SOCIAL LINK 3</a>

                    </div>
                </div>
                <img src="./asssets/images/about-banner.png" width="100%" height="auto" alt="">
            </div>
        </section><!--End Contact-->

    </main>

    <?php include('footer.php'); ?>

    
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="./js/custom.js"></script>
</html>