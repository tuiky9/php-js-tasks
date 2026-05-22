<?php

declare(strict_types=1);

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../tests/Support/FunctionLoader.php';

final class IsDigitTest extends TestCase
{
    public static function setUpBeforeClass(): void
    {
        FunctionLoader::load(__DIR__ . '/php/is_digit.php', 'isDigit');
    }

    #[DataProvider('provideCases')]
    public function testIsDigit(array $args, mixed $expected): void
    {
        self::assertSame($expected, isDigit(...$args));
    }

    public static function provideCases(): array
    {
        return [
            [['0'], true],
            [['-'], false],
            [['o'], false],
            [['1'], true],
            [['9'], true],
        ];
    }
}
