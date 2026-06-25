<?php

declare(strict_types=1);

use InsertionSort\Solution;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

final class InsertionSortTest extends TestCase
{
    #[DataProvider('provideCases')]
    public function testInsertionSort(array $input, array $expected): void
    {
        self::assertSame($expected, Solution::solution($input));
    }

    public static function provideCases(): array
    {
        return [
            'mixed positive values' => [[5, 2, 4, 6, 1, 3], [1, 2, 3, 4, 5, 6]],
            'reverse sorted' => [[4, 3, 2, 1], [1, 2, 3, 4]],
            'all zeros' => [[0, 0, 0, 0], [0, 0, 0, 0]],
            'negative values' => [[-50, -75, -25, -100], [-100, -75, -50, -25]],
            'reverse negative values' => [[-1, -2, -3, -4, -5, -6], [-6, -5, -4, -3, -2, -1]],
            'larger random set' => [
                [450, 325, 765, 985, 254, 754, 908, 623],
                [254, 325, 450, 623, 754, 765, 908, 985],
            ],
            'single element' => [[1], [1]],
            'two elements' => [[2, 1], [1, 2]],
            'mixed signs' => [[-1000, 1000, 0], [-1000, 0, 1000]],
            'long mixed set' => [
                [234, 678, 348, 987, 432, 764, 985, 543, 456, 654, 890, 10],
                [10, 234, 348, 432, 456, 543, 654, 678, 764, 890, 985, 987],
            ],
            'near sorted descending' => [
                [1000, 999, 998, 997, 996, 995, 994, 993],
                [993, 994, 995, 996, 997, 998, 999, 1000],
            ],
            'duplicates with mixed signs' => [
                [1000, -1000, 1000, -1000, 1000],
                [-1000, -1000, 1000, 1000, 1000],
            ],
            'many duplicates' => [
                [5, 2, 4, 6, 1, 2, 5, 6, 4, 7, 8, 9, 0, 3, 2, 1],
                [0, 1, 1, 2, 2, 2, 3, 4, 4, 5, 5, 6, 6, 7, 8, 9],
            ],
            'empty array' => [[], []],
        ];
    }
}
