<?php

declare(strict_types=1);

use MergeSort\Solution;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

final class MergeSortTest extends TestCase
{
    #[DataProvider('provideCases')]
    public function testMergeSort(array $input, array $expected): void
    {
        self::assertSame($expected, Solution::solution($input));
    }

    public static function provideCases(): array
    {
        $descending201 = [];
        $ascending201 = [];
        for ($i = 0; $i < 201; $i++) {
            $descending201[] = 100 - $i;
            $ascending201[] = -100 + $i;
        }

        return [
            'mixed positive and negative' => [
                [10, 3, 2, 8, -1, 5, 1],
                [-1, 1, 2, 3, 5, 8, 10],
            ],
            'mixed large values' => [
                [100, -50, 200, -150, 50, -100],
                [-150, -100, -50, 50, 100, 200],
            ],
            'many equal elements' => [
                array_fill(0, 500, 50),
                array_fill(0, 500, 50),
            ],
            'sorted extremes' => [
                [-1000, -999, -998, 998, 999, 1000],
                [-1000, -999, -998, 998, 999, 1000],
            ],
            'two hundred one descending values' => [$descending201, $ascending201],
            'single element' => [[1], [1]],
            'grouped duplicates' => [
                [-1, -1, -1, 1, 1, 1],
                [-1, -1, -1, 1, 1, 1],
            ],
            'reverse sorted' => [[5, 4, 3, 2, 1], [1, 2, 3, 4, 5]],
            'all zeros' => [[0, 0, 0, 0, 0], [0, 0, 0, 0, 0]],
            'unsorted with duplicates' => [
                [2, 3, 6, 2, 7, 3, 9],
                [2, 2, 3, 3, 6, 7, 9],
            ],
            'empty array' => [[], []],
            'already sorted' => [[1, 2, 3, 4, 5], [1, 2, 3, 4, 5]],
            'two elements' => [[2, 1], [1, 2]],
            'interleaved positives and negatives' => [
                [3, -1, 4, -2, 0, 5, -3],
                [-3, -2, -1, 0, 3, 4, 5],
            ],
        ];
    }
}
