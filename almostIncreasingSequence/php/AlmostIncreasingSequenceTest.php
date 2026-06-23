<?php

declare(strict_types=1);

use AlmostIncreasingSequence\Solution;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

final class AlmostIncreasingSequenceTest extends TestCase
{
    #[DataProvider('provideCases')]
    public function testAlmostIncreasingSequence(array $input, bool $expected): void
    {
        self::assertSame($expected, Solution::solution($input));
    }

    public static function provideCases(): array
    {
        return [
            [[1, 3, 2, 1], false],
            [[1, 3, 2], true],
            [[1, 2, 3, 4], true],
            [[10, 1, 2, 3, 4, 5], true],
            [[1, 1, 2, 3], true],
        ];
    }
}
