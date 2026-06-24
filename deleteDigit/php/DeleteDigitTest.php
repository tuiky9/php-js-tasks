<?php

declare(strict_types=1);

use DeleteDigit\Solution;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

final class DeleteDigitTest extends TestCase
{
    #[DataProvider('provideCases')]
    public function testDeleteDigit(array $args, mixed $expected): void
    {
        self::assertSame($expected, Solution::solution(...$args));
    }

    public static function provideCases(): array
    {
        return [
            [[152], 52],
            [[1001], 101],
            [[10], 1],
            [[222], 22],
            [[890], 90],
        ];
    }
}
