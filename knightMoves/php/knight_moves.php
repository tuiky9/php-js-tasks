<?php

declare(strict_types=1);

namespace KnightMoves;

final class Solution
{
    private const DELTAS = [
        [-2, -1],
        [-2, 1],
        [-1, -2],
        [-1, 2],
        [1, -2],
        [1, 2],
        [2, -1],
        [2, 1],
    ];

    /**
     * @param list<list<mixed>> $board
     * @param array{0: int, 1: int} $start
     * @param array{0: int, 1: int} $end
     */
    public static function knightMoves(array $board, array $start, array $end): int
    {
        [$startRow, $startCol] = $start;
        [$endRow, $endCol] = $end;

        if ($startRow === $endRow && $startCol === $endCol) {
            return 0;
        }

        $rows = count($board);
        $cols = $rows > 0 ? count($board[0]) : 0;

        $queue = [[$startRow, $startCol, 0]];
        $visited = [];
        $visited[$startRow][$startCol] = true;
        $head = 0;

        while ($head < count($queue)) {
            [$row, $col, $moves] = $queue[$head++];

            foreach (self::DELTAS as [$dRow, $dCol]) {
                $nextRow = $row + $dRow;
                $nextCol = $col + $dCol;

                if (
                    $nextRow < 0
                    || $nextCol < 0
                    || $nextRow >= $rows
                    || $nextCol >= $cols
                    || isset($visited[$nextRow][$nextCol])
                ) {
                    continue;
                }

                if ($nextRow === $endRow && $nextCol === $endCol) {
                    return $moves + 1;
                }

                $visited[$nextRow][$nextCol] = true;
                $queue[] = [$nextRow, $nextCol, $moves + 1];
            }
        }

        return 0;
    }
}
