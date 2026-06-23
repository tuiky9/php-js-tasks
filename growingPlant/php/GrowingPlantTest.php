<?php

declare(strict_types=1);

use GrowingPlant\Solution;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

final class GrowingPlantTest extends TestCase
{
    #[DataProvider('provideCases')]
    public function testGrowingPlant(array $args, mixed $expected): void
    {
        self::assertSame($expected, Solution::solution(...$args));
    }

    public static function provideCases(): array
    {
        return [
            [[100, 10, 910], 10],
            [[10, 9, 4], 1],
            [[5, 2, 7], 2],
            [[3, 1, 10], 5],
            [[7, 3, 21], 5],
        ];
    }
}
