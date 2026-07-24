<?php

declare(strict_types=1);

namespace MinSteps;

final class Solution
{
    public static function solution(int $n): int
    {
        if ($n < 0) {
            return -1;
        }

        if ($n === 0) {
            return 0;
        }

        $dp = array_fill(0, $n + 1, 0);

        for ($i = 1; $i <= $n; $i++) {
            $dp[$i] = $dp[$i - 1] + 1;

            if ($i % 2 === 0) {
                $dp[$i] = min($dp[$i], $dp[intdiv($i, 2)] + 1);
            }
        }

        return $dp[$n];
    }
}
