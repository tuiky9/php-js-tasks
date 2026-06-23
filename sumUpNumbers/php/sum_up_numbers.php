<?php

declare(strict_types=1);

namespace SumUpNumbers;

class Solution
{
    public static function solution($inputString)
    {

        preg_match_all('/\d+/', $inputString, $m);

        return array_sum($m[0]);
    }
}
