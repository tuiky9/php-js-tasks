<?php

declare(strict_types=1);

namespace QuickSort;

class Solution
{
    public static function solution(array $array): array
    {
        $length = count($array);

        if ($length <= 1) {
            return $array;
        }

        $pivotIndex = intdiv($length, 2);
        $pivot = $array[$pivotIndex];

        $left = [];
        $middle = [];
        $right = [];

        foreach ($array as $value) {
            if ($value < $pivot) {
                $left[] = $value;
            } elseif ($value > $pivot) {
                $right[] = $value;
            } else {
                $middle[] = $value;
            }
        }

        return array_merge(
            self::solution($left),
            $middle,
            self::solution($right)
        );
    }
}
