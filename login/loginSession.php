<?php
    include '../dbconnect.php';
    $query = $connect->prepare('SELECT user_id FROM user WHERE email = ?');
    $query->bind_param("s", $_POST['email']);
    $query->execute();
    $id = $query->get_result()->fetch_assoc()['user_id'];
    session_start();
    $_SESSION['id'] = $id;
    header('location:../dashboard.php');
?>