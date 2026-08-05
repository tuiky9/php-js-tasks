<?php

declare(strict_types=1);

namespace AllCombinations;

final class Solution
{
    /**
     * @return list<string>
     */
    public static function allCombinations(string $s): array
    {
        if ($s === '') {
            return [];
        }

        $characters = str_split($s);
        $used = array_fill(0, count($characters), false);
        $combinations = [];

        self::backtrack($characters, $used, '', $combinations);

        $combinations = array_values(array_unique($combinations));
        sort($combinations, SORT_STRING);

        return $combinations;
    }

    /**
     * @param list<string> $characters
     * @param list<bool> $used
     * @param list<string> $combinations
     */
    private static function backtrack(
        array $characters,
        array &$used,
        string $path,
        array &$combinations
    ): void {
        if ($path !== '') {
            $combinations[] = $path;
        }

        $length = count($characters);

        for ($index = 0; $index < $length; $index++) {
            if ($used[$index]) {
                continue;
            }

            $used[$index] = true;
            self::backtrack(
                $characters,
                $used,
                $path . $characters[$index],
                $combinations
            );
            $used[$index] = false;
        }
    }
}
