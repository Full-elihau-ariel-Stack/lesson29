<?php  
    class CountryModel {
        private $country_id;
        private $countryName;
    

        function __construct($arr) {
            $this->country_id = $arr['id'];
            $this->countryName = $arr['name']; 
        
        }

        function getName() {
            return $this->pilotName;
        }
        
        function getPilotsPicture() {
            return $this->pilotName;
        }

        function getLevelId() {
            return $this->pilotName;
        }

        
    }

?>