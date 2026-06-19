<?php

declare(strict_types=1);

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/php/merge_sorted_arrays.php';

final class MergeSortedArraysTest extends TestCase
{
    #[DataProvider('provideCases')]
    public function testMergeSortedArrays(array $arr1, array $arr2, array $expected): void
    {
        self::assertSame($expected, Solution::solution($arr1, $arr2));
    }

    public static function provideCases(): array
    {
        return [
            'readme example' => [
                [1, 3, 5, 7, 9],
                [2, 2, 3, 4, 6, 6],
                [1, 2, 2, 3, 3, 4, 5, 6, 6, 7, 9],
            ],
            'negative and positive mix' => [
                [-100, 0, 50, 100],
                [-75, -50, -25],
                [-100, -75, -50, -25, 0, 50, 100],
            ],
            'no overlap contiguous ranges' => [[1, 2, 3], [4, 5, 6], [1, 2, 3, 4, 5, 6]],
            'identical arrays' => [[1, 2, 3], [1, 2, 3], [1, 1, 2, 2, 3, 3]],
            'large negative gap' => [
                [-1000, -900, -800, -700],
                [-200, -100],
                [-1000, -900, -800, -700, -200, -100],
            ],
            'large positive gap' => [
                [100, 200, 300],
                [400, 500, 600, 700],
                [100, 200, 300, 400, 500, 600, 700],
            ],
            'single elements far apart' => [[-1000], [1000], [-1000, 1000]],
            'one short one long' => [[1], [1, 2, 3, 4, 5], [1, 1, 2, 3, 4, 5]],
        ];
    }
}
