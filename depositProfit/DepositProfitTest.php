<?php

declare(strict_types=1);

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../tests/Support/FunctionLoader.php';

final class DepositProfitTest extends TestCase
{
    public static function setUpBeforeClass(): void
    {
        FunctionLoader::load(__DIR__ . '/php/deposit_profit.php', 'depositProfit');
    }

    #[DataProvider('provideCases')]
    public function testDepositProfit(array $args, mixed $expected): void
    {
        self::assertSame($expected, depositProfit(...$args));
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
