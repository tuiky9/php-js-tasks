<?php

declare(strict_types=1);

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
use SortByHeight\Solution;

final class SortByHeightTest extends TestCase
{
    #[DataProvider('provideCases')]
    public function testSortByHeight(array $args, array $expected): void
    {
        self::assertSame($expected, Solution::solution(...$args));
    }

    public static function provideCases(): array
    {
        return [
            'readme example' => [
                [[-1, 150, 190, 170, -1, -1, 160, 180]],
                [-1, 150, 160, 170, -1, -1, 180, 190],
            ],
            'only trees' => [
                [[-1, -1, -1, -1, -1]],
                [-1, -1, -1, -1, -1],
            ],
            'no trees' => [
                [[4, 2, 7, 3]],
                [2, 3, 4, 7],
            ],
            'trees at ends' => [
                [[-1, 2, -1]],
                [-1, 2, -1],
            ],
            'single person' => [
                [[180]],
                [180],
            ],
            'two people one tree between' => [
                [[190, -1, 170]],
                [170, -1, 190],
            ],
            'equal heights' => [
                [[5, -1, 5, 5]],
                [5, -1, 5, 5],
            ],
            'strictly increasing already' => [
                [[-1, 1, 2, -1, 3]],
                [-1, 1, 2, -1, 3],
            ],
            'reverse order' => [
                [[-1, 9, 1]],
                [-1, 1, 9],
            ],
            'multiple gaps' => [
                [[50, -1, -1, 10, 30]],
                [10, -1, -1, 30, 50],
            ],
        ];
    }
}
