<?php  
    class AirportModel {
        private $airPort_id;
        private $airPortName;
        private $airPortCountry;

        function __construct($arr) {
            $this->airPort_id = $arr['id'];
            $this->airPortName = $arr['name']; 
            $this->airPortCountry = $arr['country_id'];
        }

        function getName() {
            return $this->airPortName;
        }

        function getCountryId() {
            return $this->airPortName;
        }

        
    }

?>