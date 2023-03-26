<?php

    class Team {
        public $members;
        public function __construct($members) {
            $this->members = $members;
        }
        
        public function getHorse($num){
            return $this->members[$num];
        }
        
    }

?>
