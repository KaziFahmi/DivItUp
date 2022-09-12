<?php
    include '../dbconnect.php';
    include '../classes/userClass.php';
    $email = $_POST['email'];
    $user = User:: readUser($email, $connect);
    session_start();
    $_SESSION['user'] = $user;
    header('location:../dashboard.php');
?>