<?php
    require_once('config.php');
    require_once('authentication.php');

    if(!isset($user)) {
        header("Location: login.php");
    }

    $countries = array();

    $countries_query = "SELECT `country_id`, `country_name`, `country_code`, `timezone` FROM `countries`";
    $countries_query_exec = mysqli_query($conn, $countries_query);

    while($row = mysqli_fetch_array($countries_query_exec)) {
        $countries[$row['country_id']] = $row;
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Ratnavali Arts</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/index.css">
</head>
<body class="page home">

    <?php include('header.php'); ?>

    <main class="main" id="main">
        
        <section class="appointments-section">
            <div class="container">
                <h1 class="h2">Your Appointments</h1>
                <div class="row">

                    <?php
                        $query = "SELECT `slot_id`, `user_id`, `first_name`, `last_name`, `phone`, `email`, `country_id`, `slot_type_id`, `slot_status`, `date`, `time` FROM `booked_slots` Where `user_id`='".$user['id']."' ORDER BY slot_id DESC";
                        $query_exec = mysqli_query($conn, $query);

                        while($row = mysqli_fetch_assoc($query_exec)) {

                        

                    ?>

                        <div class="col-md-4 col-sm-6">
                            <div class="card">
                                <img src="./asssets/images/monogram.png" class="mb-3" width="30" height="30" alt="Monogram Logo">
                                <?php
                                    if($row['slot_status'] == 1) {
                                        ?>
                                            <img src="./asssets/svg/Scheduled.svg" class="mt-3 mb-2" alt="Done">
                                            <h2 class="mb-5">Scheduled</h2>
                                        <?php
                                    }
                                
                                    if($row['slot_status'] == 2) {
                                        ?>
                                            <img src="./asssets/svg/Done.svg" class="mt-3 mb-2" alt="Done">
                                            <h2 class="mb-5">Done</h2>
                                        <?php
                                    }
                                ?>
                                
                                <div class="d-flex justify-content-between w-100 mb-3">
                                    <div class="d-flex flex-column align-items-center">
                                        <h3>Date</h3>
                                        <p class="mt-0"><?php echo $row['date']; ?></p>
                                    </div>
                                    <div class="d-flex flex-column align-items-center">
                                        <h3>Time</h3>
                                        <p class="mt-0" data-timezone="<?php echo $countries[$row['country_id']]['timezone']; ?>"><?php echo $row['time']; ?></p>
                                    </div>
                                </div>
                                <a href="video-room.php?r=<?php echo $row['slot_id']; ?>" class="btn">Join Meeting</a>
                            </div>
                        </div>

                    <?php
                        }
                    ?>
                </div>
            </div>
        </section>

    </main>

    <?php include('footer.php'); ?>

    
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="./js/custom.js"></script>
</html>