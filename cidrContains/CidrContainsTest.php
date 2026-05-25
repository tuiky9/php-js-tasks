<?php

declare(strict_types=1);

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../tests/Support/FunctionLoader.php';

final class CidrContainsTest extends TestCase
{
    public static function setUpBeforeClass(): void
    {
        FunctionLoader::load(__DIR__ . '/php/cidr_contains.php', 'cidrContains');
    }

    #[DataProvider('provideCases')]
    public function testCidrContains(string $ip, string $cidr, bool $expected): void
    {
        self::assertSame($expected, cidrContains($ip, $cidr));
    }

    public static function provideCases(): array
    {
        return [
            'readme /24 inside' => ['192.168.0.42', '192.168.0.0/24', true],
            'readme /24 outside next octet' => ['192.168.1.1', '192.168.0.0/24', false],
            'readme /8 inside' => ['10.255.1.2', '10.0.0.0/8', true],
            'readme /8 outside' => ['11.0.0.1', '10.0.0.0/8', false],
            'readme /32 exact' => ['1.1.1.1', '1.1.1.1/32', true],
            'readme /32 off by one' => ['1.1.1.2', '1.1.1.1/32', false],
            'readme /0 matches all' => ['8.8.8.8', '0.0.0.0/0', true],

            'network address in block' => ['192.168.0.0', '192.168.0.0/24', true],
            'broadcast in /24' => ['192.168.0.255', '192.168.0.0/24', true],
            'last host in /24' => ['192.168.0.254', '192.168.0.0/24', true],

            '/12 inside upper bound' => ['172.16.255.255', '172.16.0.0/12', true],
            '/12 last address in block' => ['172.31.255.255', '172.16.0.0/12', true],
            '/12 outside next block' => ['172.32.0.0', '172.16.0.0/12', false],
            '/12 at lower edge' => ['172.16.0.0', '172.16.0.0/12', true],

            '/16 same third octet' => ['10.0.255.255', '10.0.0.0/16', true],
            '/16 different second octet' => ['10.1.0.0', '10.0.0.0/16', false],

            'loopback /8' => ['127.0.0.1', '127.0.0.0/8', true],
            'loopback outside /8' => ['128.0.0.1', '127.0.0.0/8', false],

            '/30 small subnet inside' => ['203.0.113.2', '203.0.113.0/30', true],
            '/30 small subnet outside' => ['203.0.113.4', '203.0.113.0/30', false],

            '255.255.255.255 /32' => ['255.255.255.255', '255.255.255.255/32', true],
            '0.0.0.0 /32' => ['0.0.0.0', '0.0.0.0/32', true],
        ];
    }
}
