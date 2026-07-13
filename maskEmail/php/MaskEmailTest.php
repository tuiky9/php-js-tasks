<?php

declare(strict_types=1);

use MaskEmail\Solution;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

final class MaskEmailTest extends TestCase
{
    #[DataProvider('provideValidCases')]
    public function testMaskEmailValid(array $args, string $expected): void
    {
        self::assertSame($expected, Solution::solution(...$args));
    }

    #[DataProvider('provideInvalidCases')]
    public function testMaskEmailInvalid(array $args): void
    {
        self::assertFalse(Solution::solution(...$args));
    }

    public static function provideValidCases(): array
    {
        return [
            'readme example' => [['jhon.doe@example.com'], 'jh***@example.com'],
            'long local part' => [['alice@company.org'], 'al***@company.org'],
            'two character local' => [['ab@test.io'], 'ab***@test.io'],
            'single character local' => [['a@example.co'], 'a***@example.co'],
            'subdomain domain' => [['dev.team@mail.example.net'], 'de***@mail.example.net'],
            'digits in local' => [['user123@service.com'], 'us***@service.com'],
            'underscores and dots' => [['my_name.here@site.co.uk'], 'my***@site.co.uk'],
            'short domain label' => [['longname@example.io'], 'lo***@example.io'],
            'three character local' => [['bob@corp.com'], 'bo***@corp.com'],
        ];
    }

    public static function provideInvalidCases(): array
    {
        return [
            'empty string' => [['']],
            'missing at sign' => [['plainaddress']],
            'missing domain' => [['user@']],
            'missing local part' => [['@example.com']],
            'spaces in address' => [['user name@example.com']],
            'double at sign' => [['user@@example.com']],
            'domain without tld' => [['user@domain']],
            'only special characters' => [['@@@']],
        ];
    }
}
