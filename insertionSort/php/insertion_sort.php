<?php

declare(strict_types=1);

namespace InsertionSort;

class Solution
{
    public static function solution(array $arr): array
    {
        $n = count($arr);

        for ($i = 1; $i < $n; $i++) {
            $current = $arr[$i];
            $j = $i - 1;

            while ($j >= 0 && $arr[$j] > $current) {
                $arr[$j + 1] = $arr[$j];
                $j--;
            }

            $arr[$j + 1] = $current;
        }

        return $arr;
    }
}
