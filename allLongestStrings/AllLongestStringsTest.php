<?php

declare(strict_types=1);

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../tests/Support/FunctionLoader.php';

final class AllLongestStringsTest extends TestCase
{
    public static function setUpBeforeClass(): void
    {
        FunctionLoader::load(__DIR__ . '/all_longest_strings.php', 'allLongestStrings');
    }

    #[DataProvider('provideCases')]
    public function testAllLongestStrings(array $input, array $expected): void
    {
        self::assertSame($expected, allLongestStrings($input));
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
