<?php
    require('config.php');
    $user;

    if(isset($_COOKIE['user'])) {
        $user = json_decode($_COOKIE['user'], true);
        $email = $user['email'];
        $password = $user['password'];

        $query = "SELECT * FROM `users` WHERE `email`='$email' AND `password`='$password'";
        $query_exec = mysqli_query($conn, $query);
        $temp_user = mysqli_fetch_assoc($query_exec);

        if($user['id'] != $temp_user['id']) {
            unset($_COOKIE['user']); 
            setcookie('user', null, -1, '/'); 

            header('Location: login.php');
        }

    }
?>