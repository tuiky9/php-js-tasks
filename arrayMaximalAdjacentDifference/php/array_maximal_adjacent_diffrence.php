<?php

declare(strict_types=1);

namespace ArrayMaximalAdjacentDifference;

class Solution
{
    public static function solution($inputArray)
    {
        $maxd = array();
        foreach ($inputArray as $k => $v) {
            if ($k === 0) {
                continue;
            }
            $maxd[] = abs($v - $inputArray[$k - 1]);
        }
        return max($maxd);
    }
}
