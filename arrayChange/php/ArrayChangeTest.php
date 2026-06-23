<?php

declare(strict_types=1);

use ArrayChange\Solution;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

final class ArrayChangeTest extends TestCase
{
    #[DataProvider('provideCases')]
    public function testArrayChange(array $input, int $expected): void
    {
        self::assertSame($expected, Solution::solution($input));
    }

    public static function provideCases(): array
    {
        return [
            [[1, 1, 1], 3],
            [[-1000, 0, -2, 0], 5],
            [[1, 2, 3], 0],
            [[3, 2, 1], 6],
            [[2, 2, 2, 2], 6],
        ];
    }
}
