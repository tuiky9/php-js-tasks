<?php

declare(strict_types=1);

use BishopAndPawn\Solution;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

final class BishopAndPawnTest extends TestCase
{
    #[DataProvider('provideCases')]
    public function testBishopAndPawn(array $args, mixed $expected): void
    {
        self::assertSame($expected, Solution::solution(...$args));
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
