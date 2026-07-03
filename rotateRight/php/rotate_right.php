<?php

declare(strict_types=1);

namespace RotateRight;

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
    public static function solution(?ListNode $head, int $k): ?ListNode
    {
        if ($head === null || $head->next === null || $k === 0) {
            return $head;
        }

        $length = 1;
        $tail = $head;

        while ($tail->next !== null) {
            $tail = $tail->next;
            $length++;
        }

        $k %= $length;

        if ($k === 0) {
            return $head;
        }

        $tail->next = $head;

        $stepsToNewTail = $length - $k;
        $newTail = $head;

        for ($i = 1; $i < $stepsToNewTail; $i++) {
            $newTail = $newTail->next;
        }

        $newHead = $newTail->next;
        $newTail->next = null;

        return $newHead;
    }
}
