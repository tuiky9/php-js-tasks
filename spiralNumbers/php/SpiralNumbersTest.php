<?php

declare(strict_types=1);

use SpiralNumbers\Solution;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

final class SpiralNumbersTest extends TestCase
{
    #[DataProvider('provideCases')]
    public function testSpiralNumbers(array $args, array $expected): void
    {
        self::assertSame($expected, Solution::solution(...$args));
    }

    public static function provideCases(): array
    {
        return [
            'readme n equals 3' => [
                [3],
                [[1, 2, 3], [8, 9, 4], [7, 6, 5]],
            ],
            'n equals 4' => [
                [4],
                [
                    [1, 2, 3, 4],
                    [12, 13, 14, 5],
                    [11, 16, 15, 6],
                    [10, 9, 8, 7],
                ],
            ],
            'n equals 5' => [
                [5],
                [
                    [1, 2, 3, 4, 5],
                    [16, 17, 18, 19, 6],
                    [15, 24, 25, 20, 7],
                    [14, 23, 22, 21, 8],
                    [13, 12, 11, 10, 9],
                ],
            ],
        ];
    }
}
