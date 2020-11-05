<?php

namespace BerlinClock;

class BerlinClock
{
    function firstLineMinutes (int $minute) : string {
        if($minute%5 == 1)
            return "A E E E";
        elseif ($minute%5 == 2)
            return  "A A E E";
        elseif ( $minute%5 == 3)
            return "A A A E";
        elseif ($minute%5 == 4 )
            return "A A A A";
        return "E E E E";
    }
}