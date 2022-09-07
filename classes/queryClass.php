<?php
include 'dbconnect.php';
    class Query{
        public static function insertBudget($eventId, $budget){
            $insertQuery = "INSERT INTO user (item_name, units, estimated_unit_price, actual_unit_price, date_expended, date_issued, event_id)
                            VALUES ($budget->getItemName(), $budget->getUnits(), $budget->getEstimatedUnitPrice(), $budget->getActualUnitPrice(), $budget->getDateExpended, $budget->getDateIssued(), $eventId);";
            mysqli_query($connect, $insertQuery);
        }

        public static function insertComment($comment){
            $insertQuery = "INSERT INTO user (content, task_id, user_id)
                            VALUES ($comment->getContent(), $comment->getTaskId(), $comment->getUserID());";
            mysqli_query($connect, $insertQuery);
        }

        public static function insertDocument($document, $eventId){
            $insertQuery = "INSERT INTO user (file_name, file_type, file, event_id)
                            VALUES ($document->getName(), $document->getFileType(), $document->getDocument(), $eventId);";
            mysqli_query($connect, $insertQuery);
        }

        public static function insertEvent($event){
            $insertQuery = "INSERT INTO user (event_id, name, summary, creatorId)
                            VALUES ($event->getId(), $event->getName(), $event->getSummary(), $event->getCreatorId());";
            mysqli_query($connect, $insertQuery);
        }

        public static function insertEventBoards($board, $eventId){
            $insertQuery = "INSERT INTO user (board_column_name, event_id)
                            VALUES ($board, $eventId);";
            mysqli_query($connect, $insertQuery);
        }

        public static function insertEventDepartments($department, $eventId){
            $insertQuery = "INSERT INTO user (department_name, event_id)
                            VALUES ($department, $eventId);";
            mysqli_query($connect, $insertQuery);
        }

        public static function insertMessages($message, $userId, $eventId){
            $insertQuery = "INSERT INTO user (content, user_id, event_id)
                            VALUES ($message, $userId, $eventId);";
            mysqli_query($connect, $insertQuery);
        }

        public static function insertNotification($summary, $openLink, $userId){
            $insertQuery = "INSERT INTO user (summary, openLink, user_id)
                            VALUES ($summary, $openLink, $userId);";
            mysqli_query($connect, $insertQuery);
        }

        public static function insertTask($task){
            $id, $summary, $startingTime, $deadline, $status, $eventId, $assigneeId
            $insertQuery = "INSERT INTO user (task_id, summary, starting_time, deadline, status, event_id, user_id)
                            VALUES ($task->getId(), $task->getSummary(), $task->getStartingTime, $task->getDeadline(), $task->getStatus(), $task->getEventId(), $task->getAssigneeId());";
            mysqli_query($connect, $insertQuery);
        }
        
        public static function insertUser($user){
            $insertQuery = "INSERT INTO user (user_id, first_name, last_name, password, email)
                            VALUES ($user->getId(), $user->getFirstName(), $user->getLastName(), $user->getPassword(), $user->getEmail());";
            mysqli_query($connect, $insertQuery);
        }

        public static function insertSkill($skill, $userId){
            $insertQuery = "INSERT INTO user (skills, user_id)
                            VALUES ($$skill, $userId);";
            mysqli_query($connect, $insertQuery);
        }

        public static function insertWorksIn($department, $userId, $eventId){
            $insertQuery = "INSERT INTO user (department, user_id, event_id)
                            VALUES ($$deparment, $userId, $eventId);";
            mysqli_query($connect, $insertQuery);
        }




    }
?>