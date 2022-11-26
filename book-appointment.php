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
    <title>Book Appointment - Ratnavali Arts</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/index.css">
</head>

<body class="page">

    <?php include('header.php'); ?>


    <main class="main" id="main">


        <!--Heading Box-->
        <section class="heading-box">
            <h1 class="text-center h2 -u-color-brown">Book Your Appointment </h1>
        </section>
        <!--End Heading Box-->


        <section class="form-section mt-5">

            <div class="container-lg">
                <form action="" class="row" onsubmit="return bookAppointment()">
                    <div class="col-md-6 mb-5">
                        <p class="p3">First Name*</p>
                        <input class="-u-bg-light-brown" type="text" name="first-name" id="first-name" placeholder="FIRST NAME*" required="" value="<?php if($user != null){ echo explode(' ', $user['name'])[0]; }?>">
                    </div>
                    <div class="col-md-6 mb-5">
                        <p class="p3">Last Name*</p>
                        <input class="-u-bg-light-brown" type="text" name="last-name" id="last-name" placeholder="LAST NAME*" required="" value="<?php if($user != null){ if(isset(explode(' ', $user['name'])[1])) {echo explode(' ', $user['name'])[1];} }?>">
                    </div>
                    <div class="col-md-6 mb-5">
                        <p class="p3">Phone*</p>
                        <input class="-u-bg-light-brown" type="number" name="phone" id="phone" placeholder="CONTACT NUMBER*" required="" value="<?php if($user != null){ echo $user['phone'];}?>">
                    </div>
                    <div class="col-md-6 mb-5">
                        <p class="p3">Email*</p>
                        <input class="-u-bg-light-brown" type="email" name="email" id="email" placeholder="EMAIL*" required="" value="<?php if($user != null){ echo $user['email'];}?>">
                    </div>
                    <div class="col-12 my-5">
                        <h2 class="h3 pt-5 -u-color-brown">SELECT YOUR SLOT</h2>
                        <p>Select date and time slot for your appointment.</p>
                    </div>
                    <div class="col-md-4 mb-5">
                        <p class="p3">Date*</p>
                        <input class="-u-bg-light-brown" type="date" name="date" id="date" placeholder="Date*" required="" min="" onchange="changeSlots(this)">
                    </div>
                    <div class="col-md-4 mb-5">
                        <p class="p3">Time Slot*</p>
                        <select name="slot" id="slot" class="-u-bg-light-brown">
                            <!-- <option value='{"slot_time": "16:00", "slot_type_id": "1"}'>17:50</option> -->
                        </select>
                    </div>
                    <div class="col-md-4 mb-5">
                        <p class="p3">Country*</p>
                        <select name="country" id="country" class="-u-bg-light-brown" onchange="changeTimezone()">
                            <?php
                            $query = "SELECT `country_id`, `country_name`, `country_code`, `timezone` FROM `countries`";
                            $query_exec = mysqli_query($conn, $query);

                            while ($row = mysqli_fetch_assoc($query_exec)) {
                            ?>
                                <option value='{"country_id":"<?php echo $row['country_id']; ?>","country_name":"<?php echo $row['country_name']; ?>","country_code":"<?php echo $row['country_code']; ?>","timezone":"<?php echo $row['timezone']; ?>"}'><?php echo $row['country_name']; ?>
                                </option>
                            <?php
                            }

                            ?>
                        </select>
                    </div>

                    <div class="col-12 d-flex align-items-center justify-content-center py-5">
                        <button type="submit" class="-u-bg-brown">SUBMIT AN ENQUIRY</button>
                    </div>
                </form>
            </div>
        </section>


        <!--Heading Box-->
        <section class="heading-box -u-bg-light-brown">
            <h3 class="text-center">TAKE A LOOK AROUND</h3>
        </section>
        <!--End Heading Box-->

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
        </section>
        <!--End Two Column-->

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
        </section>
        <!--End Two Column-->

    </main>

    <?php include('footer.php'); ?>


</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="./js/custom.js"></script>
<?php
if (!isset($user)) {
?>
    <script>
        showModal('You must need to login first! Will redirect in 5 sec!', 'Error');
        setTimeout(() => {
            window.location.href = 'login.php';
        }, 5000)
    </script>
<?php
}
?>

</html>