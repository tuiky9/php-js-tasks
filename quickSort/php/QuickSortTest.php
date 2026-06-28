<?php

declare(strict_types=1);

use QuickSort\Solution;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

final class QuickSortTest extends TestCase
{
    #[DataProvider('provideCases')]
    public function testQuickSort(array $input, array $expected): void
    {
        self::assertSame($expected, Solution::solution($input));
    }

    public static function provideCases(): array
    {
        $mixed100 = array_merge(array_fill(0, 50, -10), array_fill(0, 50, 5));

        $shuffledStepPattern = [];
        for ($i = -500; $i < 500; $i += 3) {
            $shuffledStepPattern[] = $i;
        }
        for ($i = 500; $i > -500; $i -= 3) {
            $shuffledStepPattern[] = $i;
        }
        $sortedStepPattern = $shuffledStepPattern;
        sort($sortedStepPattern);

        return [
            'empty array' => [[], []],
            'single element' => [[42], [42]],
            'two elements' => [[2, 1], [1, 2]],
            'negative values' => [[-1, 2, -3], [-3, -1, 2]],
            'reverse sorted' => [[5, 4, 3, 2, 1], [1, 2, 3, 4, 5]],
            'four elements' => [[7, 8, 4, 2], [2, 4, 7, 8]],
            'readme style example' => [[9, 4, 7, 1, 5], [1, 4, 5, 7, 9]],
            'original example with duplicates' => [[3, 6, 8, 10, 1, 2, 1], [1, 1, 2, 3, 6, 8, 10]],
            'unsorted seven values' => [
                [15, 10, 45, 25, 36, 12, 27],
                [10, 12, 15, 25, 27, 36, 45],
            ],
            'partially ordered' => [[1, 4, 2, 8, 5, 7], [1, 2, 4, 5, 7, 8]],
            'interleaved near sorted' => [[1, 10, 2, 9, 3, 8], [1, 2, 3, 8, 9, 10]],
            'eight element shuffle' => [
                [6, 5, 3, 1, 8, 7, 2, 4],
                [1, 2, 3, 4, 5, 6, 7, 8],
            ],
            'all equal elements' => [array_fill(0, 50, 10), array_fill(0, 50, 10)],
            'two value blocks' => [$mixed100, $mixed100],
            'already sorted range' => [range(-50, 49), range(-50, 49)],
            'full symmetric range' => [range(-100, 100), range(-100, 100)],
            'large interleaved step pattern' => [$shuffledStepPattern, $sortedStepPattern],
            'already sorted small' => [[1, 2, 3, 4], [1, 2, 3, 4]],
            'interleaved positives and negatives' => [
                [3, -1, 4, -2, 0, 5, -3],
                [-3, -2, -1, 0, 3, 4, 5],
            ],
        ];
    }
}
