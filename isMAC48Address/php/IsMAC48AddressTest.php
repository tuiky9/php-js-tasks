<?php

declare(strict_types=1);

use IsMAC48Address\Solution;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

final class IsMAC48AddressTest extends TestCase
{
    #[DataProvider('provideCases')]
    public function testIsMAC48Address(array $args, mixed $expected): void
    {
        self::assertSame($expected, Solution::solution(...$args));
    }

    public static function provideCases(): array
    {
        return [
            [['00-1B-63-84-45-E6'], true],
            [['Z1-1B-63-84-45-E6'], false],
            [['not a MAC-48 address'], false],
            [['FF-FF-FF-FF-FF-FF'], true],
            [['00-00-00-00-00-0'], false],
        ];
    }
}
