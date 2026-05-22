<?php

declare(strict_types=1);

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../tests/Support/FunctionLoader.php';

final class ChessBoardCellColorTest extends TestCase
{
    public static function setUpBeforeClass(): void
    {
        FunctionLoader::load(__DIR__ . '/php/chess_board_cell_color.php', 'chessBoardCellColor');
    }

    #[DataProvider('provideCases')]
    public function testChessBoardCellColor(array $args, mixed $expected): void
    {
        self::assertSame($expected, chessBoardCellColor(...$args));
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
