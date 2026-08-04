<?php

declare(strict_types=1);

namespace UniquePermutations;

final class Solution
{
    /**
     * @param list<int> $nums
     *
     * @return list<list<int>>
     */
    public static function solution(array $nums): array
    {
        sort($nums);

        $permutations = [];
        $path = [];
        $used = array_fill(0, count($nums), false);

        self::backtrack($nums, $used, $path, $permutations);

        return $permutations;
    }

    /**
     * @param list<int> $nums
     * @param list<bool> $used
     * @param list<int> $path
     * @param list<list<int>> $permutations
     */
    private static function backtrack(
        array $nums,
        array &$used,
        array &$path,
        array &$permutations
    ): void {
        if (count($path) === count($nums)) {
            $permutations[] = $path;

            return;
        }

        $length = count($nums);

        for ($index = 0; $index < $length; $index++) {
            if ($used[$index]) {
                continue;
            }

            if (
                $index > 0
                && $nums[$index] === $nums[$index - 1]
                && !$used[$index - 1]
            ) {
                continue;
            }

            $used[$index] = true;
            $path[] = $nums[$index];

            self::backtrack($nums, $used, $path, $permutations);

            array_pop($path);
            $used[$index] = false;
        }
    }
}
