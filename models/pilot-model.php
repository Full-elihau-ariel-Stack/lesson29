<?php  
    class PilotModel {
        private $pilot_id;
        private $pilotName;
        private $pilotLevel;
        private $pilotPicture;

        function __construct($arr) {
            $this->pilot_id = $arr['id'];
            $this->pilotName = $arr['name']; 
            $this->pilotLevel = $arr['level'];
            $this->pilotPicture = $arr['picture_src'];
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