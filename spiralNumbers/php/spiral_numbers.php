<?php

declare(strict_types=1);

namespace SpiralNumbers;

class Solution
{
    public static function solution(int $n): array
    {
        $matrix = array_fill(0, $n, array_fill(0, $n, 0));
        $value = 1;
        $round = 0;

        for ($size = $n; $size > 0; $size -= 2) {
            for ($x = 0; $x < $size; $x++) {
                $matrix[$round][$x + $round] = $value++;
            }
            for ($y = $round + 1; $y < $size + $round; $y++) {
                $matrix[$y][$size - 1 + $round] = $value++;
            }
            for ($x = $size - 2 + $round; $x >= $round; $x--) {
                $matrix[$size - 1 + $round][$x] = $value++;
            }
            for ($y = $size - 2 + $round; $y > $round; $y--) {
                $matrix[$y][$round] = $value++;
            }
            $round++;
        }

        return $matrix;
    }
}
