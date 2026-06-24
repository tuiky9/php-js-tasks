<?php

declare(strict_types=1);

use ChessKnight\Solution;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

final class ChessKnightTest extends TestCase
{
    #[DataProvider('provideCases')]
    public function testChessKnight(array $args, mixed $expected): void
    {
        self::assertSame($expected, Solution::solution(...$args));
    }

    public static function provideCases(): array
    {
        return [
            [['a1'], 2],
            [['c2'], 6],
            [['d4'], 8],
            [['h8'], 2],
            [['b1'], 3],
        ];
    }
}
