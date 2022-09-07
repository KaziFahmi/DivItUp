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
            $insertQuery->bind_param($budget->getItemName(), $budget->getUnits(), $budget->getEstimatedUnitPrice(), $budget->getActualUnitPrice(), $budget->getDateExpended, $budget->getDateIssued(), $eventId);
            $insertQuery->execute();
        }

        public static function insertComment($comment, $connect){
            $insertQuery = $connect->prepare("INSERT INTO comments (content, task_id, user_id)
            VALUES (?, ?, ?)");
            $insertQuery->bind_param($comment->getContent(), $comment->getTaskId(), $comment->getUserID());
            $insertQuery->execute();
        }

        public static function insertDocument($document, $eventId, $connect){
            $insertQuery = $connect->prepare("INSERT INTO document (file_name, file_type, file, event_id)
            VALUES (?, ?, ?)");
            $insertQuery->bind_param($document->getName(), $document->getFileType(), $document->getDocument(), $eventId);
            $insertQuery->execute();
        }

        public static function insertEvent($event, $connect){
            $insertQuery = $connect->prepare("INSERT INTO event (event_id, name, summary, creatorId)
            VALUES (?, ?, ?, ?)");
            $insertQuery->bind_param($event->getId(), $event->getName(), $event->getSummary(), $event->getCreatorId());
            $insertQuery->execute();
        }

        public static function insertEventBoards($board, $eventId, $connect){
            $insertQuery = $connect->prepare("INSERT INTO event_board_column (board_column_name, event_id)
            VALUES (?, ?)");
            $insertQuery->bind_param($board, $eventId);
            $insertQuery->execute();
        }

        public static function insertEventDepartments($department, $eventId, $connect){
            $insertQuery = $connect->prepare("INSERT INTO event_departments (department_name, event_id)
            VALUES (?, ?)");
            $insertQuery->bind_param($department, $eventId);
            $insertQuery->execute();
        }

        public static function insertMessages($message, $userId, $eventId, $connect){
            $insertQuery = $connect->prepare("INSERT INTO messages (content, user_id, event_id)
            VALUES (?, ?, ?)");
            $insertQuery->bind_param($message, $userId, $eventId);
            $insertQuery->execute();
        }

        public static function insertNotification($summary, $openLink, $userId, $connect){
            $insertQuery = $connect->prepare("INSERT INTO notification (summary, openLink, user_id)
            VALUES (?, ?, ?)");
            $insertQuery->bind_param($summary, $openLink, $userId);
            $insertQuery->execute();
        }

        public static function insertTask($task, $connect){
            $insertQuery = $connect->prepare("INSERT INTO task (task_id, summary, starting_time, deadline, status, event_id, user_id)
            VALUES (?, ?, ?, ?, ?, ?, ?)");
            $insertQuery->bind_param($task->getId(), $task->getSummary(), $task->getStartingTime, $task->getDeadline(), $task->getStatus(), $task->getEventId(), $task->getAssigneeId());
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
            $insertQuery->bind_param($skill, $userId);
            $insertQuery->execute();
        }

        public static function insertWorksIn($department, $userId, $eventId, $connect){
            $insertQuery = $connect->prepare("INSERT INTO works_in (department, user_id, event_id)
            VALUES (?, ?, ?)");
            $insertQuery->bind_param($deparment, $userId, $eventId, $connect);
            $insertQuery->execute();
        }




    }
?>