<?php
    if(isset($_POST) && isset($_POST['first_name'])) {
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        
        $query = "INSERT INTO `contact_form`( `first_name`, `last_name`, `phone`, `email`, `message`) VALUES ('$first_name','$last_name','$phone','$email','$message')";


    }

?>