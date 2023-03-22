<?php
    include("./src/roll.php");
    include("./src/horse.php");
    
    //__construct($life, $speed, $attack, $defence, $reroll, $dodge, $mythic, $dubs)
    $test = new Combatant(10,10,2,1,0,0,0,0);
    
    $test->takeDamage(2);
    echo $test->life."/".$test->base_life;
    $test->life = 5;
    echo $test->life;
    //get battle type
    $type = $_POST['type'];
    
    //get teams
    $tempTeam = explode(",",$_POST['team1']);
    $team[0] = new Team($tempTeam);
    $tempTeam = explode(",",$_POST['team2']);
    $team[1] = new Team($tempTeam);
    
    //arena
    $arena = $_POST['arena'];
    
    //round clock
    $continue = true;
    do {
        //speed
        
        //super check
        //bonus calcs
        //check for rerolls
        //if speed tied, highest aqua
        //if still tied, reroll
        
        //each round is 4 attacks
        for($i = 0; $i < 4; $i++){
            //attacks
        //each horse must get at least 1 attack
        
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
