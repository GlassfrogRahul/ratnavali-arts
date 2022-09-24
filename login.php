<?php
    require_once('config.php');
    require_once('authentication.php');

    if(isset($user)) {
        header('Location: user-dashboard.php');
    }


    if(isset($_POST) && isset($_POST['email']) && isset($_POST['password'])) {
        $email = $_POST['email'];
        $password = md5($_POST['password']);

        $query = "SELECT * FROM `users` WHERE `email`='$email' AND `password`='$password'";
        $query_exec = mysqli_query($conn, $query);
        $user = mysqli_fetch_assoc($query_exec);

        if($user) {
            setcookie('user', json_encode($user));
            header("Location: user-dashboard.php");
        }

    }

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
<body class="page home">

    <nav class="navbar navbar-light">
        <div class="container-lg d-flex align-items-center">
            <a class="navbar-brand" href="index.php">
                <img src="./asssets/images/logo-wide.png" width="200" height="auto" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <img src="./asssets/images/menu-logo.png" width="35" height="35" alt="Menu Logo">
                <span>MENU</span>
            </button>

            <?php
                if(isset($user)) {
                    ?>
                        <div class="nav-item dropdown position-relative mr-auto ml-lg-auto mr-lg-5 mr-lg-0">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="./asssets/svg/User.svg" width="30" height="30" alt="">
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

            
        
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="container">
                    <ul class="navbar-nav ">
                        <li class="nav-item d-lg-none d-flex align-items-center justify-content-center" data-toggle="collapse" onclick="toggleNavbar()">
                            <img src="./asssets/images/menu-logo.png" width="35" height="35" alt="Menu Logo">
                            <span>MENU</span>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">About <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="craftmanship.php">Craftmanship</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="women-empowerment.php">Women Empowerment</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact</a>
                        </li>
                        <li class="nav-item -u-bg-brown mt-5 mt-lg-0">
                            <a class="btn mb-0 px-4 py-2" style="font-size: 1.4rem;color: #fff;border: 0;" href="video-call.php">Book Appointment</a>
                        </li>
                        
                    </ul>
                </div>
            
            </div>
        </div>
    </nav>

    <main class="main" id="main">
        <!-- Login Section -->
        <section class="login-section form-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-6 col-xl-5">
                        <form action="#" method="post" class="login-form row justify-content-center">
                            <img src="./asssets/images/monogram.png" class="mb-3" width="30" height="30" alt="Monogram Logo">
                            <h2 class="text-center w-100">LOGIN</h2>
        
                            <div class="col-md-10 col-lg-10 mb-5">
                                <label for="email">Email*</label>
                                <input type="email" name="email" id="email" placeholder="EMAIL*" required>
                            </div>
        
                            <div class="col-md-10 col-lg-10">
                                <label for="password">Password*</label>
                                <input type="password" name="password" id="password" placeholder="PASSWORD*" required>
                            </div>

                            <div class="col-md-10 col-lg-10 d-flex align-items-end mb-5 mt-3">
                                <p class="text-danger d-none mb-0">Wrong Password?</p>
                            </div>

                            <div class="col-md-10 col-lg-10 mb-3 d-flex align-items-end">
                                <a href="#" class="d-inline-block ml-auto">Forgot password?</a>
                            </div>


        
                            <div class="col-12 d-flex align-items-center justify-content-center mb-5">
                                <button type="submit">LOGIN</button>
                            </div>

                            <div class="col-md-10 col-lg-10 d-flex align-items-center justify-content-center">
                                <p class="mb-0">Not have account?</p><a href="signup.php" class="ml-2">Signup now!</a>
                            </div>
        
                        </form>
                    </div>
                </div>
            </div>
        </section><!-- End Login Section -->

    </main>

    <footer class="footer">
        <div class="container">
            <ul class="footer-nav-list">
                <li class="footer-nav-item"><a href="#" class="footer-nav-link">Shipping Policy</a></li>
                <li class="footer-nav-item"><a href="#" class="footer-nav-link">Cancellation</a></li>
                <li class="footer-nav-item"><a href="#" class="footer-nav-link">Privacy Policy</a></li>
                <li class="footer-nav-item"><a href="#" class="footer-nav-link">Terms & Condition</a></li>
            </ul>
            <p class="text-center u-color-brown">Copyrights &copy;</p>
        </div>
    </footer>
    
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="./js/custom.js"></script>
</html>