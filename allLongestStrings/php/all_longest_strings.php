<?php

declare(strict_types=1);

namespace AllLongestStrings;

class Solution
{
    public static function solution(array $inputArray): array
    {
        $max = max(array_map('strlen', $inputArray));

        foreach ($inputArray as $k => $v) {
            if (strlen($v) < $max) {
                unset($inputArray[$k]);
            }
        }

        return array_values($inputArray);
    }
}
