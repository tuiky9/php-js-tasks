<?php

declare(strict_types=1);

namespace LinkedListCycle;

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
            return false;
        }

        $slow = $head;
        $fast = $head;

        while ($fast !== null && $fast->next !== null) {
            $slow = $slow->next;
            $fast = $fast->next->next;

            if ($slow === $fast) {
                return true;
            }
        }

        return false;
    }
}
