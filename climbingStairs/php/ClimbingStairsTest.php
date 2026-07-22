<?php

declare(strict_types=1);

use ClimbingStairs\Solution;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

final class ClimbingStairsTest extends TestCase
{
    #[DataProvider('provideCases')]
    public function testClimbingStairs(int $n, int $expected): void
    {
        self::assertSame($expected, Solution::solution($n));
    }

    public static function provideCases(): array
    {
        return [
            'zero stairs' => [0, 1],
            'one stair' => [1, 1],
            'two stairs' => [2, 2],
            'three stairs' => [3, 3],
            'readme four stairs' => [4, 5],
            'five stairs' => [5, 8],
            'ten stairs' => [10, 89],
            'twenty stairs' => [20, 10_946],
            'forty-five stairs' => [45, 1_836_311_903],
        ];
    }

    public function testRejectsNegativeNumberOfStairs(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('The number of stairs cannot be negative.');

        Solution::solution(-1);
    }
}
