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
    <meta name="google-site-verification" content="iRdGWjuU5FmEdr2Prk5sA7hxj0Q9lEK3kYkLhDOaP-0" />
    <link rel="canonical" href="https://www.ratnavaliarts.com/" />
    <title>Forgot Password - Ratnavali Arts</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/index.css">
    <!-- Facebook Meta Tags -->
<meta property="og:url" content="https://www.ratnavaliarts.com/">
<meta property="og:type" content="website">
<meta property="og:title" content="Ratnavali Arts – Gold, Silver & Gemstone Jewellery Manufacturer in Jaipur">
<meta property="og:description" content="Ratnavali Arts – #1 Gold, Silver & Gemstone Jewellery manufacturer in Jaipur. We are premium Jewellery makers in Jaipur having widest range of attractive jewel designs and latest collections at best price. Visit our website for finest Wholesale Fashion Jewelry Manufacturer in Jaipur.">
<meta property="og:image" content="">

<!-- Twitter Meta Tags -->
<meta name="twitter:card" content="summary_large_image">
<meta property="twitter:domain" content="ratnavaliarts.com">
<meta property="twitter:url" content="https://www.ratnavaliarts.com/">
<meta name="twitter:title" content="Ratnavali Arts – Gold, Silver & Gemstone Jewellery Manufacturer in Jaipur">
<meta name="twitter:description" content="Ratnavali Arts – #1 Gold, Silver & Gemstone Jewellery manufacturer in Jaipur. We are premium Jewellery makers in Jaipur having widest range of attractive jewel designs and latest collections at best price. Visit our website for finest Wholesale Fashion Jewelry Manufacturer in Jaipur.">
<meta name="twitter:image" content="">

    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-J4SYZSX3TE"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-J4SYZSX3TE');
</script>
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
                            <h2 class="text-center w-100">FORGOT PASSWORD</h2>
                            <div class="col-md-10 col-lg-10 mb-3">
                                <p class="p3 mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim, ut.</p>
                            </div>
                            <div class="col-md-10 col-lg-10 mb-3">
                                <label for="email">Email*</label>
                                <input type="email" name="email" id="email" placeholder="EMAIL*" required>
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