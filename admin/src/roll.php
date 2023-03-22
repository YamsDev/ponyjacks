<?php

    function diceRoll($sides, $count){
        for ($i = 0; $i < $count; $i ++){
            $result[$i] = rand(1,$sides);
        }
        
        return $result;
    }

?>
