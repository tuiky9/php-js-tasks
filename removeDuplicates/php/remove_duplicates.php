<?php

declare(strict_types=1);

namespace RemoveDuplicates;

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
    public static function solution(?ListNode $head): ?ListNode
    {
        if ($head === null || $head->next === null) {
            return $head;
        }

        $seen = [];
        $dummy = new ListNode(0, $head);
        $previous = $dummy;
        $current = $head;

        while ($current !== null) {
            if (isset($seen[$current->val])) {
                $previous->next = $current->next;
            } else {
                $seen[$current->val] = true;
                $previous = $current;
            }

            $current = $current->next;
        }

        return $dummy->next;
    }
}
