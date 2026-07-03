<?php

declare(strict_types=1);

use RotateRight\ListNode;
use RotateRight\Solution;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

final class RotateRightTest extends TestCase
{
    #[DataProvider('provideCases')]
    public function testRotateRight(array $values, int $k, array $expected): void
    {
        self::assertSame(
            $expected,
            self::extractValues(Solution::solution(self::buildList($values), $k))
        );
    }

    public static function provideCases(): array
    {
        return [
            'empty list' => [[], 3, []],
            'single node zero rotation' => [[1], 0, [1]],
            'single node large k' => [[1], 999, [1]],
            'two nodes rotate one' => [[1, 2], 1, [2, 1]],
            'two nodes full rotation modulo' => [[1, 2], 1002, [1, 2]],
            'readme example' => [[1, 2, 3, 4], 3, [2, 3, 4, 1]],
            'three nodes rotate two' => [[1, 2, 3], 2, [2, 3, 1]],
            'five nodes rotate two' => [[1, 2, 3, 4, 5], 2, [4, 5, 1, 2, 3]],
            'five nodes rotate four' => [[1, 2, 3, 4, 5], 4, [2, 3, 4, 5, 1]],
            'full rotation equals original' => [[1, 2, 3, 4, 5], 5, [1, 2, 3, 4, 5]],
            'k equals length plus one' => [[1, 2, 3, 4, 5], 6, [5, 1, 2, 3, 4]],
            'k equals length plus two' => [[1, 2, 3, 4, 5], 7, [4, 5, 1, 2, 3]],
            'very large k' => [[1, 2, 3, 4, 5], 1001, [5, 1, 2, 3, 4]],
            'duplicate values rotate three' => [[1, 1, 1, 1, 2, 2, 2], 3, [2, 2, 2, 1, 1, 1, 1]],
            'mixed duplicates rotate two' => [[5, 5, 5, 4, 4, 4], 2, [4, 4, 5, 5, 5, 4]],
            'three nodes rotate one' => [[10, 20, 30], 1, [30, 10, 20]],
            'zero rotation unchanged' => [[1, 2, 3, 4, 5], 0, [1, 2, 3, 4, 5]],
            'negative values' => [[-3, -2, -1], 1, [-1, -3, -2]],
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
