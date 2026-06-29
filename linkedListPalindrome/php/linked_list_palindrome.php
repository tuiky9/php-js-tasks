<?php

declare(strict_types=1);

namespace LinkedListPalindrome;

class ListNode
{
    public function __construct(
        public int $val = 0,
        public ?ListNode $next = null
    ) {
    }
}

class Solution
{
    public static function solution(?ListNode $head): bool
    {
        if ($head === null || $head->next === null) {
            return true;
        }

        $slow = $head;
        $fast = $head;

        while ($fast !== null && $fast->next !== null) {
            $slow = $slow->next;
            $fast = $fast->next->next;
        }

        $secondHalf = self::reverseList($slow);
        $firstHalf = $head;

        while ($secondHalf !== null) {
            if ($firstHalf->val !== $secondHalf->val) {
                return false;
            }

            $firstHalf = $firstHalf->next;
            $secondHalf = $secondHalf->next;
        }

        return true;
    }

    private static function reverseList(?ListNode $head): ?ListNode
    {
        $previous = null;
        $current = $head;

        while ($current !== null) {
            $next = $current->next;
            $current->next = $previous;
            $previous = $current;
            $current = $next;
        }

        return $previous;
    }
}
