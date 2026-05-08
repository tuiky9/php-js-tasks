<?php

declare(strict_types=1);

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../tests/Support/FunctionLoader.php';

final class DifferentSymbolsNaiveTest extends TestCase
{
    public static function setUpBeforeClass(): void
    {
        FunctionLoader::load(__DIR__ . '/different_symbols_naive.php', 'differentSymbolsNaive');
    }

    #[DataProvider('provideCases')]
    public function testDifferentSymbolsNaive(array $args, mixed $expected): void
    {
        self::assertSame($expected, differentSymbolsNaive(...$args));
    }

    public static function provideCases(): array
    {
        return [
            [['cabca'], 3],
            [['cccccccc'], 1],
            [['abacabad'], 4],
            [[''], 0],
            [['abcdefghijklmnopqrstuvwxyz'], 26],
        ];
    }
}
