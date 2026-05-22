<?php

declare(strict_types=1);

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../tests/Support/FunctionLoader.php';

final class IsBeautifulStringTest extends TestCase
{
    public static function setUpBeforeClass(): void
    {
        FunctionLoader::load(__DIR__ . '/php/is_beautiful_string.php', 'isBeautifulString');
    }

    #[DataProvider('provideCases')]
    public function testIsBeautifulString(array $args, mixed $expected): void
    {
        self::assertSame($expected, isBeautifulString(...$args));
    }

    public static function provideCases(): array
    {
        return [
            [['bbbaacdafe'], true],
            [['aabbb'], false],
            [['bbc'], false],
            [[''], true],
            [['abcdefghijklmnopqrstuvwxyz'], true],
        ];
    }
}
