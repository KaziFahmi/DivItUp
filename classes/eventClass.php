<?php
    class Event{
        private $id;
        private $name;
        private $description;
        private $deadline;
        private $creatorEmail;
        private $eventLogo;
        private $status;
        // private $documents;
        // private $tasks = array();
        // private $budgets = array();
        // private $employees = array();
        private $departments = array();
        private $boards = array();

        function __construct($id, $name, $description, $creatorEmail){
            $this->id = $id;
            $this->name - $name;
            $this->description = $description;
            $this->creatorEmail = $creatorEmail;
        }
        // id
        function getId(){
            return $this->id;
        }
        //name
        function getName(){
            return $this->name;
        }
        function setName($name){
            $this->name = $name;
        }
        //summary
        function getSummary(){
            return $this->summary;
        }
        function setSummary($summary){
            $this->summary = $summary;
        }
        //deadline
        function getDeadline(){
            return $this->deadline;
        }
        function setDeadline($deadline){
            $this->deadline = $deadline;
        }
        //creatorId
        function getCreatorEmail(){
            $this->creatorId;
        }
        // function setCreatorId($creatorId){
        //     $this->creatorId = $creatorId;
        // }
        //eventLogo
        function getEventLogo(){
            return $this->eventLogo;
        }
        function setEventLogo($eventLogo){
            $this->eventLogo = $eventLogo;
        }
        //status
        function getStatus(){
            return $this->status;
        }
        function setStatus($status){
            $this->status = $status;
        }
        // //documents
        // function getDocuments(){
        //     return $this->documents;
        // }
        // function getDocument($name){
        //     foreach($this->documents as $document){
        //         if($document->getName() == $name){
        //             return $document;
        //         }
        //     }
        // }
        // function addDocument($document){
        //     array_push($this->documents, $document);
        // }
        // function removeDocument($document){
        //     $i;
        //     $newDocuments = array();
        //     for($i = 0; $i < count($this->documents); $i++){
        //         if($this->documents[$i] !== $document){
        //             array_push($newDocuments,$this->documents[$i]);
        //         }
        //     }
        //     $this->documents = $newDocuments;
        // }
        // //tasks
        // function getTasks(){
        //     return $this->tasks;
        // }
        // function getTask($id){
        //     foreach($this->tasks as $task){
        //         if($task->getId() == $id){
        //             return $task;
        //         }
        //     }
        // }
        // function addTask($task){
        //     array_push($this->tasks, $task);
        // }
        // function removeTask($task){
        //     $i;
        //     $newTasks = array();
        //     for($i = 0; $i < count($this->tasks); $i++){
        //         if($this->tasks[$i] !== $task){
        //             array_push($newTasks,$this->tasks[$i]);
        //         }
        //     }
        //     $this->tasks = $newTasks;
        // }
        // //budgets
        // function getBudgets(){
        //     return $this->budgets;
        // }
        // function getBudget($itemName){
        //     foreach($this->budgets as $budget){
        //         if($budget->geItemtName() == $itemName){
        //             return $budget;
        //         }
        //     }
        // }
        // function addBudget($budget){
        //     array_push($this->budgets, $budget);
        // }
        // function removeBudget($budget){
        //     $i;
        //     $newBudgets = array();
        //     for($i = 0; $i < count($this->budgets); $i++){
        //         if($this->budgets[$i] !== $budget){
        //             array_push($newBudgets,$this->budget[$i]);
        //         }
        //     }
        //     $this->budgets = $newBudgets;
        // }
        //departments
        function getDepartments(){
            return $this->departments;
        }
        // function getDepartment($department){
        //     foreach($departments as $value){
        //         if($value == $department){
        //             return $value;
        //         }
        //     }
        // }
        function addDepartment($department){
            $departments[$department] = array();
        }
        function removeDepartment($department){
            $newDepartments;
            foreach($departments as $value){
                if($value !== $department){
                    array_push($departments, $department);
                }
            }
            $departments = $newDepartments;

            // foreach($departments[$department] as $member){
            //     array_push($departments['unassigned'], $member);
            // }
            // $newDepartments;
            // foreach($departments as $key => $value){
            //     if($key !== $department){
            //         $newDepartments[$key] = $value;
            //     }
            // }
            // $departments = $newDepartments;
        }
        // function assignDepartment($department, $employee, $previouslyAssigned){
        //     if($previouslyAssigned == false){
        //         $newUnassigned = array();
        //         foreach($departments['unassigned'] as $member){
        //             if($member !== $employee){
        //                 array_push($newUnassigned, $member);
        //             }
        //         }
        //         $departments['unassigned'] = $newUnassigned;
        //     }
        //     array_push($departments[$department], $employeeId);
        // }
        // boards
        function getBoards(){
            return $this->boards;
        }
        function addBoard($board){
            array_push($this->boards, $board);
        }
        function removeBoard($board){
            $i;
            $newBoards = array();
            foreach($boards as $value){
                if($value !== $board){
                    array_push($newBoards, $board);
                }
            }
            $this->boards = $newBoards;
        }
        public static function insertEvent($event, $connect){
            $column = "INSERT INTO event (event_id, name, description, event_logo, status, email";
            $value = "VALUES (?, ?, ?, ?, ?, ?";
            if($event->getDeadline() != false){
                $column = $column . ", deadline";
                $value = $value . ", ?";
            }
            $query = $column . ")" . $value . "))";
            
            $insertQuery = $connect->prepare($query);
            
            $id=$event->getId();
            $name=$event->getName();
            $summary=$event->getSummary();
            $creatorid=$event->getCreatorId();
            $deadline = $event->getDeadline();
            $eventLogo = $event->getEventLogo();

            $insertQuery = $connect->prepare("INSERT INTO event (event_id, name, summary, creatorId)
            VALUES (?, ?, ?, ?)");

            $insertQuery->bind_param("ississ",$id, $name, $summary, $creatorid, $deadline, $eventLogo);
            $insertQuery->execute();
        }

        public static function readEvent($eventId, $connect){
            $readQuery = $connect->prepare("SELECT * FROM event WHERE event_id = ?");
            $readQuery->bind_param("s", $eventId);
            $readQuery->execute();
            $result = $readQuery->get_result()->fetch_assoc();
            $event = new Event($result['event_id'], $result['name'], $result['description'], $result['email']);
            $event->setEventLogo($result['event_logo']);
            $event->setStatus($result['status']);
            if($result['deadline'] == null){
                $event->setDeadline($result['deadline']);
            }

            $readQuery = $connect->prepare("SELECT * FROM event_board_column WHERE event_id = ?");
            $readQuery->bind_param("s", $eventId);
            $readQuery->execute();
            $readQuery->get_result();
            while($row = $result->fetch_assoc()){
                $event->addBoard($row['board_column_name']);
            }
            return $event;
        }

        public static function getEmployees($eventId, $connect){
            $eventQuery = $connect->prepare('SELECT email FROM works_in where event_id = ?');
            $eventQuery->bind_param("i", $eventId);
            $eventQuery->execute();
            $people = array();
            $result = $eventQuery->get_result();
            while($row = $result->fetch_assoc()){
                array_push($people, $row['email']);
            }
            return $people;
        }
    

        //employee
        // function getEmployees(){
        //     return $this->employees;
        // }
        // function getEmployee($id){
        //     foreach($employees as $employee){
        //         if($employee->getId() == $$id){
        //             return $employee;
        //         }
        //     }
        // }
        // function addEmployee($employee){
        //     array_push($employees, $employee);
        // }
        // function removeEmployee($employee){
        //     $i;
        //     $newEmployees = array();
        //     for($i = 0; $i < count($this->employees); $i++){
        //         if($this->employees[$i] !== $employee){
        //             array_push($newEmployees,$this->employees[$i]);
        //         }
        //     }
        //     $this->employees = $newEmployees;
        // }
        
    }

?>
