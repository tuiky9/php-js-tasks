<?php

declare(strict_types=1);

namespace RemoveCommonElements;

class Solution
{
    public static function solution(array $list1, array $list2): array
    {
        $array1 = $list1;
        $array2 = $list2;

        $mergedArray = [];
            $i = 0;
            $j = 0;

        while ($i < count($array1) && $j < count($array2)) {
            if ($array1[$i] <= $array2[$j]) {
                $mergedArray[] = $array1[$i];
                $i++;
            } else {
                $mergedArray[] = $array2[$j];
                $j++;
            }
        }

        // Append remaining elements of array1, if any
        while ($i < count($array1)) {
            $mergedArray[] = $array1[$i];
            $i++;
        }

        // Append remaining elements of array2, if any
        while ($j < count($array2)) {
            $mergedArray[] = $array2[$j];
            $j++;
        }

        $cntArray = array_count_values($mergedArray);
        foreach ($mergedArray as $key => $value) {
            if (isset($cntArray[$value]) && $cntArray[$value] > 1) {
                unset($mergedArray[$key]);
            }
        }
        $mergedArray = array_values($mergedArray);

        return $mergedArray;
    }
}
