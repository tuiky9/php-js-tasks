<?php

declare(strict_types=1);

use MergeNSortedArrays\Solution;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

final class MergeNSortedArraysTest extends TestCase
{
    #[DataProvider('provideCases')]
    public function testMergeNSortedArrays(array $input, array $expected): void
    {
        self::assertSame($expected, Solution::solution($input));
    }

    public static function provideCases(): array
    {
        return [
            'test1 three interleaved arrays' => [
                [[1, 5, 9], [2, 3, 10], [4, 6, 8]],
                [1, 2, 3, 4, 5, 6, 8, 9, 10],
            ],
            'test2 disjoint positive ranges' => [
                [[-3, 10, 27], [32, 50, 78], [98, 100, 110]],
                [-3, 10, 27, 32, 50, 78, 98, 100, 110],
            ],
            'test3 mixed lengths' => [
                [[12, 15, 17, 20], [3, 7, 8, 10], [2, 9, 11, 30]],
                [2, 3, 7, 8, 9, 10, 11, 12, 15, 17, 20, 30],
            ],
            'test4 larger spread values' => [
                [[111, 125, 143, 145], [39, 128, 150, 160], [58, 130, 166, 198]],
                [39, 58, 111, 125, 128, 130, 143, 145, 150, 160, 166, 198],
            ],
            'test5 five single-element arrays' => [
                [[-5], [-4], [-3], [-2], [-1]],
                [-5, -4, -3, -2, -1],
            ],
            'test6 empty arrays mixed in' => [
                [[], [], [-3, -2, -1]],
                [-3, -2, -1],
            ],
            'test7 ascending singletons' => [
                [[1], [2], [3], [4], [5]],
                [1, 2, 3, 4, 5],
            ],
            'test8 uneven array lengths' => [
                [[10, 20, 30], [15, 25], [23, 24, 35]],
                [10, 15, 20, 23, 24, 25, 30, 35],
            ],
            'test9 negative sequences' => [
                [[-45, -40, -35], [-36, -32, -22], [-18, -9, -3]],
                [-45, -40, -36, -35, -32, -22, -18, -9, -3],
            ],
            'test10 gaps between batches' => [
                [[100, 200, 300, 400], [150, 250], [500, 600, 700]],
                [100, 150, 200, 250, 300, 400, 500, 600, 700],
            ],
            'test11 two arrays odds and evens' => [
                [[3, 5, 7, 9], [2, 4, 6, 8, 10]],
                [2, 3, 4, 5, 6, 7, 8, 9, 10],
            ],
            'test12 duplicate zeros across arrays' => [
                [[-1000, 0, 1000], [-500, 0, 500], [-50, 0, 50]],
                [-1000, -500, -50, 0, 0, 0, 50, 500, 1000],
            ],
            'test13 parallel arithmetic progressions' => [
                [[13, 26, 39], [14, 28, 42], [15, 30, 45]],
                [13, 14, 15, 26, 28, 30, 39, 42, 45],
            ],
        ];
    }

    public function testEmptyInput(): void
    {
        self::assertSame([], Solution::solution([]));
    }
}
