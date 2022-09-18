<?php include 'commentsClass.php' ?>
<?php
    class Task{
        private $id;
        private $summary;
        private $description;
        private $startingTime;
        private $deadline;
        private $status;
        private $eventId;
        private $assigneeEmail;
        private $report;
        private $comments = array();

        function __construct($id, $summary, $startingTime, $deadline, $status, $eventId, $assigneeEmail){
            $this->id = $id;
            $this->summary = $summary;
            $this->startingTime = $startingTime;
            $this->deadline = $deadline;
            $this->status = $status;
            $this->eventId = $eventId;
            $this->assigneeEmail = $assigneeEmail;
        }

        function getId(){
            return $this->id;
        }
        // function setId($id){
        //     $this->id = $id;
        // }
        function getSummary(){
            return $this->summary;
        }
        function setSummary($summary){
            $this->summary = $summary;
        }
        function getDescription(){
            return $this->description;
        }
        function setDescription($description){
            $this->description = $description;
        }
        function getStartingTime(){
            return $this->startingTime;
        }
        function setStartingTime($startingTime){
            $this->startingTime = $startingTime;
        }
        function getDeadline(){
            return $this->deadline;
        }
        function setDeadline($deadline){
            $this->deadline = $deadline;
        }
        function getStatus(){
            return $this->status;
        }
        function setStatus($status){
            $this->status = $status;
        }
        function getEventId(){
            return $this->eventId;
        }
        // function setEventId($eventId){
        //     $this->eventId = $eventId;
        // }

        function getAssigneeEmail(){
            return $this->assigneeEmail;
        }
        function setEventId($assigneeEmail){
            $this->assigneeEmail = $assigneeEmail;
        }
        function getReport(){
            return $this->report;
        }
        function setReport($report){
            $this->report = $report;
        }
        function getComment(){
            return $this->comment;
        }
        function addComment($comment){
            array_push($this->comments, $comment);
        }
   
        public static function readTask($taskId, $connect){
            $readQuery = $connect->prepare("SELECT * FROM task WHERE task_id = ?");
            $readQuery->bind_param("i", $taskId);
            $readQuery->execute();
            $result = $readQuery->get_result()->fetch_assoc();
            $task = new Task($result['task_id'], $result['summary'], $result['starting_time'], $result['deadline'], $result['status'], $result['event_id'], $result['email']);
            $task->setDescription($result['description']);
            // $event->setEventLogo($result['event_logo']);
            $task->setStatus($result['status']);
        
            return $task;
        }


    }
?>
