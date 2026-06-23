<?php

declare(strict_types=1);

use ArrayReplace\Solution;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

final class ArrayReplaceTest extends TestCase
{
    #[DataProvider('provideCases')]
    public function testArrayReplace(array $args, mixed $expected): void
    {
        self::assertSame($expected, Solution::solution(...$args));
    }

    public static function provideCases(): array
    {
        return [
            [[[1, 2, 1], 1, 3], [3, 2, 3]],
            [[[1, 2, 3], 4, 0], [1, 2, 3]],
            [[[5, 5, 5], 5, 1], [1, 1, 1]],
            [[[0, -1, 0], 0, 9], [9, -1, 9]],
            [[[2, 3, 2, 3], 3, 7], [2, 7, 2, 7]],
        ];
    }
}
