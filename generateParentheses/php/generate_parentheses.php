<?php

declare(strict_types=1);

namespace GenerateParentheses;

final class Solution
{
    /**
     * @return list<string>
     */
    public static function generateParentheses(int $n): array
    {
        if ($n <= 0) {
            return [];
        }

        $results = [];
        self::backtrack($n, 0, 0, '', $results);

        return $results;
    }

    /**
     * @param list<string> $results
     */
    private static function backtrack(
        int $pairs,
        int $open,
        int $close,
        string $current,
        array &$results
    ): void {
        if (strlen($current) === 2 * $pairs) {
            $results[] = $current;

            return;
        }

        if ($open < $pairs) {
            self::backtrack($pairs, $open + 1, $close, $current . '(', $results);
        }

        if ($close < $open) {
            self::backtrack($pairs, $open, $close + 1, $current . ')', $results);
        }
    }
}
