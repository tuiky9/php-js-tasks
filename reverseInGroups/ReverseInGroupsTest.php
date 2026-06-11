<?php

declare(strict_types=1);

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/php/reverse_in_groups.php';

final class ReverseInGroupsTest extends TestCase
{
    #[DataProvider('provideCases')]
    public function testReverseInGroups(array $numbers, int $k, array $expected): void
    {
        self::assertSame($expected, Solution::solution($numbers, $k));
    }

    public static function provideCases(): array
    {
        return [
            'readme full example k3' => [
                [1, 2, 3, 4, 5, 6, 7, 8, 9, 10],
                3,
                [3, 2, 1, 6, 5, 4, 9, 8, 7, 10],
            ],
            'partial last group of one' => [[1, 2, 3, 4, 5, 6, 7], 3, [3, 2, 1, 6, 5, 4, 7]],
            'single element' => [[1], 1, [1]],
            'two elements full group' => [[2, 3], 2, [3, 2]],
            'large k with partial tail' => [[10, 20, 30, 40, 50, 60, 70], 5, [50, 40, 30, 20, 10, 70, 60]],
            'negative values' => [[-7, -6, -5, -4, -3, -2, -1], 4, [-4, -5, -6, -7, -1, -2, -3]],
            'k equals array length' => [[10, 20, 30, 40, 50, 60, 70], 10, [70, 60, 50, 40, 30, 20, 10]],
            'alternating signs pairs' => [[-100, 100, -100, 100, -100], 2, [100, -100, 100, -100, -100]],
            'k larger than half length' => [[1, 2, 3, 4, 5, 6, 7, 8, 9, 10], 7, [7, 6, 5, 4, 3, 2, 1, 10, 9, 8]],
            'k equals one unchanged order' => [[1, 2, 3, 4, 5, 6], 1, [1, 2, 3, 4, 5, 6]],

            'empty array' => [[], 3, []],
            'exact multiple of k no singleton tail' => [[1, 2, 3, 4, 5, 6], 3, [3, 2, 1, 6, 5, 4]],
            'partial last group of two' => [[1, 2, 3, 4, 5], 3, [3, 2, 1, 5, 4]],
            'all same values' => [[5, 5, 5, 5], 2, [5, 5, 5, 5]],
            'zeros' => [[0, 0, 0], 2, [0, 0, 0]],
            'four elements k2' => [[1, 2, 3, 4], 2, [2, 1, 4, 3]],
        ];
    }

    public function testInputNotMutated(): void
    {
        $numbers = [1, 2, 3, 4, 5];
        $copy = $numbers;

        Solution::solution($numbers, 2);

        self::assertSame($copy, $numbers);
    }
}
