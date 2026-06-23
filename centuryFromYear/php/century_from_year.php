<?php

declare(strict_types=1);

namespace CenturyFromYear;

class Solution
{
    public static function solution($year)
    {
        $fourDigitYear = sprintf('%04d', $year);
        $century       = str_split($fourDigitYear, 2);
        $centuryStart  = $century[1] != 00 ? 1 : 0;
        return $century[0] + $centuryStart;
    }
}
