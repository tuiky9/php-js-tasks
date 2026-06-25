<?php

declare(strict_types=1);

use DigitDegree\Solution;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

final class DigitDegreeTest extends TestCase
{
    #[DataProvider('provideCases')]
    public function testDigitDegree(array $args, mixed $expected): void
    {
        self::assertSame($expected, Solution::solution(...$args));
    }

    public static function provideCases(): array
    {
        return [
            [[5], 0],
            [[100], 1],
            [[91], 2],
            [[10], 1],
            [[999999999], 2],
        ];
    }
}
