<?php

declare(strict_types=1);

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../tests/Support/FunctionLoader.php';

final class ElectionsWinnersTest extends TestCase
{
    public static function setUpBeforeClass(): void
    {
        FunctionLoader::load(__DIR__ . '/elections_winners.php', 'electionsWinners');
    }

    #[DataProvider('provideCases')]
    public function testElectionsWinners(array $args, mixed $expected): void
    {
        self::assertSame($expected, electionsWinners(...$args));
    }

    public static function provideCases(): array
    {
        return [
            [[[2, 3, 5, 2], 3], 2],
            [[[1, 3, 3, 1, 1], 0], 0],
            [[[5, 1, 3, 4, 1], 0], 1],
            [[[1, 1, 1, 1], 1], 4],
            [[[10], 0], 1],
        ];
    }
}
