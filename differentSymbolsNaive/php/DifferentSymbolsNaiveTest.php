<?php

declare(strict_types=1);

use DifferentSymbolsNaive\Solution;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

final class DifferentSymbolsNaiveTest extends TestCase
{
    #[DataProvider('provideCases')]
    public function testDifferentSymbolsNaive(array $args, mixed $expected): void
    {
        self::assertSame($expected, Solution::solution(...$args));
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
