<?php

declare(strict_types=1);

namespace LetterCasePermutation;

final class Solution
{
    /**
     * @return list<string>
     */
    public static function solution(string $s): array
    {
        $results = [];
        self::backtrack($s, 0, '', $results);

        return $results;
    }

    /**
     * @param list<string> $results
     */
    private static function backtrack(
        string $s,
        int $index,
        string $current,
        array &$results
    ): void {
        if ($index === strlen($s)) {
            $results[] = $current;

            return;
        }

        $character = $s[$index];

        if (ctype_alpha($character)) {
            self::backtrack(
                $s,
                $index + 1,
                $current . strtolower($character),
                $results
            );
            self::backtrack(
                $s,
                $index + 1,
                $current . strtoupper($character),
                $results
            );

            return;
        }

        self::backtrack($s, $index + 1, $current . $character, $results);
    }
}
