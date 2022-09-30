

<?php

    $prod = false;

    $host = 'localhost';
    $database = 'ratnawali_db';
    $db_user = 'root';
    $db_password = '';

    $conn;

    date_default_timezone_set("Asia/Kolkata");

    if($prod == false) {
        $conn = mysqli_connect($host, $db_user, $db_password, $database);
    }

    if($prod == true) {
        $host = 'localhost';
        $database = 'ratnawali_db';
        $db_user = 'zapmedics';
        $db_password = 'Zapmedics@*8920';

        $conn = mysqli_connect($host, $db_user, $db_password, $database);
    }


    ?>