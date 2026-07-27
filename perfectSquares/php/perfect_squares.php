<?php

declare(strict_types=1);

namespace PerfectSquares;

final class Solution
{
    public static function solution(int $n): int
    {
        $dp = array_fill(0, $n + 1, PHP_INT_MAX);
        $dp[0] = 0;

        for ($amount = 1; $amount <= $n; $amount++) {
            for ($root = 1; $root * $root <= $amount; $root++) {
                $square = $root * $root;
                $dp[$amount] = min($dp[$amount], $dp[$amount - $square] + 1);
            }
        }

        return $dp[$n];
    }
}
