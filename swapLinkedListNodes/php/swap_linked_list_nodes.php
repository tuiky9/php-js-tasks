<?php

declare(strict_types=1);

namespace SwapLinkedListNodes;

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
    public static function solution(?ListNode $head, int $start, int $end): ?ListNode
    {
        if ($head === null || $start === $end) {
            return $head;
        }

        $previousStart = null;
        $currentStart = $head;

        for ($i = 0; $i < $start; $i++) {
            $previousStart = $currentStart;
            $currentStart = $currentStart->next;
        }

        $previousEnd = null;
        $currentEnd = $head;

        for ($i = 0; $i < $end; $i++) {
            $previousEnd = $currentEnd;
            $currentEnd = $currentEnd->next;
        }

        if ($previousStart !== null) {
            $previousStart->next = $currentEnd;
        } else {
            $head = $currentEnd;
        }

        if ($previousEnd !== null) {
            $previousEnd->next = $currentStart;
        } else {
            $head = $currentStart;
        }

        $temp = $currentStart->next;
        $currentStart->next = $currentEnd->next;
        $currentEnd->next = $temp;

        return $head;
    }
}
