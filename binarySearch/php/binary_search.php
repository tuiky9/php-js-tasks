<?php

declare(strict_types=1);

namespace BinarySearch;

/*
PHP Task: Binary search in a sorted array (return leftmost index or -1).
*/

class Solution
{
    public static function solution(array $sorted, int $target): int
    {
        $left = 0;
        $right = count($sorted) - 1;
        $result = -1;

        while ($left <= $right) {
            $mid = $left + intdiv($right - $left, 2);

            if ($sorted[$mid] === $target) {
                $result = $mid;
                $right = $mid - 1;
            } elseif ($sorted[$mid] < $target) {
                $left = $mid + 1;
            } else {
                $right = $mid - 1;
            }
        }

        return $result;
    }
}
