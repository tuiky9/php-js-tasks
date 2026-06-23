<?php

declare(strict_types=1);

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
use SecondaryDiagonalMinMax\Solution;

final class SecondaryDiagonalMinMaxTest extends TestCase
{
    #[DataProvider('provideCases')]
    public function testSolution(array $grid, array $expected): void
    {
        self::assertSame($expected, Solution::solution($grid));
    }

    public static function provideCases(): array
    {
        return [
            'readme 3x3 example' => [
                [
                    [1, 2, 3],
                    [4, 5, 6],
                    [7, 8, 9],
                ],
                [3, 7],
            ],
            'readme single cell' => [[[5]], [5, 5]],
            'readme empty grid' => [[], [null, null]],
            'readme 2x2 example' => [[[10, 20], [30, 40]], [20, 30]],

            'all equal on diagonal' => [
                [
                    [1, 2, 4],
                    [3, 4, 5],
                    [4, 6, 7],
                ],
                [4, 4],
            ],

            'negative values' => [
                [
                    [0, -1, -5],
                    [2, -3, 4],
                    [7, 6, 1],
                ],
                [-5, 7],
            ],

            '4x4 mixed' => [
                [
                    [1, 2, 3, 4],
                    [5, 6, 7, 8],
                    [9, 10, 11, 12],
                    [13, 14, 15, 16],
                ],
                [4, 13],
            ],

            'wide spread on diagonal' => [
                [
                    [100, 0, 0],
                    [0, 50, 0],
                    [0, 0, 1],
                ],
                [0, 50],
            ],
        ];
    }
}
