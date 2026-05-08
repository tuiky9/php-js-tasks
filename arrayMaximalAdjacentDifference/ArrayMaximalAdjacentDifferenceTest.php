<?php

declare(strict_types=1);

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../tests/Support/FunctionLoader.php';

final class ArrayMaximalAdjacentDifferenceTest extends TestCase
{
    public static function setUpBeforeClass(): void
    {
        FunctionLoader::load(__DIR__ . '/array_maximal_adjacent_diffrence.php', 'arrayMaximalAdjacentDifference');
    }

    #[DataProvider('provideCases')]
    public function testArrayMaximalAdjacentDifference(array $args, mixed $expected): void
    {
        self::assertSame($expected, arrayMaximalAdjacentDifference(...$args));
    }

    public static function provideCases(): array
    {
        return [
            [[[2, 4, 1, 0]], 3],
            [[[1, 1, 1, 1]], 0],
            [[[-1, 4, 10, 3, -2]], 9],
            [[[10, -10, 10, -10]], 20],
            [[[5, 11, 2, 17]], 15],
        ];
    }
}
