<?php

declare(strict_types=1);

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../tests/Support/FunctionLoader.php';

final class FindEmailDomainTest extends TestCase
{
    public static function setUpBeforeClass(): void
    {
        FunctionLoader::load(__DIR__ . '/find_email_domain.php', 'findEmailDomain');
    }

    #[DataProvider('provideCases')]
    public function testFindEmailDomain(array $args, mixed $expected): void
    {
        self::assertSame($expected, findEmailDomain(...$args));
    }

    public static function provideCases(): array
    {
        return [
            [['prettyandsimple@example.com'], 'example.com'],
            [['fully-qualified-domain@codesignal.com'], 'codesignal.com'],
            [['someaddress@yandex.ru'], 'yandex.ru'],
            [['"very.unusual.@.unusual.com"@usual.com'], 'usual.com'],
            [['admin@mailserver2'], 'mailserver2'],
        ];
    }
}
