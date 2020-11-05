<?php

namespace BerlinClock;

class BerlinClock
{
    function firstLineMinutes (int $minute) : string {
        if($minute == 1)
            return "A E E E";
        return "E E E E";
    }
}