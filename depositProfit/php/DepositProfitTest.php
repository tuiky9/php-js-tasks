<?php

declare(strict_types=1);

use DepositProfit\Solution;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

final class DepositProfitTest extends TestCase
{
    #[DataProvider('provideCases')]
    public function testDepositProfit(array $args, mixed $expected): void
    {
        self::assertSame($expected, Solution::solution(...$args));
    }

    public static function provideCases(): array
    {
        return [
            [[100, 20, 170], 3],
            [[100, 1, 101], 1],
            [[1, 100, 64], 6],
            [[100, 10, 1000], 25],
            [[50, 25, 100], 4],
        ];
    }
}
