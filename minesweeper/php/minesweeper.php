<?php

declare(strict_types=1);

namespace Minesweeper;

class Solution
{
    public static function solution(array $matrix): array
    {
        $offsets = [
            [-1, -1], [-1, 0], [-1, 1],
            [0, -1], [0, 1],
            [1, -1], [1, 0], [1, 1],
        ];
        $result = [];

        foreach ($matrix as $y => $row) {
            $resultRow = [];
            foreach ($row as $x => $_) {
                $count = 0;
                foreach ($offsets as [$dy, $dx]) {
                    $ny = $y + $dy;
                    $nx = $x + $dx;
                    if (isset($matrix[$ny][$nx]) && $matrix[$ny][$nx]) {
                        $count++;
                    }
                }
                $resultRow[] = $count;
            }
            $result[] = $resultRow;
        }

        return $result;
    }
}
