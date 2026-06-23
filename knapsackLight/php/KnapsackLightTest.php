<?php

declare(strict_types=1);

use KnapsackLight\Solution;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

final class KnapsackLightTest extends TestCase
{
    #[DataProvider('provideCases')]
    public function testKnapsackLight(array $args, mixed $expected): void
    {
        self::assertSame($expected, Solution::solution(...$args));
    }

    public static function provideCases(): array
    {
        return [
            [[10, 5, 6, 4, 8], 10],
            [[10, 5, 6, 4, 9], 16],
            [[5, 3, 7, 4, 6], 7],
            [[5, 3, 7, 4, 2], 0],
            [[3, 1, 2, 2, 2], 3],
        ];
    }
}
