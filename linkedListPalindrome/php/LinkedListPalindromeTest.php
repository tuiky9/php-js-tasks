<?php

declare(strict_types=1);

use LinkedListPalindrome\ListNode;
use LinkedListPalindrome\Solution;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

final class LinkedListPalindromeTest extends TestCase
{
    #[DataProvider('provideCases')]
    public function testLinkedListPalindrome(?array $values, bool $expected): void
    {
        self::assertSame($expected, Solution::solution(self::createList($values)));
    }

    public static function provideCases(): array
    {
        return [
            'empty list' => [null, true],
            'single node' => [[1], true],
            'single large node' => [[10], true],
            'two different nodes' => [[10, 11], false],
            'two equal nodes' => [[7, 7], true],
            'odd length palindrome' => [[1, 2, 3, 2, 1], true],
            'even length palindrome' => [[1, 2, 2, 1], true],
            'not a palindrome' => [[1, 2, 3, 1], false],
            'negative palindrome' => [[-1, -2, -2, -1], true],
            'strictly decreasing' => [[5, 4, 3, 2, 1], false],
            'strictly increasing' => [[1, 2, 3, 4, 5], false],
            'all same values' => [[1, 1, 1, 1, 1], true],
            'all negative same values' => [[-1, -1, -1, -1, -1], true],
            'scaled palindrome' => [[1, 10, 100, 10, 1], true],
            'short palindrome' => [[1, 2, 1], true],
            'near palindrome' => [[1, 2, 3, 4], false],
        ];
    }

    private static function createList(?array $values): ?ListNode
    {
        if ($values === null || $values === []) {
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
}
