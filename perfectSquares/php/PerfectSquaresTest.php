<?php

declare(strict_types=1);

use PerfectSquares\Solution;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

final class PerfectSquaresTest extends TestCase
{
    #[DataProvider('provideCases')]
    public function testPerfectSquares(int $n, int $expected): void
    {
        self::assertSame($expected, Solution::solution($n));
    }

    public static function provideCases(): array
    {
        return [
            'one' => [1, 1],
            'two' => [2, 2],
            'three' => [3, 3],
            'exact square four' => [4, 1],
            'seven' => [7, 4],
            'readme twelve' => [12, 3],
            'original thirteen' => [13, 2],
            'exact square sixteen' => [16, 1],
            'eighteen' => [18, 2],
            'nineteen' => [19, 3],
            'exact square twenty five' => [25, 1],
            'forty three' => [43, 3],
            'exact square one hundred' => [100, 1],
        ];
    }
}
