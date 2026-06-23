<?php

declare(strict_types=1);

namespace ValidTime;

class Solution
{
    public static function solution($time)
    {
        $timeArray = explode(':', $time);
        return $timeArray[0] < 24 && $timeArray[1] < 60;
    }
}
