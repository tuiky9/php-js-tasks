<?php

declare(strict_types=1);

namespace DifferentSquares;

class Solution
{
    public static function solution(array $matrix)
    {
        $squares = [];

        for ($y = 0; $y < count($matrix) - 1; $y++) {
            for ($x = 0; $x < count($matrix[0]) - 1; $x++) {
                $squares[] = ''
                    . $matrix[$y][$x]
                    . $matrix[$y][$x + 1]
                    . $matrix[$y + 1][$x]
                    . $matrix[$y + 1][$x + 1];
            }
        }

        return count(array_unique($squares));
    }
}
