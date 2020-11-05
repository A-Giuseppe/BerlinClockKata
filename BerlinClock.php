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

        elseif(intdiv($minutes,5)==2)
            return "A A E E E E E E E E E";

        elseif (intdiv($minutes,5)==3)
            return "A A A E E E E E E E E";

        elseif (intdiv($minutes,5)==4)
            return "A A A A E E E E E E E";

        elseif(intdiv($minutes,5)==5)
            return "A A A A A E E E E E E";

        elseif (intdiv($minutes,5)==6)
            return "A A A A A A E E E E E";

        elseif(intdiv($minutes,5)==7)
            return "A A A A A A A E E E E";

        elseif ($minutes == 40)
            return "A A A A A A A A E E E";
        elseif ($minutes == 41)
            return "A A A A A A A A E E E";

        return "E E E E E E E E E E E";
    }
}