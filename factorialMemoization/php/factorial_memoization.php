<?php

declare(strict_types=1);

namespace FactorialMemoization;

use InvalidArgumentException;

final class Solution
{
    public static function solution(int $n, array &$memo): int
    {
        if ($n < 0) {
            throw new InvalidArgumentException('Factorial is not defined for negative numbers.');
        }

        if ($n === 0 || $n === 1) {
            return 1;
        }

        if (isset($memo[$n])) {
            return $memo[$n];
        }

        $memo[$n] = $n * self::solution($n - 1, $memo);

        return $memo[$n];
    }
}
