<?php

declare(strict_types=1);

namespace DedupePreserveOrder;

/*
PHP Task: Remove duplicates while preserving first occurrence order (strict ===).
*/

class Solution
{
    public static function solution(array $items): array
    {
        $seen = [];
        $result = [];

        foreach ($items as $item) {
            if (in_array($item, $seen, true)) {
                continue;
            }

            $seen[] = $item;
            $result[] = $item;
        }

        return $result;
    }
}
