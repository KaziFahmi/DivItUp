<?php
    class User{
        private $id;
        private $firstName;
        private $middleName;
        private $lastName;
        private $profilePicture;
        private $password;
        private $email;
        private $skills = array();
        private $jobTitle;
        private $department;
        private $companyName;
        private $companyLocation;

        function __construct($id, $firstName, $lastName, $password, $email){
            $this->id = $id;
            $this->firstName = $firstName;
            $this->lastName = $lastName;
            $this->password = $password;
            $this->email = $email;
        }
        
        function getId(){
            return $this->id;
        }
        function getFirstName(){
            return $this->firstName;
        }
        function setFirstName($firstName){
            $this->firstName = $firstName;
        }
        function getMiddleName(){
            return $this->middleName;
        }
        function setMiddleName($middleName){
            $this->middleName = $middleName;
        }
        function getLastName(){
            return $this->lastName;
        }
        function setLastName($lastName){
            $this->lastName = $lastName;
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
        function setEmail($email){
            $this->email = $email;
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
            $insertQuery = $connect->prepare("INSERT INTO user (user_id, first_name, last_name, password, email)
            VALUES (?, ?, ?, ?, ?)");
            $id = $user->getId();
            $firstName = $user->getFirstName();
            $lastName = $user->getLastName();
            $password = $user->getPassword();
            $email = $user->getEmail();
            $insertQuery->bind_param("issss", $id, $firstName, $lastName, $password, $email);
            $insertQuery->execute();
        }
    }
?>
