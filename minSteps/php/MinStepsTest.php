<?php

declare(strict_types=1);

use MinSteps\Solution;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

final class MinStepsTest extends TestCase
{
    #[DataProvider('provideCases')]
    public function testMinSteps(int $n, int $expected): void
    {
        self::assertSame($expected, Solution::solution($n));
    }

    public static function provideCases(): array
    {
        return [
            'negative target' => [-1, -1],
            'larger negative target' => [-100, -1],
            'zero target' => [0, 0],
            'one target' => [1, 1],
            'two target' => [2, 2],
            'three target' => [3, 3],
            'four target' => [4, 3],
            'five target' => [5, 4],
            'six target' => [6, 4],
            'seven target' => [7, 5],
            'original example eight' => [8, 4],
            'readme example ten' => [10, 5],
            'power of two' => [16, 5],
            'thirty-one target' => [31, 9],
            'one hundred target' => [100, 9],
        ];
    }
}
