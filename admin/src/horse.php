<?php

    class Combatant {
        public $life;
        public $speed;
        public $attack;
        public $defence;
        public $reroll;
        public $dodge;
        public $mythic;
        public $dubs;
        public function __construct($base_life, $base_speed, $base_attack, $base_defence, $base_reroll, $base_dodge, $base_mythic, $base_dubs) {
            $this->base_life = $base_life;
            $this->base_speed = $base_speed;
            $this->base_attack = $base_attack;
            $this->base_defence = $base_defence;
            $this->base_reroll = $base_reroll;
            $this->base_dodge = $base_dodge;
            $this->base_mythic = $base_mythic;
            $this->base_dubs = $base_dubs;
            $this->life = $base_life;
            $this->speed = 0;
            $this->attack = 0;
            $this->defence = 0;
            $this->reroll = $base_reroll;
            $this->dodge = $base_dodge;
        }
        
        public function speedRoll($roll) {
            $speed = $roll;
        }
        
        public function takeDamage($hit) {
            $this->life -= $hit;
            if ($life <= 0){
                $life = 0;
            }
        }
    }

?>
