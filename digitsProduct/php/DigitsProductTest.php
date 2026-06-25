<?php

declare(strict_types=1);

use DigitsProduct\Solution;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

final class DigitsProductTest extends TestCase
{
    #[DataProvider('provideCases')]
    public function testDigitsProduct(array $args, mixed $expected): void
    {
        self::assertSame($expected, Solution::solution(...$args));
    }

    public static function provideCases(): array
    {
        return [
            [[12], 26],
            [[19], -1],
            [[1], 1],
            [[0], 10],
            [[150], 556],
        ];
    }
}
