<?php

declare(strict_types=1);

use ElectionsWinners\Solution;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

final class ElectionsWinnersTest extends TestCase
{
    #[DataProvider('provideCases')]
    public function testElectionsWinners(array $args, mixed $expected): void
    {
        self::assertSame($expected, Solution::solution(...$args));
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
