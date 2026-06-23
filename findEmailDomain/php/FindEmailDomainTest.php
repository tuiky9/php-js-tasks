<?php

declare(strict_types=1);

use FindEmailDomain\Solution;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

final class FindEmailDomainTest extends TestCase
{
    #[DataProvider('provideCases')]
    public function testFindEmailDomain(array $args, mixed $expected): void
    {
        self::assertSame($expected, Solution::solution(...$args));
    }

    public static function provideCases(): array
    {
        return [
            [['prettyandsimple@example.com'], 'example.com'],
            [['fully-qualified-domain@google.com'], 'google.com'],
            [['someaddress@yandex.ru'], 'yandex.ru'],
            [['"very.unusual.@.unusual.com"@usual.com'], 'usual.com'],
            [['admin@mailserver2'], 'mailserver2'],
        ];
    }
}
