<?php

declare(strict_types=1);

use LinkedListCycle\ListNode;
use LinkedListCycle\Solution;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

final class LinkedListCycleTest extends TestCase
{
    #[DataProvider('provideCases')]
    public function testLinkedListCycle(?array $values, int $cycleIndex, bool $expected): void
    {
        self::assertSame(
            $expected,
            Solution::solution(self::buildList($values, $cycleIndex))
        );
    }

    public static function provideCases(): array
    {
        return [
            'empty list' => [null, -1, false],
            'single node no cycle' => [[7], -1, false],
            'linear list no cycle' => [[1, 2, 3, 4], -1, false],
            'readme linear example' => [[1, 2, 3, 4], -1, false],
            'readme cycle example' => [[1, 2, 3, 4], 1, true],
            'classic cycle pattern' => [[3, 2, 0, -4], 1, true],
            'two nodes cycle to head' => [[1, 2], 0, true],
            'self loop single node' => [[5], 0, true],
            'long acyclic list' => [[10, 20, 30, 40, 50, 60], -1, false],
            'cycle at tail to middle' => [[1, 2, 3, 4, 5], 2, true],
            'cycle at last node to first' => [[8, 9, 10], 0, true],
            'negative values no cycle' => [[-3, -2, -1], -1, false],
            'negative values with cycle' => [[-3, -2, -1], 1, true],
            'two nodes no cycle' => [[1, 2], -1, false],
            'large values acyclic' => [[1000, 2000, 3000], -1, false],
        ];
    }

    /**
     * @param array<int, int>|null $values
     */
    private static function buildList(?array $values, int $cycleIndex): ?ListNode
    {
        if ($values === null || $values === []) {
            return null;
        }

        $nodes = [];
        $head = new ListNode($values[0]);
        $nodes[] = $head;
        $current = $head;

        for ($i = 1, $count = count($values); $i < $count; $i++) {
            $current->next = new ListNode($values[$i]);
            $current = $current->next;
            $nodes[] = $current;
        }

        if ($cycleIndex >= 0) {
            $current->next = $nodes[$cycleIndex];
        }

        return $head;
    }
}
