<?php
    // include 'budgetClass.php';
    // include 'commentsClass.php';
    // include 'documentClass.php';
    // include 'eventClass.php';
    // include 'imageClass.php';
    // include 'queryClass.php';
    // include 'taskClass.php';
    // include 'userClass.php';
    class Query{
        public static function insertBudget($eventId, $budget, $connect){
            $insertQuery = $connect->prepare("INSERT INTO user (item_name, units, estimated_unit_price, actual_unit_price, date_expended, date_issued, event_id)
            VALUES (?, ?, ?, ?, ?, ?,?)");
            $itemname=$budget->getItemName();
            $units=$budget->getUnits();
            $estimatedunitprice=$budget->getEstimatedUnitPrice();
            $actualunitprice= $budget->getActualUnitPrice();
            $dateexpended=$budget->getDateExpended();
            $dateissued=$budget->getDateIssued();



            $insertQuery->bind_param("siddss",$itemname , $units, $estimatedunitprice, $actualunitprice ,$dateexpended ,$dateissued , $eventId);
            $insertQuery->execute();
        }

        public static function insertComment($comment, $connect){
            $insertQuery = $connect->prepare("INSERT INTO comments (content, task_id, user_id)
            VALUES (?, ?, ?)");
            $content=$comment->getContent();
            $taskid= $comment->getTaskId();
            $userid= $comment->getUserID();

        
            $insertQuery->bind_param("sii",$content,$taskid,$userid );
            $insertQuery->execute();
        }

        public static function insertDocument($document, $eventId, $connect){
            $insertQuery = $connect->prepare("INSERT INTO document (file_name, file_type, file, event_id)
            VALUES (?, ?, ?)");
            $name=$document->getName();
            $filetype=$document->getFileType();
            $document=$document->getDocument();
     

            $insertQuery->bind_param("sss", $name, $filetype,  $document, $eventId);
            $insertQuery->execute();
        }

        public static function insertEvent($event, $connect){
            $insertQuery = $connect->prepare("INSERT INTO event (event_id, name, summary, creatorId)
            VALUES (?, ?, ?, ?)");
            $id=$event->getId();
            $name=$event->getName();
            $summary=$event->getSummary();
            $creatorid=$event->getCreatorId();

             
            $insertQuery->bind_param("issi",$id, $name, $summary, $creatorid);
            $insertQuery->execute();
        }

        public static function insertEventBoards($board, $eventId, $connect){
            $insertQuery = $connect->prepare("INSERT INTO event_board_column (board_column_name, event_id)
            VALUES (?, ?)");
            $insertQuery->bind_param("ss",$board, $eventId);
            $insertQuery->execute();
        }

        public static function insertEventDepartments($department, $eventId, $connect){
            $insertQuery = $connect->prepare("INSERT INTO event_departments (department_name, event_id)
            VALUES (?, ?)");
            $insertQuery->bind_param("si",$department, $eventId);
            $insertQuery->execute();
        }

        public static function insertMessages($message, $userId, $eventId, $connect){
            $insertQuery = $connect->prepare("INSERT INTO messages (content, user_id, event_id)
            VALUES (?, ?, ?)");
            $insertQuery->bind_param("sii",$message, $userId, $eventId);
            $insertQuery->execute();
        }

        public static function insertNotification($summary, $openLink, $userId, $connect){
            $insertQuery = $connect->prepare("INSERT INTO notification (summary, openLink, user_id)
            VALUES (?, ?, ?)");
            $insertQuery->bind_param("ssi",$summary, $openLink, $userId);
            $insertQuery->execute();
        }

        public static function insertTask($task, $connect){
            $insertQuery = $connect->prepare("INSERT INTO task (task_id, summary, starting_time, deadline, status, event_id, user_id)
            VALUES (?, ?, ?, ?, ?, ?, ?)");

            $id= $task->getId();
            $summary= $task->getSummary();
            $startingTime= $task->getStartingTime();
            $deadeline= $task->getDeadline();
            $status=$task->getStatus();
            $eventid=$task->getEventId();
            $assigneeid=$task->getAssigneeId();

            $insertQuery->bind_param("issssii", $id , $summary , $startingTime , $deadeline, $status, $eventid,  $assigneeid);
            $insertQuery->execute();
        }
        
        public static function insertUser($user, $connect){
            $insertQuery = $connect->prepare("INSERT INTO user (user_id, first_name, last_name, password, email)
            VALUES (?, ?, ?, ?, ?);");
            $id = $user->getId();
            $firstName = $user->getFirstName();
            $lastName = $user->getLastName();
            $password = $user->getPassword();
            $email = $user->getEmail();
            $insertQuery->bind_param("issss", $id, $firstName, $lastName, $password, $email);
            $insertQuery->execute();
        }

        public static function insertSkill($skill, $userId, $connect){
            $insertQuery = $connect->prepare("INSERT INTO user_skills (skills, user_id)
            VALUES (?, ?)");
            $insertQuery->bind_param("si",$skill, $userId);
            $insertQuery->execute();
        }

        public static function insertWorksIn($department, $userId, $eventId, $connect){
            $insertQuery = $connect->prepare("INSERT INTO works_in (department, user_id, event_id)
            VALUES (?, ?, ?)");
            $insertQuery->bind_param("sii",$deparment, $userId, $eventId, $connect);
            $insertQuery->execute();
        }

    }

?>
