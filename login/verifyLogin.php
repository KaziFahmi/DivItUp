<?php
    session_start();
    $_SESSION['id'] = '999';
    header('location:../dashboard.php');
?>