<?php

    session_start();
    require_once 'connect.php';
    $login = $_POST['login'];
    $pass = md5($_POST['password']);

    $check_user = mysqli_query($connect, "SELECT * FROM user WHERE login='$login' AND password='$pass'");
    if (mysqli_num_rows($check_user) >0 ){
        
        $user = mysqli_fetch_assoc($check_user);

        $_SESSION['user']= [
            "id" => $user['id'],
            "full_name" => $user['full_name'],
            "email" => $user['email']
        ];

        header('Location: ../php/profile.php ');
        

    } else{
        
        $_SESSION['message'] = 'Не верный логин или пароль';
        
        header( 'Location: ../php/index.php');
    }
?>