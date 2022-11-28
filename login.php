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
    <meta name="description"
        content="Login or Sign Up , Enter Your email and password to get access and explore the widest collection of jewellery with us." />
    <title>Ratnavaliarts.com | Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/index.css">
</head>
<body class="page home">

    <?php include('header.php'); ?>

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

                            <div class="col-md-10 col-lg-10 mb-3 d-none align-items-end">
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

    <?php include('footer.php'); ?>
    
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="./js/custom.js"></script>
</html>