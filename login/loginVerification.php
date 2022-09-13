<?php
    include '../dbconnect.php';
    $email = $_POST['email'];
    $password = $_POST['password'];
    $query = $connect->prepare("SELECT COUNT(*), password FROM user WHERE email = ?");
    $query->bind_param("s", $email);
    $query->execute();
    $result = $query->get_result();
    $result = $result->fetch_assoc();
    if($result['COUNT(*)'] == 0){
        echo 'nonExistent';
    }
    else{
        $verify = password_verify($password, $result['password']);
        if($verify){
            echo "verified";
        }
        else{
            echo "notVerified";
        }
    }

?>