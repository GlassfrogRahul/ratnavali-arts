<?php
    require_once('config.php');
    require_once('authentication.php');
    require_once('device.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords"
        content="best jewellery, Gemstone Jewellery, earrings, men bracelet, gemestone, jaipur jewellery wholesale online, jewellery wholesaler in jaipur, jaipur jewellery wholesale, jaipuri jewellery wholesale, designer jewelry online, wholesale jewellery in jaipur, ad jewellery manufacturers in jaipur, jewellery manufacturers in jaipur, jewellery manufacturers, rajasthan jewellery wholesale, rajasthani jewellery manufacturers, jewellery manufacturers jaipur rajasthan, designer jewellery wholesale, imitation jewellery wholesalers in jaipur, jaipur gold jewellery designs, jaipuri jewellery online shopping, jaipur jewellery online, jaipuri jewellery online, imitation jewellery manufacturers in jaipur, jewellery company in jaipur, best jewellery shop in jaipur, jaipur art jewellery, jaipur gold jewellery, jewellery showrooms in jaipur, jaipur jewellery online shopping, jaipur gold jewellery online shopping, jewellery shop in jaipur, famous jewellery shops in jaipur, jaipur top jewellers, rajasthan jewellery shop, jewellery shops in jaipur india, best jewellers in jaipur, jewellery designers in jaipur, jewellery shopping in jaipur, famous jewellers in jaipur, jaipur stone jewellery online, top jewellers in jaipur, jewellery store in jaipur." />
    <meta name="description"
        content="Ratnavali Arts – Buy Gold &amp; Silver Jewellery, Gemestone figures online from 7000+ attractive jewel designs and latest collections at best price.Visit our website to know more about today’s discounts, nearest retail store etc." />


    <title>Ratnavali Arts – Online Gold &amp; Silver Jewellery Shopping Store</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="./css/index.css">

</head>

<body class="page home">

    <nav class="navbar navbar-expand-lg navbar-light home-navbar">
        <div class="container-lg d-lg-flex w-100">
            <a class="navbar-brand" href="index.php">
                <img src="./asssets/svg/logo-white.svg" width="200" height="auto" alt="">
            </a>
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="d-block d-lg-none">
                <?php
                if(isset($user)) {
                    ?>
                <div class="nav-item dropdown position-relative mr-auto ml-lg-auto mr-lg-5 mr-lg-0">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="./asssets/svg/user-circle.svg" width="30" height="30" alt=""
                            style="transform: scale(1);background-color: #fff;border-radius: 10rem;">
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="profile.php">Profile</a>
                        <a class="dropdown-item" href="user-dashboard.php">Appointments</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="logout.php">Logout</a>
                    </div>
                </div>
                <?php
                }else{
                    ?>
                <a href="./login.php" class="btn login-button ml-auto -u-bg-brown d-flex align-items-center ">
                    <span>Login</span>
                    <svg width="25" height="25">
                        <use href="./asssets/svg/sprite.svg#icon-log-in"></use>
                    </svg>
                </a>
                <?php
                }
            ?>
            </div>


            <div class="collapse navbar-collapse ml-auto pl-4 pl-lg-0" id="navbarSupportedContent">
                <ul class="navbar-nav align-items-center">
                    <li class="nav-item align-self-stretch d-lg-none d-flex align-items-center justify-content-center"
                        data-toggle="collapse" onclick="toggleNavbar()">
                        <img src="./asssets/images/menu-logo.png" width="35" height="35" alt="Menu Logo">
                        <span>MENU</span>
                    </li>

                    <li class="nav-item align-self-stretch">
                        <a class="nav-link" href="about.php">About <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item align-self-stretch">
                        <a class="nav-link" href="craftmanship.php">Craftsmanship</a>
                    </li>
                    <li class="nav-item align-self-stretch">
                        <a class="nav-link" href="women-empowerment.php">Women Empowerment</a>
                    </li>
                    <li class="nav-item align-self-stretch">
                        <a class="nav-link" target="_blank" href="https://blogs.ratnavaliarts.com">Blogs</a>
                    </li>
                    <li class="nav-item align-self-stretch">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>

                    <li class="nav-item align-self-stretch mt-5 mt-lg-0 d-none d-lg-flex">
                        <a class="btn -u-bg-brown" href="video-call.php">Book Appointment</a>
                    </li>

                    <li class="nav-item align-self-stretch mt-0 mt-lg-0">
                        <div id="google_translate_element"></div>
                    </li>

                    <li class="nav-item align-self-stretch mt-5 mt-lg-0 d-flex d-lg-none">
                        <a class="btn -u-bg-brown" href="video-call.php">Book Appointment</a>
                    </li>
                    

                    <?php
                        if(isset($user)) {
                            ?>
                    <li class="nav-item dropdown position-relative">
                        <a class="nav-link dropdown-toggle d-none d-lg-block" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="./asssets/svg/user-circle.svg" width="30" height="30" alt="">
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="profile.php">Profile</a>
                            <a class="dropdown-item" href="user-dashboard.php">Appointments</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="logout.php">Logout</a>
                        </div>
                    </li>
                    <?php
                        }else{
                            ?>
                    <a href="./login.php" class="btn login-button -u-bg-brown d-none d-lg-flex align-items-center ">
                        <span>Login</span>
                        <svg width="25" height="25">
                            <use href="./asssets/svg/sprite.svg#icon-log-in"></use>
                        </svg>
                    </a>
                    <?php
                        }
                    ?>

                </ul>

            </div>
        </div>
    </nav>

    <main class="main" id="main">

        <!--Home Video Section-->
        <section class="home-video_section">
            <?php
                if($isMob) {
                    ?>
                        <video preload="none" src="./asssets/video/hv_2.mp4" autoplay="true" playsinline="true" muted loop
                height="auto" width="100%"></video>
                    <?php
                }
                else{
                    ?>
                        <video preload="none" src="./asssets/video/hv_1.mp4" autoplay="true" playsinline="true" muted loop
                height="auto" width="100%"></video>
                    <?php
                }
            ?>
            
            

        </section>
        <!--End Home Video Section-->

        <!--Service Section-->
        <section class="service-section pt-5 m-0">
            <div class="container-lg">
                <h1 class="h2 text-center -u-color-brown mb-5 col-md-8 mx-auto">SERVICES</h1>

                <div class="row pt-5">
                    <div class="col-lg-4 col-md-6 ">
                        <div class="service-card mr-xl-auto ml-auto mr-auto">
                            <img src="./asssets/images/card-designing.png" loading="lazy" width="100%" height="auto"
                                alt="">
                            <h3>CAD DESIGNING</h3>
                        </div>

                    </div>
                    <div class="col-lg-4 col-md-6 ">
                        <div class="service-card ml-auto mr-auto">
                            <img src="./asssets/images/redesigning.png" loading="lazy" width="100%" height="auto"
                                alt="">
                            <h3>REDESIGNING</h3>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-card ml-lg-auto ml-auto mr-auto">
                            <img src="./asssets/images/customized-jewelary-making.png" loading="lazy" width="100%"
                                height="auto" alt="">
                            <h3>CUSTOMISED JEWELRY MAKING</h3>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-card mr-lg-auto ml-auto mr-auto">
                            <img src="./asssets/images/jewelary-polishing.png" loading="lazy" width="100%" height="auto"
                                alt="">
                            <h3>JEWELRY POLISHING</h3>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 ">
                        <div class="service-card ml-auto mr-auto">
                            <img src="./asssets/images/resetting.png" loading="lazy" width="100%" height="auto" alt="">
                            <h3>RESETTING</h3>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 ">
                        <div class="service-card ml-lg-auto ml-auto mr-auto">
                            <img src="./asssets/images/resizing.png" loading="lazy" width="100%" height="auto" alt="">
                            <h3>RESIZING</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Service Section-->

    </main>

    <?php include('footer.php'); ?>

</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>
<script src="./js/custom.js"></script>

</html>