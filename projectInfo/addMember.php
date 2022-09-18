<?php
    include '../dbconnect.php';
    if(isset($_POST['eventId'])){
        $email = $_POST['memberEmail'];
        $eventId = $_POST['eventId'];
        $query = $connect->prepare("INSERT INTO works_in (email, event_id)
                                    VALUES (?, ?)");
        $query->bind_param("si", $email, $eventId);
        $query->execute();
        header('location:../projectInfoPage.php?eventId='.$eventId.'&memberAdded='.true);
    }
    else{
        echo "error";
    }
?>