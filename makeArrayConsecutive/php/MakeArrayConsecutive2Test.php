<?php

declare(strict_types=1);

use MakeArrayConsecutive\Solution;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

final class MakeArrayConsecutive2Test extends TestCase
{
    #[DataProvider('provideCases')]
    public function testMakeArrayConsecutive2(array $args, int $expected): void
    {
        self::assertSame($expected, Solution::solution(...$args));
    }

    public static function provideCases(): array
    {
        return [
            'readme classic' => [[[6, 2, 3, 8]], 3],
            'gap at start' => [[[0, 3]], 2],
            'single statue' => [[[5]], 0],
            'every other missing' => [[[2, 4, 6]], 2],
            'already consecutive' => [[[1, 2, 3, 4, 5]], 0],
            'two adjacent' => [[[10, 11]], 0],
            'large range one gap' => [[[0, 1, 100]], 98],
            'unsorted input' => [[[9, 1, 5]], 6],
            'zero span' => [[[0, 2]], 1],
            'all zeros duplicate sizes conceptually excluded' => [[[0, 0, 1]], 0],
        ];
    }
}
