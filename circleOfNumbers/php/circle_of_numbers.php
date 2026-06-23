<?php

declare(strict_types=1);

namespace CircleOfNumbers;

class Solution
{
    public static function solution($n, $firstNumber)
    {

        $opposite = $n / 2 + $firstNumber;

        return $opposite >= $n ? $opposite - $n : $opposite;
    }
}
