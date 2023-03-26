<?php
    include("./src/roll.php");
    include("./src/horse.php");
    include("./src/team.php");
    
    //__construct($life, $speed, $attack, $defence, $reroll, $dodge, $mythic, $dubs)
    $horse[0] = new Combatant(10,10,2,1,0,0,0,0);
    $horse[1] = new Combatant(10,10,2,1,0,0,0,0);
    
    //$test[0]->takeDamage(2);
    //echo $test->life."/".$test[0]->base_life;
    //$test->life = 5;
    //echo $test->life;
    
    //get battle type
    $type = $_POST['type'];
    
    //get teams
    //the 0 here refers to $horse[0]
    $tempTeam = [0]; //explode(",",$_POST['team1']);
    $team[0] = new Team($tempTeam);
    //the 1 refers to $horse[1]
    $tempTeam = [1]; //explode(",",$_POST['team1']);
    $team[1] = new Team($tempTeam);
    
    echo $horse[($team[0]->members[0])]->life;
    
    //arena
    $arena = $_POST['arena'];
    
    //round clock
    $continue = true;
    do {
        //check each team
        //another for loop to be used when 5v5 etc. are needed
        for($a = 0; $a < 2; $a ++){
            //speed
            //function diceRoll($sides, $count)
            $roll = diceRoll(6,3);
            //super check
            $super = superCheck($roll);
            if ($super == true){
                //target is in team 0 by default
                $targetT = 0;
                //if currently working with team 0
                if ($a == 0){
                    //target team is set to team 1 instead
                    $targetT = 1;
                }
                //first horse in target team 
                //takes damage equal to 1 of the dice (1/3 of roll)
                $horse[($team[$targetT]->members[0])]->takeDamage($roll/3);
            }
            //bonus calcs
            $bonus = 0;
            //set speed (base + roll + bonus)
            $horse[($team[$a]->members[0])]->speed = $horse[($team[$a]->members[0])]->base_speed + $roll + $bonus;
        }
        
        
        //check for rerolls
        $rr = rerollCheck($horse[($team[0]->members[0])]->speed,
        $horse[($team[1]->members[0])]->speed,
        $horse[($team[$a]->members[0])]->$reroll);
        //if speed tied, highest aqua
        //if still tied, reroll
        
        //each round is 4 attacks
        for($i = 0; $i < 4; $i++){
            //attacks
            
            //roll for attack (fire)
            //check super
            //bonuses
            
            //dodge (dark)
            //if successful (dubs), damage is 1
            //if super, deal dmg to attacker
            //bonuses
            
            //defence (earth)
            //roll for defence
            //check super (attacker takes dmg if super)
            //bonuses
            //defender reroll if applicable
            //attacker reroll if applicable
            //compute damage, min of 1
            
            //apply damage
            $continue = false;
        }

        
    }
    while ($continue == true);
    
    //attack clock

?>
