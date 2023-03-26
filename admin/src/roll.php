<?php

    function diceRoll($sides, $count){
        for ($i = 0; $i < $count; $i ++){
            $result[$i] = rand(1,$sides);
        }
        
        return $result;
    }
    
    function superCheck($rolls){
        $num = $rolls.length;
        for($i = 1; $i < $num; $i ++){
            if ($rolls[0] == $rolls[$i]){
                $super = true;
            } else {
                //if any rolls are not the same
                //break the loop and return false
                $super = false;
                return $super;
            }
        }
        return $super;
    }
    
    function rerollCheck($stat1,$stat2,$sky){
        if ($stat1 > $stat2 && $sky1 > 0){
            return true;
        } else {
            return false;
        }
    }

?>
