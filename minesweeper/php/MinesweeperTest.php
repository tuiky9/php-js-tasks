<?php

declare(strict_types=1);

use Minesweeper\Solution;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

final class MinesweeperTest extends TestCase
{
    #[DataProvider('provideCases')]
    public function testMinesweeper(array $args, array $expected): void
    {
        self::assertSame($expected, Solution::solution(...$args));
    }

    public static function provideCases(): array
    {
        return [
            'readme example' => [
                [[[true, false, false], [false, true, false], [false, false, false]]],
                [[1, 2, 1], [2, 1, 1], [1, 1, 1]],
            ],
            'all mines' => [
                [[[true, true], [true, true]]],
                [[3, 3], [3, 3]],
            ],
            'no mines' => [
                [[[false, false], [false, false]]],
                [[0, 0], [0, 0]],
            ],
            'single mine in corner' => [
                [[[true, false], [false, false]]],
                [[0, 1], [1, 1]],
            ],
            'rectangular board' => [
                [[[false, true, false], [false, false, true]]],
                [[1, 1, 2], [1, 2, 1]],
            ],
        ];
    }
}
