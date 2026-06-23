<?php

declare(strict_types=1);

use AllLongestStrings\Solution;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

final class AllLongestStringsTest extends TestCase
{
    #[DataProvider('provideCases')]
    public function testAllLongestStrings(array $input, array $expected): void
    {
        self::assertSame($expected, Solution::solution($input));
    }

    public static function provideCases(): array
    {
        return [
            [['aba', 'aa', 'ad', 'vcd', 'aba'], ['aba', 'vcd', 'aba']],
            [['a', 'bb', 'ccc', 'dd'], ['ccc']],
            [['same', 'size', 'test', 'best'], ['same', 'size', 'test', 'best']],
            [['x'], ['x']],
            [['long', 'longer', 'tiny', 'longer'], ['longer', 'longer']],
        ];
    }
}
