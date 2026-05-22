<?php

declare(strict_types=1);

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../tests/Support/FunctionLoader.php';

final class SumUpNumbersTest extends TestCase
{
    public static function setUpBeforeClass(): void
    {
        FunctionLoader::load(__DIR__ . '/php/sum_up_numbers.php', 'sumUpNumbers');
    }

    #[DataProvider('provideCases')]
    public function testSumUpNumbers(array $args, mixed $expected): void
    {
        self::assertSame($expected, sumUpNumbers(...$args));
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
