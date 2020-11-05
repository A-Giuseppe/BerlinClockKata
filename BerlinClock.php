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

        elseif (intdiv($minutes,5)==8)
            return "A A A A A A A A E E E";

        elseif (intdiv($minutes,5)==9)
            return "A A A A A A A A A E E";

        elseif(intdiv($minutes,5)==10)
            return "A A A A A A A A A A E";

        elseif(intdiv($minutes,5)==11)
            return "A A A A A A A A A A A";

        return "E E E E E E E E E E E";
    }

    function firstLineHours (int $hours) : string {
        if($hours%5 == 1)
            return "A E E E";
        if($hours==2 || $hours==7)
            return "A A E E";
        if ($hours==3)
            return "A A A E";
        if($hours==4)
            return "A A A A";
        return "E E E E";
    }
}