<<<<<<< HEAD
<?php include 'commentClass.php' ?>
<?php
    class Task{
        private $id;
        private $summary;
        private $description;
        private $startingTime;
        private $deadline;
        private $status;
        private $eventId;
        private $assigneeId;
        private $report;
        private $comments = array();

        function __construct($id, $summary, $startingTime, $deadline, $status, $eventId, $assigneeId){
            $this->id = $id;
            $this->summary = $summary;
            $this->description = $description;
            $this->startingTime = $startingTime;
            $this->deadline = $deadline;
            $this->status = $status;
            $this->eventId = $eventId;
            $this->assigneeId = $assigneeId;
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

        function getAssigneeId(){
            return $this->assigneeId;
        }
        function setEventId($assigneeId){
            $this->assigneeId = $assigneeId;
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
    }
=======
<?php include 'commentClass.php' ?>
<?php
    class Task{
        private $id;
        private $summary;
        private $description;
        private $startingTime;
        private $deadline;
        private $status;
        private $eventId;
        private $assigneeId;
        private $report;
        private $comments = array();

        function __construct($id, $summary, $startingTime, $deadline, $status, $eventId, $assigneeId){
            $this->id = $id;
            $this->summary = $summary;
            $this->description = $description;
            $this->startingTime = $startingTime;
            $this->deadline = $deadline;
            $this->status = $status;
            $this->eventId = $eventId;
            $this->assigneeId = $assigneeId;
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

        function getAssigneeId(){
            return $this->assigneeId;
        }
        function setEventId($assigneeId){
            $this->assigneeId = $assigneeId;
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
    }
>>>>>>> 485a092b475cd73afeaff0f24abe7c2c63e32657
?>