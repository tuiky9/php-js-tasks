<?php

declare(strict_types=1);

namespace ChessKnight;

class Solution
{
    public static function solution(string $cell)
    {
        $n = (int) $cell[1];
        $l = ord($cell[0]) - 96;

        return (int) ((8 - $n >= 2 && $l + 1 <= 8)
            + (8 - $n >= 1 && $l + 2 <= 8)
            + ($n - 1 >= 1 && $l + 2 <= 8)
            + ($n - 2 >= 1 && $l + 1 <= 8)
            + ($n - 2 >= 1 && $l - 1 >= 1)
            + ($n - 1 >= 1 && $l - 2 >= 1)
            + ($n + 1 <= 8 && $l - 2 >= 1)
            + ($n + 2 <= 8 && $l - 1 >= 1));
    }
}
