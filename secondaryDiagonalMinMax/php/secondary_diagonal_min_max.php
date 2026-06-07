<?php

class Solution {
    public static function solution($grid) {
        $n = count($grid);

        if ($n === 0) {
            return [null, null];
        }

        $min = $grid[0][$n - 1];
        $max = $grid[0][$n - 1];

        for ($row = 0; $row < $n; $row++) {
            $col = $n - 1 - $row;

            $value = $grid[$row][$col];

            if ($value < $min) {
                $min = $value;
            }

            if ($value > $max) {
                $max = $value;
            }
        }

        return [$min, $max];
    }
}
