<?php

declare(strict_types=1);

use CenturyFromYear\Solution;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

final class CenturyFromYearTest extends TestCase
{
    #[DataProvider('provideCases')]
    public function testCenturyFromYear(array $args, mixed $expected): void
    {
        self::assertSame($expected, Solution::solution(...$args));
    }

    public static function provideCases(): array
    {
        return [
            [[1905], 20],
            [[1700], 17],
            [[1], 1],
            [[2000], 20],
            [[2001], 21],
        ];
    }
}
