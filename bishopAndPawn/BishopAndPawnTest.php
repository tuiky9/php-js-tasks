<?php

declare(strict_types=1);

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../tests/Support/FunctionLoader.php';

final class BishopAndPawnTest extends TestCase
{
    public static function setUpBeforeClass(): void
    {
        FunctionLoader::load(__DIR__ . '/php/bishop_and_pawn.php', 'bishopAndPawn');
    }

    #[DataProvider('provideCases')]
    public function testBishopAndPawn(array $args, mixed $expected): void
    {
        self::assertSame($expected, bishopAndPawn(...$args));
    }

    public static function provideCases(): array
    {
        return [
            [['a1', 'c3'], true],
            [['h1', 'h3'], false],
            [['f1', 'a6'], true],
            [['g1', 'f3'], false],
            [['c1', 'f4'], true],
        ];
    }
}
