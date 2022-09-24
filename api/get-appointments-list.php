<?php

    require_once('../config.php');

    if(isset($_POST) && isset($_POST['date'])) {

        $time_slots = array();
        $active_slots = array();

        $date = $_POST['date'];
        $dayofweek = date('w', strtotime($date));
        $weekday = '';

        switch($dayofweek) {
            case 1:
                $weekday = "monday_active";
                break;
            case 2:
                $weekday = "tuesday_active";
                break;
            case 3:
                $weekday = "wednesday_active";
                break;
            case 4:
                $weekday = "thursday_active";
                break;
            case 5:
                $weekday = "friday_active";
                break;
            case 6:
                $weekday = "saturday_active";
                break;
            case 0:
                $weekday = "sunday_active";
                break;
        }

        

        


        $query = "SELECT `slot_type_id`,`slot_time` FROM `slot_types` WHERE `$weekday`='1'";
        $query_exec = mysqli_query($conn, $query);

        while($row = mysqli_fetch_assoc($query_exec)) {
            $row['active'] = '1';
            $row['slot_date'] = $date;

            $time_slots[$row['slot_type_id']] = $row;
        }

        $booked_slots_query = "SELECT `slot_id`, `slot_type_id`, `slot_status`, `date`, `time` FROM `booked_slots` WHERE `date`=str_to_date('$date', '%d-%m-%Y')";
        $booked_slots_query_exec = mysqli_query($conn, $booked_slots_query);

        while($row = mysqli_fetch_assoc($booked_slots_query_exec)) {
            if(isset($time_slots[$row['slot_type_id']])) {
                $time_slots[$row['slot_type_id']]['active'] = '0';
            }
        }

        echo json_encode(array(
            'status' => 201,
            'message' => 'Data Successfully Fetched',
            'data' => array(
                'slots' => $time_slots
            )
        ));
        
    }

?>