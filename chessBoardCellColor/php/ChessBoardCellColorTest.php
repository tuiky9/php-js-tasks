<?php

declare(strict_types=1);

use ChessBoardCellColor\Solution;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

final class ChessBoardCellColorTest extends TestCase
{
    #[DataProvider('provideCases')]
    public function testChessBoardCellColor(array $args, mixed $expected): void
    {
        self::assertSame($expected, Solution::solution(...$args));
    }

    public static function provideCases(): array
    {
        return [
            [['A1', 'C3'], true],
            [['A1', 'H3'], false],
            [['D5', 'E6'], true],
            [['G4', 'C8'], true],
            [['B3', 'H7'], true],
        ];
    }
}
