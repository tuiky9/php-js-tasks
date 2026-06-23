<?php

declare(strict_types=1);

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
use ShapeArea\Solution;

final class ShapeAreaTest extends TestCase
{
    #[DataProvider('provideCases')]
    public function testShapeArea(array $args, int $expected): void
    {
        self::assertSame($expected, Solution::solution(...$args));
    }

    public static function provideCases(): array
    {
        return [
            'n equals 1' => [[1], 1],
            'n equals 2' => [[2], 5],
            'n equals 3' => [[3], 13],
            'n equals 4' => [[4], 25],
            'n equals 5' => [[5], 41],
            'n equals 6' => [[6], 61],
            'n equals 10' => [[10], 181],
            'n equals 100' => [[100], 19801],
            'formula check 7' => [[7], 7 * 7 + 6 * 6],
            'formula check 8' => [[8], 8 * 8 + 7 * 7],
            'formula check 9' => [[9], 9 * 9 + 8 * 8],
        ];
    }
}
