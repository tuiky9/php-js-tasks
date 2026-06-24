<?php

declare(strict_types=1);

use AvoidObstacles\Solution;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

final class AvoidObstaclesTest extends TestCase
{
    #[DataProvider('provideCases')]
    public function testAvoidObstacles(array $args, mixed $expected): void
    {
        self::assertSame($expected, Solution::solution(...$args));
    }

    public static function provideCases(): array
    {
        return [
            [[[5, 3, 6, 7, 9]], 4],
            [[[2, 3, 5]], 4],
            [[[1, 2]], 3],
            [[[1000]], 3],
            [[[2, 4, 6, 8]], 5],
        ];
    }
}
