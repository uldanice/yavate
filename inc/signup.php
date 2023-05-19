<?php

    session_start();
    require_once 'connect.php';

    $full_name = $_POST['full_name'];
    $name = $_POST['name'];
    $login = $_POST['login'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $pass = $_POST['password'];
    $passcon = $_POST['passcon'];

    if ($pass === $passcon){
        
        $pass = md5($pass);

        mysqli_query($connect, "INSERT INTO `user` (`id`, `full_name`, `login`, `email`, `password`, `name`, `phone`, `address`) VALUES (NULL, '$full_name', '$login', '$email', '$pass', '$name', '$phone','$address')");

        $_SESSION['message'] = 'Регистрация прошла успешно';
        header( 'Location: ../php/index.php');

    } else {
        $_SESSION['message'] = 'Пароли не совпадают';
        header( 'Location: ../php/register.php');
    }
?>