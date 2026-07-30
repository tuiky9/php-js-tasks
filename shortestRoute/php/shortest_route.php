<?php

declare(strict_types=1);

namespace ShortestRoute;

final class Solution
{
    /**
     * @param list<int> $obstacles
     */
    public static function shortestRoute(
        int $distance,
        int $strideLength,
        array $obstacles
    ): int {
        if ($distance <= 1) {
            return 0;
        }

        if ($strideLength < 1) {
            return -1;
        }

        $goal = $distance - 1;
        $blocked = [];

        foreach ($obstacles as $obstacle) {
            $blocked[$obstacle] = true;
        }

        // Start at 0 even if it appears in $obstacles; only landings are forbidden.
        if (isset($blocked[$goal])) {
            return -1;
        }

        $queue = [[0, 0]];
        $visited = [0 => true];
        $head = 0;

        while ($head < count($queue)) {
            [$position, $strides] = $queue[$head++];

            for ($step = 1; $step <= $strideLength; $step++) {
                $next = $position + $step;

                if ($next > $goal) {
                    break;
                }

                if (isset($blocked[$next]) || isset($visited[$next])) {
                    continue;
                }

                if ($next === $goal) {
                    return $strides + 1;
                }

                $visited[$next] = true;
                $queue[] = [$next, $strides + 1];
            }
        }

        return -1;
    }
}
