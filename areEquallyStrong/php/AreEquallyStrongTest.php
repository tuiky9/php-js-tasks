<?php

declare(strict_types=1);

use AreEquallyStrong\Solution;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

final class AreEquallyStrongTest extends TestCase
{
    #[DataProvider('provideCases')]
    public function testAreEquallyStrong(
        int $yourLeft,
        int $yourRight,
        int $friendsLeft,
        int $friendsRight,
        bool $expected
    ): void {
        self::assertSame($expected, Solution::solution($yourLeft, $yourRight, $friendsLeft, $friendsRight));
    }

    public static function provideCases(): array
    {
        return [
            [10, 15, 15, 10, true],
            [15, 10, 15, 9, false],
            [1, 1, 1, 1, true],
            [5, 7, 7, 5, true],
            [8, 9, 7, 10, false],
        ];
    }
}
