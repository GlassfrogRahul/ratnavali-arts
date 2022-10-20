<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password - Ratnavali Arts</title>
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
                            <h2 class="text-center w-100">CHANGE PASSWORD</h2>
                            <div class="col-md-10 col-lg-10 mb-3">
                                <p class="p3 mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim, ut.</p>
                            </div>
                            <div class="col-md-10 col-lg-10 mb-3">
                                <label for="new-password">New Password*</label>
                                <input type="password" name="new-password" id="new-password" placeholder="PASSWORD*" required>
                            </div>
                            <div class="col-md-10 col-lg-10 mb-3">
                                <label for="conform-password">Conform Password*</label>
                                <input type="password" name="conform-password" id="conform-password" placeholder="CONFORM PASSWORD*" required>
                            </div>
                            <div class="col-md-10 col-lg-10 d-flex align-items-end mb-5 mt-3">
                                <p class="text-danger d-none mb-0">Wrong Password?</p>
                            </div>
        
                            <div class="col-12 d-flex align-items-center justify-content-center mb-5">
                                <button type="submit">SUBMIT</button>
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