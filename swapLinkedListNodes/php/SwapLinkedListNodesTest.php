<?php

declare(strict_types=1);

use SwapLinkedListNodes\ListNode;
use SwapLinkedListNodes\Solution;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

final class SwapLinkedListNodesTest extends TestCase
{
    #[DataProvider('provideCases')]
    public function testSwapLinkedListNodes(array $values, int $start, int $end, array $expected): void
    {
        $head = self::createList($values);
        $result = Solution::solution($head, $start, $end);

        self::assertSame($expected, self::extractValues($result));
    }

    public static function provideCases(): array
    {
        return [
            'swap first and last' => [[1, 2, 3, 4, 5], 0, 4, [5, 2, 3, 4, 1]],
            'swap middle range' => [[5, 4, 3, 2, 1], 1, 3, [5, 2, 3, 4, 1]],
            'swap first and last in long list' => [
                [1, 2, 3, 4, 5, 6, 7, 8, 9],
                0,
                8,
                [9, 2, 3, 4, 5, 6, 7, 8, 1],
            ],
            'swap three consecutive nodes block' => [
                [1, 2, 3, 4, 5, 6, 7, 8, 9],
                3,
                5,
                [1, 2, 3, 6, 5, 4, 7, 8, 9],
            ],
            'swap entire three node list' => [[1, 2, 3], 0, 2, [3, 2, 1]],
            'same index no change' => [[1, 2, 3], 1, 1, [1, 2, 3]],
            'negative values swap ends' => [
                [-9, -8, -7, -6, -5, -4, -3, -2, -1, 0],
                0,
                9,
                [0, -8, -7, -6, -5, -4, -3, -2, -1, -9],
            ],
            'single node' => [[2], 0, 0, [2]],
            'mixed signs swap ends' => [[-5, 0, 5], 0, 2, [5, 0, -5]],
            'swap ends in hundred node list' => [
                range(1, 100),
                0,
                99,
                array_merge([100], range(2, 99), [1]),
            ],
            'same middle index in long list' => [range(1, 100), 50, 50, range(1, 100)],
            'two node list' => [[10, 20], 0, 1, [20, 10]],
            'adjacent nodes' => [[1, 2, 3, 4], 1, 2, [1, 3, 2, 4]],
            'swap head with middle' => [[7, 8, 9, 10], 0, 2, [9, 8, 7, 10]],
        ];
    }

    private static function createList(array $values): ?ListNode
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
