<?php

declare(strict_types=1);

use DifferentSquares\Solution;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

final class DifferentSquaresTest extends TestCase
{
    #[DataProvider('provideCases')]
    public function testDifferentSquares(array $args, mixed $expected): void
    {
        self::assertSame($expected, Solution::solution(...$args));
    }

    public static function provideCases(): array
    {
        return [
            [[[[1, 2, 1], [2, 2, 2], [2, 2, 2], [1, 2, 3], [2, 2, 1]]], 6],
            [[[[1, 2], [3, 4]]], 1],
            [[[[1]]], 0],
            [[[[1, 1, 1], [1, 1, 1]]], 1],
            [[[[0, 1, 2], [3, 4, 5], [6, 7, 8]]], 4],
        ];
    }
}
