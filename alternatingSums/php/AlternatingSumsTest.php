<?php

declare(strict_types=1);

use AlternatingSums\Solution;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

final class AlternatingSumsTest extends TestCase
{
    #[DataProvider('provideCases')]
    public function testAlternatingSums(array $input, array $expected): void
    {
        self::assertSame($expected, Solution::solution($input));
    }

    public static function provideCases(): array
    {
        return [
            [[50, 60, 60, 45, 70], [180, 105]],
            [[100], [100, 0]],
            [[1, 2, 3, 4, 5, 6], [9, 12]],
            [[10, 10, 10, 10], [20, 20]],
            [[7, 3, 5], [12, 3]],
        ];
    }
}
