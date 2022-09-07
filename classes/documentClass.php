<<<<<<< HEAD
<?php
    class Document{
        private $name;
        private $fileType;
        private $document;

        function __construct($name, $fileType, $document){
            $this->name = $name;
            $this->fileType = $fileType;
            $this->document = $document;
        }

        function getName(){
            return $this->name;
        }
        function setName($name){
            $this->name = $name;
        }
        function getFileType(){
            return $this->fileType;
        }
        function getDocument(){
            return $this->Document;
        }
    }
=======
<?php
    class Document{
        private $name;
        private $fileType;
        private $document;

        function __construct($name, $fileType, $document){
            $this->name = $name;
            $this->fileType = $fileType;
            $this->document = $document;
        }

        function getName(){
            return $this->name;
        }
        function setName($name){
            $this->name = $name;
        }
        function getFileType(){
            return $this->fileType;
        }
        function getDocument(){
            return $this->Document;
        }
    }
>>>>>>> 485a092b475cd73afeaff0f24abe7c2c63e32657
?>