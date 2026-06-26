<?php

declare(strict_types=1);

use Sudoku\Solution;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

final class SudokuTest extends TestCase
{
    #[DataProvider('provideCases')]
    public function testSudoku(array $args, bool $expected): void
    {
        self::assertSame($expected, Solution::solution(...$args));
    }

    public static function provideCases(): array
    {
        $validGrid = [
            [1, 3, 2, 5, 4, 6, 9, 8, 7],
            [4, 6, 5, 8, 7, 9, 3, 2, 1],
            [7, 9, 8, 2, 1, 3, 6, 5, 4],
            [9, 2, 1, 4, 3, 5, 8, 7, 6],
            [3, 5, 4, 7, 6, 8, 2, 1, 9],
            [6, 8, 7, 1, 9, 2, 5, 4, 3],
            [5, 7, 6, 9, 8, 1, 4, 3, 2],
            [2, 4, 3, 6, 5, 7, 1, 9, 8],
            [8, 1, 9, 3, 2, 4, 7, 6, 5],
        ];

        $invalidGrid = [
            [1, 3, 2, 5, 4, 6, 9, 2, 7],
            [4, 6, 5, 8, 7, 9, 3, 8, 1],
            [7, 9, 8, 2, 1, 3, 6, 5, 4],
            [9, 2, 1, 4, 3, 5, 8, 7, 6],
            [3, 5, 4, 7, 6, 8, 2, 1, 9],
            [6, 8, 7, 1, 9, 2, 5, 4, 3],
            [5, 7, 6, 9, 8, 1, 4, 3, 2],
            [2, 4, 3, 6, 5, 7, 1, 9, 8],
            [8, 1, 9, 3, 2, 4, 7, 6, 5],
        ];

        $invalidRow = $validGrid;
        $invalidRow[0][0] = 2;

        return [
            'readme valid grid' => [[$validGrid], true],
            'readme invalid grid' => [[$invalidGrid], false],
            'duplicate in first row' => [[$invalidRow], false],
        ];
    }
}
