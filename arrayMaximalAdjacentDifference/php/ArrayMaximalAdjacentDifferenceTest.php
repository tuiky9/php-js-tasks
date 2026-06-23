<?php

declare(strict_types=1);

use ArrayMaximalAdjacentDifference\Solution;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

final class ArrayMaximalAdjacentDifferenceTest extends TestCase
{
    #[DataProvider('provideCases')]
    public function testArrayMaximalAdjacentDifference(array $args, mixed $expected): void
    {
        self::assertSame($expected, Solution::solution(...$args));
    }

    public static function provideCases(): array
    {
        return [
            [[[2, 4, 1, 0]], 3],
            [[[1, 1, 1, 1]], 0],
            [[[-1, 4, 10, 3, -2]], 7],
            [[[10, -10, 10, -10]], 20],
            [[[5, 11, 2, 17]], 15],
        ];
    }
}
