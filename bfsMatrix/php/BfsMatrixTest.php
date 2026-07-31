<?php

declare(strict_types=1);

use BfsMatrix\Solution;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

final class BfsMatrixTest extends TestCase
{
    /**
     * @param list<list<int>> $mat
     * @param array{0: int, 1: int} $start
     * @param array{0: int, 1: int} $end
     */
    #[DataProvider('provideCases')]
    public function testBfsMatrix(
        array $mat,
        array $start,
        array $end,
        int $expected
    ): void {
        self::assertSame($expected, Solution::bfsMatrix($mat, $start, $end));
    }

    public static function provideCases(): array
    {
        $readme = [
            [1, 1, 0, 1],
            [0, 1, 1, 1],
            [1, 0, 1, 0],
            [1, 1, 1, 1],
        ];

        return [
            'readme example' => [$readme, [0, 0], [3, 3], 6],
            'same start and end' => [$readme, [0, 0], [0, 0], 0],
            'adjacent cells' => [$readme, [0, 0], [0, 1], 1],
            'blocked destination' => [$readme, [0, 0], [0, 2], 0],
            'reachable bottom-left corner' => [$readme, [0, 0], [2, 0], 8],
            'single cell matrix' => [[[1]], [0, 0], [0, 0], 0],
            'straight corridor' => [
                [
                    [1, 1, 1, 1, 1],
                ],
                [0, 0],
                [0, 4],
                4,
            ],
            'must go around wall' => [
                [
                    [1, 0, 1],
                    [1, 0, 1],
                    [1, 1, 1],
                ],
                [0, 0],
                [0, 2],
                6,
            ],
            'open 2x2 grid' => [
                [
                    [1, 1],
                    [1, 1],
                ],
                [0, 0],
                [1, 1],
                2,
            ],
            'vertical only' => [
                [
                    [1],
                    [1],
                    [1],
                    [1],
                ],
                [0, 0],
                [3, 0],
                3,
            ],
            'empty matrix' => [[], [0, 0], [0, 0], 0],
            'maze with detour' => [
                [
                    [1, 1, 1, 0, 1],
                    [0, 0, 1, 0, 1],
                    [1, 1, 1, 1, 1],
                    [1, 0, 0, 0, 0],
                    [1, 1, 1, 1, 1],
                ],
                [0, 0],
                [4, 4],
                12,
            ],
            'end next to start below' => [
                [
                    [1, 0],
                    [1, 0],
                ],
                [0, 0],
                [1, 0],
                1,
            ],
            'fully blocked except start' => [
                [
                    [1, 0, 0],
                    [0, 0, 0],
                    [0, 0, 1],
                ],
                [0, 0],
                [2, 2],
                0,
            ],
        ];
    }
}
