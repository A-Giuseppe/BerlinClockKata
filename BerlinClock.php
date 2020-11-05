<?php

namespace BerlinClock;

class BerlinClock
{
    function firstLineMinutes (int $minute) : string {
        if($minute == 1)
            return "A E E E";
        elseif ($minute ==2 )
            return  "A A E E";
        elseif ( $minute == 3)
            return "A A A E";
        elseif ($minute == 4 )
            return "A A A A";
        elseif($minute == 6)
            return "A E E E";

        return "E E E E";
    }
}