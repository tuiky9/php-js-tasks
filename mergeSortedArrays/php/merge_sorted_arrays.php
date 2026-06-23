<?php

declare(strict_types=1);

namespace MergeSortedArrays;

class Solution
{
    public static function solution($arr1, $arr2)
    {
        $i = 0;
        $j = 0;

        $newArr = [];

        while ($i < count($arr1) && $j < count($arr2)) {
            if ($arr1[$i] <= $arr2[$j]) {
                $newArr[] = $arr1[$i];
                $i++;
            } else {
                $newArr[] = $arr2[$j];
                $j++;
            }
        }

        while ($i < count($arr1)) {
            $newArr[] = $arr1[$i];
            $i++;
        }

        while ($j < count($arr2)) {
            $newArr[] = $arr2[$j];
            $j++;
        }

        return $newArr;
    }
}
