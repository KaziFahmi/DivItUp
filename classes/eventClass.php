<?php
    class Event{
        //boards er part ana lagbe
        private $id;
        private $name;
        private $deadline;
        private $creatorId;
        private $eventLogo;
        private $documents = array('unassigned' => array());
        private $tasks = array();
        private $budgets = array();
        // private $employees = array();
        private $departments;
        private $boards = array();

        function __construct($id, $name, $summary, $creatorId){
            $this->id = $id;
            $this->name - $name;
            $this->summary = $summary;
            $this->creatorId = $creatorId;
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
        function getCreatorId(){
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
        //documents
        function getDocuments(){
            return $this->documents;
        }
        function getDocument($name){
            foreach($this->documents as $document){
                if($document->getName() == $name){
                    return $document;
                }
            }
        }
        function addDocument($document){
            array_push($this->documents, $document);
        }
        function removeDocument($document){
            $i;
            $newDocuments = array();
            for($i = 0; $i < count($this->documents); $i++){
                if($this->documents[$i] !== $document){
                    array_push($newDocuments,$this->documents[$i]);
                }
            }
            $this->documents = $newDocuments;
        }
        //tasks
        function getTasks(){
            return $this->tasks;
        }
        function getTask($id){
            foreach($this->tasks as $task){
                if($task->getId() == $id){
                    return $task;
                }
            }
        }
        function addTask($task){
            array_push($this->tasks, $task);
        }
        function removeTask($task){
            $i;
            $newTasks = array();
            for($i = 0; $i < count($this->tasks); $i++){
                if($this->tasks[$i] !== $task){
                    array_push($newTasks,$this->tasks[$i]);
                }
            }
            $this->tasks = $newTasks;
        }
        //budgets
        function getBudgets(){
            return $this->budgets;
        }
        function getBudget($itemName){
            foreach($this->budgets as $budget){
                if($budget->geItemtName() == $itemName){
                    return $budget;
                }
            }
        }
        function addBudget($budget){
            array_push($this->budgets, $budget);
        }
        function removeBudget($budget){
            $i;
            $newBudgets = array();
            for($i = 0; $i < count($this->budgets); $i++){
                if($this->budgets[$i] !== $budget){
                    array_push($newBudgets,$this->budget[$i]);
                }
            }
            $this->budgets = $newBudgets;
        }
        //departments
        function getDepartments(){
            return $this->departments;
        }
        function getDepartment($department){
            foreach($departments as $value){
                if($value == $department){
                    return $value;
                }
            }
        }
        function addDepartment($department){
            $departments[$department] = array();
        }
        function removeDepartment($department){
            foreach($departments[$department] as $member){
                array_push($departments['unassigned'], $member);
            }
            $newDepartments;
            foreach($departments as $key => $value){
                if($key !== $department){
                    $newDepartments[$key] = $value;
                }
            }
            $departments = $newDepartments;
        }
        function assignDepartment($department, $employee, $previouslyAssigned){
            if($previouslyAssigned == false){
                $newUnassigned = array();
                foreach($departments['unassigned'] as $member){
                    if($member !== $employee){
                        array_push($newUnassigned, $member);
                    }
                }
                $departments['unassigned'] = $newUnassigned;
            }
            array_push($departments[$department], $employeeId);
        }
        // boards
        function getBoards(){
            return $this->boards;
        }
        // function getBoard($itemName){
        //     foreach($this->budgets as $budget){
        //         if($budget->geItemtName() == $itemName){
        //             return $budget;
        //         }
        //     }
        // }
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
        public static function getEmployees($eventId, $connect){
            $eventQuery = $connect->prepare('SELECT email FROM works_in where event_id = ?');
            $eventQuery->bind_param("i", $eventId);
            $people = array();
            $result = $eventQuery->get_result();
            while($row = $result->fetch_assoc($result)){
                array_push($people, $row['email']);
            }
            return $people;
        }
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
