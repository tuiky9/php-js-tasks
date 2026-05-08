<?php

declare(strict_types=1);

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../tests/Support/FunctionLoader.php';

final class IsMAC48AddressTest extends TestCase
{
    public static function setUpBeforeClass(): void
    {
        FunctionLoader::load(__DIR__ . '/is_mac_48_address.php', 'isMAC48Address');
    }

    #[DataProvider('provideCases')]
    public function testIsMAC48Address(array $args, mixed $expected): void
    {
        self::assertSame($expected, isMAC48Address(...$args));
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
