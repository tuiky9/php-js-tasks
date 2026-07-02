<?php

declare(strict_types=1);

use RemoveDuplicates\ListNode;
use RemoveDuplicates\Solution;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

final class RemoveDuplicatesTest extends TestCase
{
    #[DataProvider('provideCases')]
    public function testRemoveDuplicates(array $input, array $expected): void
    {
        self::assertSame(
            $expected,
            self::extractValues(Solution::solution(self::buildList($input)))
        );
    }

    public static function provideCases(): array
    {
        return [
            'empty list' => [[], []],
            'single node' => [[42], [42]],
            'no duplicates' => [[1, -1, 2, -2, 3, -3, 4, -4, 5, -5], [1, -1, 2, -2, 3, -3, 4, -4, 5, -5]],
            'readme example' => [[10, 20, 10, 30, 20, 40, 30], [10, 20, 30, 40]],
            'mixed duplicates' => [[1, 2, 2, 3, 3, 4, 5, 5, 5], [1, 2, 3, 4, 5]],
            'all same values' => [[1, 1, 1, 1], [1]],
            'negative duplicates' => [[-1, -1, 2, 2, 3, 3], [-1, 2, 3]],
            'descending duplicates' => [[-5, -5, -5, -4, -4, -4, -3, -3], [-5, -4, -3]],
            'large and small values' => [[1000, 100, 10, 1, 1, 10, 100, 1000], [1000, 100, 10, 1]],
            'sequential duplicates' => [[34, 35, 35, 36, 37, 37, 37, 38, 39, 39], [34, 35, 36, 37, 38, 39]],
            'all zeros' => [[0, 0, 0], [0]],
            'even hundred duplicates' => [[100, 100, 200, 200, 300, 300, 400, 400], [100, 200, 300, 400]],
            'scattered fives' => [[5, 15, 25, 5, 35, 25, 45], [5, 15, 25, 35, 45]],
            'ascending with repeats' => [[7, 8, 9, 8, 10, 9, 11], [7, 8, 9, 10, 11]],
            'mixed repeat pattern' => [[1, 4, 5, 4, 1, 6, 5], [1, 4, 5, 6]],
            'even numbers with repeats' => [[0, 2, 4, 2, 6, 4, 8, 6], [0, 2, 4, 6, 8]],
            'odd descending repeats' => [[9, 7, 5, 3, 7, 1, 9], [9, 7, 5, 3, 1]],
            'hundreds with repeats' => [[100, 200, 300, 100, 400, 300, 500, 200], [100, 200, 300, 400, 500]],
            'fifties and sixties' => [[50, 60, 70, 80, 90, 60, 70], [50, 60, 70, 80, 90]],
            'twenties and thirties' => [[21, 31, 41, 21, 51, 31, 61, 41], [21, 31, 41, 51, 61]],
            'teens and twenties' => [[13, 23, 33, 13, 43, 23, 53], [13, 23, 33, 43, 53]],
            'decreasing with repeats' => [[89, 78, 89, 67, 56, 45, 67], [89, 78, 67, 56, 45]],
            'two element duplicate' => [[7, 7], [7]],
            'palindrome-like repeats' => [[3, 1, 3, 2, 1, 2], [3, 1, 2]],
        ];
    }

    private static function buildList(array $values): ?ListNode
    {
        if ($values === []) {
            return null;
        }

        $head = new ListNode($values[0]);
        $current = $head;

        for ($i = 1, $count = count($values); $i < $count; $i++) {
            $current->next = new ListNode($values[$i]);
            $current = $current->next;
        }

        return $head;
    }

    private static function extractValues(?ListNode $head): array
    {
        $values = [];

        while ($head !== null) {
            $values[] = $head->val;
            $head = $head->next;
        }

        return $values;
    }
}
