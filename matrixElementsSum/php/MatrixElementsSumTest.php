<?php

declare(strict_types=1);

use MatrixElementsSum\Solution;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

final class MatrixElementsSumTest extends TestCase
{
    #[DataProvider('provideCases')]
    public function testMatrixElementsSum(array $args, mixed $expected): void
    {
        self::assertSame($expected, Solution::solution(...$args));
    }

    public static function provideCases(): array
    {
        return [
            [[[[0, 1, 1, 2], [0, 5, 0, 0], [2, 0, 3, 3]]], 9],
            [[[[1, 1, 1, 0], [0, 5, 0, 1], [2, 1, 3, 10]]], 9],
            [[[[1]]], 1],
            [[[[0]]], 0],
            [[[[4, 0], [1, 1], [2, 2]]], 7],
        ];
    }
}
