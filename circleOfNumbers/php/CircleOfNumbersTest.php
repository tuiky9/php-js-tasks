<?php

declare(strict_types=1);

use CircleOfNumbers\Solution;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

final class CircleOfNumbersTest extends TestCase
{
    #[DataProvider('provideCases')]
    public function testCircleOfNumbers(array $args, mixed $expected): void
    {
        self::assertSame($expected, Solution::solution(...$args));
    }

    public static function provideCases(): array
    {
        return [
            [[10, 2], 7],
            [[10, 7], 2],
            [[4, 1], 3],
            [[6, 3], 0],
            [[2, 0], 1],
        ];
    }
}
