<?php

/*Fighter*/

function experienceNextLevel ($level)
{
    $xp = "0";

    switch($level)
    {
        case 1:
            $xp = "2,000";
            break;
            
        case 2:
            $xp = "4,000";
            break;
            
        case 3:
            $xp = "8,000";
            break;
            
        case 4:
            $xp = "16,000";
            break;
            
        case 5:
            $xp = "32,000";
            break;
            
        case 6:
            $xp = "64,000";
            break;
            
        case 7:
            $xp = "120,000";
            break;
            
        case 8:
            $xp = "240,000";
            break;
            
        case 9:
            $xp = "360,000";
            break;
            
        case 10:
            $xp = "480,000";
            break;
            
        case 11:
            $xp = "600,000";
            break;
            
        case 12:
            $xp = "720,000";
            break;
            
        case 13:
            $xp = "840,000";
            break;
            
        case 14:
            $xp = "960,000";
            break;
            
        case 15:
            $xp = "1,080,000";
            break;
            
        case 16:
            $xp = "1,200,000";
            break;
            
        case 17:
            $xp = "1,320,000";
            break;
            
        case 18:
            $xp = "1,440,000";
            break;
            
        case 19:
            $xp = "1,560,000";
            break;
            
        case 20:
            $xp = "-----";
            break;
            
            
        default:
            $xp = "___";
            
    }
    
    return $xp;
}



function saveBreathAttacks ($level)
{
    $save = 0;
    
    if($level >= 1 && $level <= 3)
    {
        $save = 15;
    }
    else if($level >= 4 && $level <= 7)
    {
        $save = 14;
    }
    else if($level >= 8 && $level <= 9)
    {
        $save = 13;
    }
    else if($level >= 10 && $level <= 13)
    {
        $save = 12;
    }
    else if($level >= 14 && $level <= 15)
    {
        $save = 11;
    }
    else if($level >= 16 && $level <= 19)
    {
        $save = 10;
    }
    else if($level == 20)
    {
        $save = 9;
    }
    
    return $save;
}

function savePoisonDeath ($level)
{
    $save = 0;
    
    
    if($level == 1)
    {
        $save = 12;
    }
    else if($level >= 2 && $level <= 5)
    {
        $save = 11;
    }
    else if($level >= 6 && $level <= 7)
    {
        $save = 10;
    }
    else if($level >= 8 && $level <= 11)
    {
        $save = 9;
    }
    else if($level >= 12 && $level <= 13)
    {
        $save = 8;
    }
    else if($level >= 14 && $level <= 17)
    {
        $save = 7;
    }
    else if($level >= 18 && $level <= 19)
    {
        $save = 6;
    }
    else if($level == 20)
    {
        $save = 5;
    }
    
    return $save;
}

function savePetrify ($level)
{
    $save = 0;
    
    if($level >= 1 && $level <= 3)
    {
        $save = 14;
    }
    else if($level >= 4 && $level <= 5)
    {
        $save = 13;
    }
    else if($level >= 6 && $level <= 9)
    {
        $save = 12;
    }
    else if($level >= 10 && $level <= 11)
    {
        $save = 11;
    }
    else if($level >= 12 && $level <= 15)
    {
        $save = 10;
    }
    else if($level >= 16 && $level <= 17)
    {
        $save = 9;
    }
    else if($level >= 18 && $level <= 20)
    {
        $save = 8;
    }
    
    
    return $save;
}


function saveWand ($level)
{
    $save = 0;
    
    
    if($level == 1)
    {
        $save = 13;
    }
    else if($level >= 2 && $level <= 3)
    {
        $save = 12;
    }
    else if($level >= 4 && $level <= 7)
    {
        $save = 11;
    }
    else if($level >= 8 && $level <= 9)
    {
        $save = 10;
    }
    else if($level >= 10 && $level <= 13)
    {
        $save = 9;
    }
    else if($level >= 14 && $level <= 15)
    {
        $save = 8;
    }
    else if($level >= 16 && $level <= 19)
    {
        $save = 7;
    }
    else if($level == 20)
    {
        $save = 6;
    }
    return $save;
}


function saveSpell ($level)
{
    $save = 0;
    
    
    if($level == 1)
    {
        $save = 17;
    }
    else if($level >= 2 && $level <= 3)
    {
        $save = 16;
    }
    else if($level >= 4 && $level <= 7)
    {
        $save = 15;
    }
    else if($level >= 8 && $level <= 9)
    {
        $save = 14;
    }
    else if($level >= 10 && $level <= 13)
    {
        $save = 13;
    }
    else if($level >= 14 && $level <= 15)
    {
        $save = 12;
    }
    else if($level >= 16 && $level <= 19)
    {
        $save = 11;
    }
    else if($level == 20)
    {
        $save = 10;
    }
    
    return $save;
}



?>