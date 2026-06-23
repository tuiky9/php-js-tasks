<?php

declare(strict_types=1);

use EvenDigitsOnly\Solution;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

final class EvenDigitsOnlyTest extends TestCase
{
    #[DataProvider('provideCases')]
    public function testEvenDigitsOnly(array $args, mixed $expected): void
    {
        self::assertSame($expected, Solution::solution(...$args));
    }

    public static function provideCases(): array
    {
        return [
            [[248622], true],
            [[642386], false],
            [[0], true],
            [[8], true],
            [[13579], false],
        ];
    }
}
