<?php

declare(strict_types=1);

use AbsoluteValuesSumMinimization\Solution;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

final class AbsoluteValuesSumMinimizationTest extends TestCase
{
    #[DataProvider('provideCases')]
    public function testAbsoluteValuesSumMinimization(array $input, int $expected): void
    {
        self::assertSame($expected, Solution::solution($input));
    }

    public static function provideCases(): array
    {
        return [
            [[2, 4, 7], 4],
            [[2, 3], 2],
            [[-10, -3, 0, 5, 9], 0],
            [[1], 1],
            [[1, 1, 1, 1, 2], 1],
            [[1, 2, 145, 146, 2, 1], 145],
        ];
    }
}
