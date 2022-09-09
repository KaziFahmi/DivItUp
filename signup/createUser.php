<?php
    include '../classes/userClass.php';
    include '../classes/queryClass.php';
    include '../dbconnect.php';

    $res = mysqli_query($connect, 'SELECT COUNT(*) FROM user');
    $id = $res->fetch_assoc()['COUNT(*)'] + 1;

    $firstName = $_POST['fname'];
    $lastName = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['pswd'];
    $encryptedPassword = password_hash($password, PASSWORD_DEFAULT);

    $user = new User($id, $firstName, $lastName, $encryptedPassword, $email);
    User::insertUser($user, $connect);

    session_start();
    $_SESSION['id'] = $id;
    header('location:../dashboard.php');

?>