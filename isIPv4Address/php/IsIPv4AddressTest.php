<?php

declare(strict_types=1);

use IsIPv4Address\Solution;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

final class IsIPv4AddressTest extends TestCase
{
    #[DataProvider('provideCases')]
    public function testIsIPv4Address(array $args, mixed $expected): void
    {
        self::assertSame($expected, Solution::solution(...$args));
    }

    public static function provideCases(): array
    {
        return [
            [['172.16.254.1'], true],
            [['172.316.254.1'], false],
            [['.254.255.0'], false],
            [['1.1.1.1a'], false],
            [['0.0.0.0'], true],
        ];
    }
}
