<?php
    class User{
        private $name;
        private $profilePicture;
        private $password;
        private $email;
        private $skills = array();
        private $jobTitle;
        private $department;
        private $companyName;
        private $companyLocation;

        function __construct($name, $password, $email){
            $this->name = $name;
            $this->password = $password;
            $this->email = $email;
        }
        function getName(){
            return $this->name;
        }
        function setName($name){
            $this->name = $name;
        }
        function getProfilePicture(){
            return $this->profilePicture;
        }
        function setProfilePicture($profilePicture){
            $this->profilePicture = $profilePicture;
        }
        function getPassword(){
            return $this->password;
        }
        function setPassword($password){
            $this->password = $password;
        }
        function getEmail(){
            return $this->email;
        }
        function getSkills(){
            return $this->skills;
        }
        function addSkill($skill){
            array_push($this->skills, $skill);
        }
        public function removeSkills($skill){
            $i;
            $newSkills = array();
            for($i = 0; $i < count($this->skills); $i++){
                if($this->skills[$i] !== $skill){
                    array_push($newSkills,$this->skills[$i]);
                }
            }
            $this->skills = $newSkills;
        }
        function getJobTitle(){
            return $this->jobTitle;
        }
        function setJobTitle($jobTitle){
            $this->jobTitle = $jobTitle;
        }
        function getDepartment(){
            return $this->department;
        }
        function setDepartment($department){
            $this->department = $department;
        }
        function getCompanyName(){
            return $this->companyName;
        }
        function setCompanyName($companyName){
            $this->companyName = $companyName;
        }
        function getCompanyLocation(){
            return $this->companyLocation;
        }
        function setCompanyLocation($companyLocation){
            $this->companyLocation = $companyLocation;
        }

        // query

        public static function insertUser($user, $connect){
            $insertQuery = $connect->prepare("INSERT INTO user (name, password, email, profile_picture)
            VALUES (?, ?, ?, ?)");
            $name = $user->getName();
            $password = $user->getPassword();
            $email = $user->getEmail();
            $profilePicture = $user->getProfilePicture();
            $insertQuery->bind_param("ssss",$name, $password, $email, $profilePicture);
            $insertQuery->execute();
        }
        public static function readUser($email, $connect){
            $readQuery = $connect->prepare("SELECT * FROM user WHERE email = ?");
            $readQuery->bind_param("s", $email);
            $readQuery->execute();
            $result = $readQuery->get_result()->fetch_assoc();
            $user = new User($result['name'], $result['password'], $result['email']);
            if($result['job_title'] != null){
                $user->setJobTitle($result['job_title']);
            }
            if($result['department_name'] != null){
                $user->setDepartment($result['department_name']);
            }
            if($result['company_name'] != null){
                $user->setCompanyName($result['company_name']);
            }
            if($result['company_location'] != null){
                $user->setCompanyLocation($result['company_location']);
            }
            if($result['profile_picture'] != null){
                $user->setProfilePicture($result['profile_picture']);
            }
            return $user;
        }
        public static function getEvents($email, $connect){
            $eventQuery = $connect->prepare('SELECT event_id FROM works_in where email = ?');
            $eventQuery->bind_param("s", $email);
            $events = array();
            $result = $eventQuery->get_result();
            while($row = $result->fetch_assoc($result)){
                array_push($events, $row['event_id']);
            }
            return $events;
        }
    }
?>
