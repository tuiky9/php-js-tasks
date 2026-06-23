<?php

class Solution {
    public static function mergeNSortedArrays($arrays) {
        $result = [];
        $indexes = [];

        $arraysCount = count($arrays);

        // Store current index for each array
        for ($i = 0; $i < $arraysCount; $i++) {
            $indexes[$i] = 0;
        }

        while (true) {
            $minValue = null;
            $minArrayIndex = null;

            // Find the smallest current element among all arrays
            for ($i = 0; $i < $arraysCount; $i++) {
                if ($indexes[$i] >= count($arrays[$i])) {
                    continue;
                }

                $currentValue = $arrays[$i][$indexes[$i]];

                if ($minValue === null || $currentValue < $minValue) {
                    $minValue = $currentValue;
                    $minArrayIndex = $i;
                }
            }

            // No more elements left
            if ($minArrayIndex === null) {
                break;
            }

            $result[] = $minValue;
            $indexes[$minArrayIndex]++;
        }

        return $result;
    }
}
