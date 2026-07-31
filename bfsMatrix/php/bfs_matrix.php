<?php

declare(strict_types=1);

namespace BfsMatrix;

final class Solution
{
    private const DIRECTIONS = [
        [-1, 0],
        [1, 0],
        [0, -1],
        [0, 1],
    ];

    /**
     * @param list<list<int>> $mat
     * @param array{0: int, 1: int} $start
     * @param array{0: int, 1: int} $end
     */
    public static function bfsMatrix(array $mat, array $start, array $end): int
    {
        if ($mat === []) {
            return 0;
        }

        [$startRow, $startCol] = $start;
        [$endRow, $endCol] = $end;

        if ($startRow === $endRow && $startCol === $endCol) {
            return 0;
        }

        $rows = count($mat);
        $cols = count($mat[0]);

        if (
            !self::isWalkable($mat, $rows, $cols, $endRow, $endCol)
        ) {
            return 0;
        }

        $queue = [[$startRow, $startCol, 0]];
        $visited = [];
        $visited[$startRow][$startCol] = true;
        $head = 0;

        while ($head < count($queue)) {
            [$row, $col, $steps] = $queue[$head++];

            foreach (self::DIRECTIONS as [$dRow, $dCol]) {
                $nextRow = $row + $dRow;
                $nextCol = $col + $dCol;

                if (
                    !self::isWalkable($mat, $rows, $cols, $nextRow, $nextCol)
                    || isset($visited[$nextRow][$nextCol])
                ) {
                    continue;
                }

                if ($nextRow === $endRow && $nextCol === $endCol) {
                    return $steps + 1;
                }

                $visited[$nextRow][$nextCol] = true;
                $queue[] = [$nextRow, $nextCol, $steps + 1];
            }
        }

        return 0;
    }

    /**
     * @param list<list<int>> $mat
     */
    private static function isWalkable(
        array $mat,
        int $rows,
        int $cols,
        int $row,
        int $col
    ): bool {
        return $row >= 0
            && $col >= 0
            && $row < $rows
            && $col < $cols
            && $mat[$row][$col] === 1;
    }
}
