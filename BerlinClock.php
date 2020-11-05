<?php

namespace BerlinClock;

class BerlinClock
{
    function firstLineMinutes (int $minutes) : string {
        if($minutes%5 == 1)
            return "A E E E";

        elseif ($minutes%5 == 2)
            return  "A A E E";

        elseif ( $minutes%5 == 3)
            return "A A A E";

        elseif ($minutes%5 == 4 )
            return "A A A A";

        return "E E E E";
    }

    function secondLineMinutes (int $minutes) : string {
        if(intdiv($minutes , 5) == 1)
            return "A E E E E E E E E E E";

        if($minutes == 10)
            return "A A E E E E E E E E E";

        return "E E E E E E E E E E E";
    }
}