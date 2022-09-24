<?php

    require_once('../config.php');
    require_once('../authentication.php');

    if(!isset($user)) {
        echo json_encode(array(
            'status' => 401,
            'message' => 'User not registered',
            'data' => array(
                'message' => 'User not registered'
            )
        ));
        return ;
    }

    if(isset($_POST) && isset($_POST['slot_type_id'])) {
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $country_id = $_POST['country_id'];
        $slot_type_id = $_POST['slot_type_id'];
        $date = $_POST['date'];
        $time = $_POST['time'];
        $status = "1";

        $user_id = $user['id'];


        $query = "INSERT INTO `booked_slots`(`user_id`, `first_name`, `last_name`, `phone`, `email`, `country_id`, `slot_type_id`, `slot_status`, `date`, `time`) VALUES".
                    " ('$user_id','$first_name','$last_name','$phone','$email','$country_id','$slot_type_id','$status',str_to_date('$date', '%d-%m-%Y'),'$time')";

        $query_exec = mysqli_query($conn, $query);

        echo json_encode(
            array(
                'status' => 201,
                'message' => 'Video call appointment scheduled!',
                'data' => array(
                    'message' => 'Video call appointment scheduled!'
                )
            )
        );


    }
?>