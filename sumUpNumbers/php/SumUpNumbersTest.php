<?php

declare(strict_types=1);

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
use SumUpNumbers\Solution;

final class SumUpNumbersTest extends TestCase
{
    #[DataProvider('provideCases')]
    public function testSumUpNumbers(array $args, mixed $expected): void
    {
        self::assertSame($expected, Solution::solution(...$args));
    }

    public static function provideCases(): array
    {
        return [
            [['2 apples, 12 oranges'], 14],
            [['123450'], 123450],
            [['Your payment method is invalid'], 0],
            [['a1b2c3'], 6],
            [['100 and 200'], 300],
        ];
    }
}
