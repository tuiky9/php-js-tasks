<?php

declare(strict_types=1);

namespace Sudoku;

class Solution
{
    public static function solution(array $grid): bool
    {
        for ($row = 0; $row < 9; $row++) {
            if (!self::isValidGroup($grid[$row])) {
                return false;
            }
        }

        for ($col = 0; $col < 9; $col++) {
            $column = [];
            for ($row = 0; $row < 9; $row++) {
                $column[] = $grid[$row][$col];
            }
            if (!self::isValidGroup($column)) {
                return false;
            }
        }

        for ($row = 0; $row < 9; $row += 3) {
            for ($col = 0; $col < 9; $col += 3) {
                $box = [];
                for ($boxRow = 0; $boxRow < 3; $boxRow++) {
                    for ($boxCol = 0; $boxCol < 3; $boxCol++) {
                        $box[] = $grid[$row + $boxRow][$col + $boxCol];
                    }
                }
                if (!self::isValidGroup($box)) {
                    return false;
                }
            }
        }

        return true;
    }

    private static function isValidGroup(array $group): bool
    {
        $sorted = $group;
        sort($sorted);

        return $sorted === range(1, 9);
    }
}
