<?php

declare(strict_types=1);

use KnightMoves\Solution;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

final class KnightMovesTest extends TestCase
{
    /** @var list<list<int>> */
    private static array $board = [
        [0, 0, 0, 0, 0, 0, 0, 0],
        [0, 0, 0, 0, 0, 0, 0, 0],
        [0, 0, 0, 0, 0, 0, 0, 0],
        [0, 0, 0, 0, 0, 0, 0, 0],
        [0, 0, 0, 0, 0, 0, 0, 0],
        [0, 0, 0, 0, 0, 0, 0, 0],
        [0, 0, 0, 0, 0, 0, 0, 0],
        [0, 0, 0, 0, 0, 0, 0, 0],
    ];

    /**
     * @param array{0: int, 1: int} $start
     * @param array{0: int, 1: int} $end
     */
    #[DataProvider('provideCases')]
    public function testKnightMoves(array $start, array $end, int $expected): void
    {
        self::assertSame(
            $expected,
            Solution::knightMoves(self::$board, $start, $end)
        );
    }

    public static function provideCases(): array
    {
        return [
            'same square' => [[3, 3], [3, 3], 0],
            'single L-move' => [[0, 0], [1, 2], 1],
            'single L-move mirrored' => [[0, 0], [2, 1], 1],
            'corner to opposite corner' => [[0, 0], [7, 7], 6],
            'adjacent file same rank' => [[0, 0], [0, 1], 3],
            'two squares forward' => [[0, 0], [0, 2], 2],
            'knight from center short hop' => [[3, 3], [4, 5], 1],
            'near edge destination' => [[0, 0], [7, 0], 5],
            'mid-board to nearby' => [[4, 4], [5, 4], 3],
            'far side same color long path' => [[1, 1], [6, 6], 4],
            'edge to edge' => [[0, 3], [7, 3], 5],
            'minimal from a1-style corner' => [[7, 0], [0, 7], 6],
        ];
    }
}
