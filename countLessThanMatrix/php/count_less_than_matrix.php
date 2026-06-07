<?php

class Solution {
    public static function countLessThan($matrix, $target) {
        $rows = count($matrix);

        if ($rows === 0) {
            return 0;
        }

        $cols = count($matrix[0]);

        if ($cols === 0) {
            return 0;
        }

        $count = 0;

        // Start from bottom-left corner
        $row = $rows - 1;
        $col = 0;

        while ($row >= 0 && $col < $cols) {
            if ($matrix[$row][$col] < $target) {
                // If matrix[row][col] is smaller than target,
                // then all values above it in the same column are also smaller
                $count += $row + 1;

                // Move right to check larger values
                $col++;
            } else {
                // Current value is too large or equal to target,
                // move up to smaller values
                $row--;
            }
        }

        return $count;
    }
}
