<?php

declare(strict_types=1);

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../tests/Support/FunctionLoader.php';

final class AlphabeticShiftTest extends TestCase
{
    public static function setUpBeforeClass(): void
    {
        FunctionLoader::load(__DIR__ . '/alphabetic_shift.php', 'alphabeticShift');
    }

    #[DataProvider('provideCases')]
    public function testAlphabeticShift(string $input, string $expected): void
    {
        self::assertSame($expected, alphabeticShift($input));
    }

    public static function provideCases(): array
    {
        return [
            ['crazy', 'dsbaz'],
            ['z', 'a'],
            ['abc', 'bcd'],
            ['zzzz', 'aaaa'],
            ['code', 'dpef'],
        ];
    }
}
