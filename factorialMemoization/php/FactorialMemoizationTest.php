<?php

declare(strict_types=1);

use FactorialMemoization\Solution;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

final class FactorialMemoizationTest extends TestCase
{
    #[DataProvider('provideFactorials')]
    public function testCalculatesFactorial(int $n, int $expected): void
    {
        $memo = [];

        self::assertSame($expected, Solution::solution($n, $memo));
    }

    public static function provideFactorials(): array
    {
        return [
            'zero factorial' => [0, 1],
            'one factorial' => [1, 1],
            'two factorial' => [2, 2],
            'five factorial' => [5, 120],
            'ten factorial' => [10, 3_628_800],
            'twenty factorial' => [20, 2_432_902_008_176_640_000],
        ];
    }

    public function testStoresCalculatedValuesInMemo(): void
    {
        $memo = [];

        Solution::solution(5, $memo);

        self::assertSame([
            2 => 2,
            3 => 6,
            4 => 24,
            5 => 120,
        ], $memo);
    }

    public function testUsesExistingMemoizedValue(): void
    {
        $memo = [5 => 120];

        self::assertSame(720, Solution::solution(6, $memo));
        self::assertSame([5 => 120, 6 => 720], $memo);
    }

    public function testReturnsCachedResultWithoutRecalculation(): void
    {
        $memo = [8 => 40_320];

        self::assertSame(40_320, Solution::solution(8, $memo));
        self::assertSame([8 => 40_320], $memo);
    }

    public function testRejectsNegativeInput(): void
    {
        $memo = [];

        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Factorial is not defined for negative numbers.');

        Solution::solution(-1, $memo);
    }
}
