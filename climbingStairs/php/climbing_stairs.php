<?php

declare(strict_types=1);

namespace ClimbingStairs;

use InvalidArgumentException;

final class Solution
{
    public static function solution(int $n): int
    {
        if ($n < 0) {
            throw new InvalidArgumentException('The number of stairs cannot be negative.');
        }

        if ($n <= 1) {
            return 1;
        }

        $previous = 1;
        $current = 1;

        for ($step = 2; $step <= $n; $step++) {
            $next = $previous + $current;
            $previous = $current;
            $current = $next;
        }

        return $current;
    }
}
