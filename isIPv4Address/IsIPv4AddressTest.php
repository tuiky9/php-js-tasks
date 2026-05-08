<?php

declare(strict_types=1);

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../tests/Support/FunctionLoader.php';

final class IsIPv4AddressTest extends TestCase
{
    public static function setUpBeforeClass(): void
    {
        FunctionLoader::load(__DIR__ . '/is_ipv4_address.php', 'isIPv4Address');
    }

    #[DataProvider('provideCases')]
    public function testIsIPv4Address(array $args, mixed $expected): void
    {
        self::assertSame($expected, isIPv4Address(...$args));
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
