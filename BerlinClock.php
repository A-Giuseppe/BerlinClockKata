<?php

namespace BerlinClock;

class BerlinClock
{
    function firstLineMinutes (int $minute) : string {
        if($minute == 1)
            return "A E E E";

        elseif ($minute ==2 )
            return  "A A E E";

        return "E E E E";
    }
}