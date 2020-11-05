<?php

namespace BerlinClock;

class BerlinClock
{
    function firstLineMinutes (int $minute) : string {
        if($minute%5 == 1)
            return "A E E E";
        elseif ($minute ==2 )
            return  "A A E E";
        elseif ( $minute == 3)
            return "A A A E";
        elseif ($minute == 4 )
            return "A A A A";
        return "E E E E";
    }
}