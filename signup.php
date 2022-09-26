<?php
    require_once('config.php');
    require_once('authentication.php');

    if(isset($user)) {
        header("Location: user-dashboard.php");
    }

?>

<?php
    if(isset($_POST) && isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['number']) && isset($_POST['country'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = md5($_POST['password']);
        $number = $_POST['number'];
        $country = $_POST['country'];

        $account_exists_query = "SELECT COUNT(*) AS `count` FROM `users` WHERE `email` = '$email'";
        $account_exists_query_exec = json_decode(json_encode(mysqli_query($conn, $account_exists_query)), true);

        if(isset($account_exists_query_exec['count'])) {
            ?>
                <script>
                    alert('Account already exists!');
                </script>
            <?php
        }else{
            $query = "INSERT INTO `users`(`email`, `password`, `name`, `phone`,`country`) VALUES ('$email','$password','$name','$number','$country')";
            $query_exec = mysqli_query($conn, $query);

            if($query_exec) {
                ?>
                    <script>
                        alert('Account created successfully!')
                    </script>
                <?php
            }

            ?>

            <?php
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

    <?php include('header.php'); ?>

    <main class="main" id="main">
        <!-- Login Section -->
        <section class="login-section form-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-6 col-xl-5">
                        <form action="#" method="post" class="login-form row justify-content-center">
                            <img src="./asssets/images/monogram.png" class="mb-3" width="30" height="30" alt="Monogram Logo">
                            <h2 class="text-center w-100">SIGNUP</h2>

                            <div class="col-md-10 col-lg-10 mb-5">
                                <label for="name">Name*</label>
                                <input type="text" name="name" id="name" placeholder="NAME*" required>
                            </div>

                            <div class="col-md-10 col-lg-10 mb-5">
                                <label for="number">Phone*</label>
                                <input type="number" name="number" id="number" placeholder="PHONE*" required>
                            </div>
        
                            <div class="col-md-10 col-lg-10 mb-5">
                                <label for="email">Email*</label>
                                <input type="email" name="email" id="email" placeholder="EMAIL*" required>
                            </div>

                            <div class="col-md-10 col-lg-10 mb-5">
                                <label for="email">Email*</label>
                                <select name="country" id="country">
                                    <?php
                                        $country_query = "SELECT `country_id`, `country_name`, `country_code` FROM `countries`";
                                        $country_query_exec = mysqli_query($conn, $country_query);

                                        while($row = mysqli_fetch_array($country_query_exec)) {
                                            ?>
                                                <option value="<?php echo $row['country_id']; ?>"><?php echo $row['country_name']; ?></option>
                                            <?php
                                        }

                                    ?>
                                </select>
                            </div>
        
                            <div class="col-md-10 col-lg-10 mb-5">
                                <label for="password">Password*</label>
                                <input type="password" name="password" id="password" placeholder="PASSWORD*" required>
                            </div>


        
                            <div class="col-12 d-flex align-items-center justify-content-center mb-5">
                                <button type="submit">SIGNUP</button>
                            </div>

                            <div class="col-md-10 col-lg-10 d-flex align-items-center justify-content-center">
                                <p class="mb-0">Already have account?</p><a href="#" class="ml-2">Login now!</a>
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