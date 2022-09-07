<?php
    class Comment{
        private $userId;
        private $taskId;
        private $content;
        
        function __construct($taskId, $userId, $content){
            $this->userId = $userId;
            $this->taskId = $taskId;
            $this->content = $content;
        }
        function getUserId(){
            return $this->userId;
        }
        function getTaskId(){
            return $this->taskId;
        }
        function getContent(){
            return $this->content;
        }
        function setContent($content){
            $this->content = $content;
        }
    }
?>