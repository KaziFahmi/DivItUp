<?php
    include '../classes/userClass.php';
    include '../dbconnect.php';
    include '../images/defaultPictures.php';
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['pswd'];
    $encryptedPassword = password_hash($password, PASSWORD_DEFAULT);

    $user = new User($name, $encryptedPassword, $email);
    $user->setProfilePicture($defaultProfilePicture);
    User::insertUser($user, $connect);

    session_start();
    $_SESSION['user'] = $user;
    header('location:../dashboard.php');

?>