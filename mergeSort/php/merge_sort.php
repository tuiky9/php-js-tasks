<?php

declare(strict_types=1);

namespace MergeSort;

class Solution
{
    public static function solution(array $array): array
    {
        $length = count($array);

        if ($length <= 1) {
            return $array;
        }

        $middle = intdiv($length, 2);
        $left = array_slice($array, 0, $middle);
        $right = array_slice($array, $middle);

        return self::merge(
            self::solution($left),
            self::solution($right)
        );
    }

    private static function merge(array $left, array $right): array
    {
        $result = [];
        $leftIndex = 0;
        $rightIndex = 0;

        while ($leftIndex < count($left) && $rightIndex < count($right)) {
            if ($left[$leftIndex] <= $right[$rightIndex]) {
                $result[] = $left[$leftIndex];
                $leftIndex++;
            } else {
                $result[] = $right[$rightIndex];
                $rightIndex++;
            }
        }

        while ($leftIndex < count($left)) {
            $result[] = $left[$leftIndex];
            $leftIndex++;
        }

        while ($rightIndex < count($right)) {
            $result[] = $right[$rightIndex];
            $rightIndex++;
        }

        return $result;
    }
}
