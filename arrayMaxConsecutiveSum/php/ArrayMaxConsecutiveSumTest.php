<?php

declare(strict_types=1);

use ArrayMaxConsecutiveSum\Solution;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

final class ArrayMaxConsecutiveSumTest extends TestCase
{
    #[DataProvider('provideCases')]
    public function testArrayMaxConsecutiveSum(array $input, int $k, int $expected): void
    {
        self::assertSame($expected, Solution::solution($input, $k));
    }

    public static function provideCases(): array
    {
        return [
            [[2, 3, 5, 1, 6], 2, 8],
            [[1, 3, 2, 4], 3, 9],
            [[-1, -2, -3, -4], 2, -3],
            [[5, 5, 5, 5], 1, 5],
            [[10, -2, 3, 1, 2], 4, 12],
        ];
    }
}
