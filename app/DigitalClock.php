<?php

namespace App;

class DigitalClock
{
    public static function clock(int $seconds): string
    {
        $secondsPerDay = 86400;
        if ($seconds > $secondsPerDay) $seconds = $seconds % $secondsPerDay;
        $h = floor($seconds / 3600);
        $m = floor($seconds / 60 % 60);
        $s = floor($seconds % 60);
        if ($h < 10) $h = "0$h";
        if ($m < 10) $m = "0$m";
        if ($s < 10) $s = "0$s";
        return "$h:$m:$s";
    }
}
