<?php

declare(strict_types=1);

namespace DigitDegree;

class Solution
{
    public static function solution(int $n)
    {
        $count = 0;

        while (strlen((string) $n) > 1) {
            $n = array_sum(array_map('intval', str_split((string) $n)));
            $count++;
        }

        return $count;
    }
}
