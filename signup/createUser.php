<?php
    include '../classes/userClass.php';
    include '../dbconnect.php';
    include '../images/defaultPictures.php';
    
    $query = $connect->prepare('SELECT MAX(user_id) FROM user');
    $query->execute();
    
    $id = $query->get_result()->fetch_assoc()['MAX(user_id)'] + 1;
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['pswd'];
    $encryptedPassword = password_hash($password, PASSWORD_DEFAULT);

    $user = new User($id, $name, $encryptedPassword, $email);
    $user->setProfilePicture($defaultProfilePicture);
    User::insertUser($user, $connect);

    session_start();
    $_SESSION['user'] = $user;
    header('location:../dashboard.php');

?>