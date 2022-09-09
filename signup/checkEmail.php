<?php
    include '../dbconnect.php';
    $email = $_POST['email'];
    $query = "SELECT COUNT(*) FROM user WHERE email = '" . $email . "'";
    $result = $connect->query($query);
    if($result->fetch_assoc()['COUNT(*)'] == 0){
        echo 'unique';
    }
    else{
        echo 'not unique';
    }

?>