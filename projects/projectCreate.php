<?php
    include '../dbconnect.php';
    include '../classes/userClass.php';
    include '../classes/eventClass.php';
    $query = $connect->prepare('SELECT MAX(event_id) FROM event');
    $query->execute();
    $id = $query->get_result()->fetch_assoc()['MAX(event_id)'] + 1;
    $name = $_POST['name'];
    $description = $_POST['description'];
    $departments = json_decode($_POST['dep']);
    $deadline = $_POST['deadline'];
    session_start();
    $user = $_SESSION['user'];
    $event = new Event($id, $name, $description, $user->getEmail());
    if($deadline !== '' && $deadline != null){
        $event->setDeadline($deadline);
    }
    foreach($departments as $key => $department){
        $event->addDepartment($department);
    }
    $event->setStatus('not complete');
    // print_r($event->getDepartments());
    Event::insertEvent($event, $connect); 


?>