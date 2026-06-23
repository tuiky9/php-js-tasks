<?php

declare(strict_types=1);

namespace BoxBlur;

class Solution
{
    public static function solution(array $image): array
    {
        $rows = count($image);
        $cols = count($image[0]);
        $result = [];

        for ($y = 0; $y < $rows - 2; $y++) {
            $row = [];
            for ($x = 0; $x < $cols - 2; $x++) {
                $sum = 0;
                for ($dy = 0; $dy < 3; $dy++) {
                    for ($dx = 0; $dx < 3; $dx++) {
                        $sum += $image[$y + $dy][$x + $dx];
                    }
                }
                $row[] = intdiv($sum, 9);
            }
            $result[] = $row;
        }

        return $result;
    }
}
