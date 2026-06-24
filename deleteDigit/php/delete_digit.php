<?php

declare(strict_types=1);

namespace DeleteDigit;

class Solution
{
    public static function solution(int $n)
    {
        $digits = str_split((string) $n);
        $max = 0;

        for ($i = 0; $i < count($digits); $i++) {
            $remaining = $digits;
            array_splice($remaining, $i, 1);
            $value = (int) implode('', $remaining);
            if ($value > $max) {
                $max = $value;
            }
        }

        return $max;
    }
}
