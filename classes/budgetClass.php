<<<<<<< HEAD
<?php
    class Budget{
        private $itemName;
        private $units;
        private $estimatedUnitPrice;
        private $actualUnitPrice;
        private $dateExpended;
        private $dateIssued;

        function __construct($item_name, $units, $estimated_unit_price, $actual_unit_price, $date_expended, $date_issued){
            $this->itemName = $itemName;
            $this->units = $units;
            $this->estimatedUnitPrice = $estimatedUnitPrice;
            $this->actualUnitPrice = $actualUnitPrice;
            $this->dateExpended = $dateExpended;
            $this->dateIssued = $dateIssued;
        }
        function getItemNeme(){
            return $this->itemName;
        }
        function getUnits(){
            return $this->units;
        }
        function getEstimatedUnitPrice(){
            return $this->estimatedUnitPrice;
        }
        function getActualUnitPrice(){
            return $this->actualUnitPrice;
        }
        function setActualUnitPrice($actualUnitPrice){
            $this->actualUnitPrice = $actualUnitPrice;
        }
        function getDateExpended(){
            return $this->dateExpended;
        }
        function setDateExpended($dateExpended){
            $this->dateExpended = $dateExpended;
        }
        function getDateIssued(){
            return $this->dateIssued;
        }
    }
=======
<?php
    class Budget{
        private $itemName;
        private $units;
        private $estimatedUnitPrice;
        private $actualUnitPrice;
        private $dateExpended;
        private $dateIssued;

        function __construct($item_name, $units, $estimated_unit_price, $actual_unit_price, $date_expended, $date_issued){
            $this->itemName = $itemName;
            $this->units = $units;
            $this->estimatedUnitPrice = $estimatedUnitPrice;
            $this->actualUnitPrice = $actualUnitPrice;
            $this->dateExpended = $dateExpended;
            $this->dateIssued = $dateIssued;
        }
        function getItemNeme(){
            return $this->itemName;
        }
        function getUnits(){
            return $this->units;
        }
        function getEstimatedUnitPrice(){
            return $this->estimatedUnitPrice;
        }
        function getActualUnitPrice(){
            return $this->actualUnitPrice;
        }
        function setActualUnitPrice($actualUnitPrice){
            $this->actualUnitPrice = $actualUnitPrice;
        }
        function getDateExpended(){
            return $this->dateExpended;
        }
        function setDateExpended($dateExpended){
            $this->dateExpended = $dateExpended;
        }
        function getDateIssued(){
            return $this->dateIssued;
        }
>>>>>>> 485a092b475cd73afeaff0f24abe7c2c63e32657
?>