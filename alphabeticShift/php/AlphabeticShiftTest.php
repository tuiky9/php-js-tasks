<?php

declare(strict_types=1);

use AlphabeticShift\Solution;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

final class AlphabeticShiftTest extends TestCase
{
    #[DataProvider('provideCases')]
    public function testAlphabeticShift(string $input, string $expected): void
    {
        self::assertSame($expected, Solution::solution($input));
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
