<?php

declare(strict_types=1);

namespace VerticesWithinDistance;

final class Solution
{
    /**
     * @param array<int, list<int>> $graph
     *
     * @return list<int>
     */
    public static function findVerticesWithinDistance(
        array $graph,
        int $start,
        int $distance
    ): array {
        if ($distance < 0) {
            return [];
        }

        $withinReach = [];
        $visited = [$start => true];
        $queue = [[$start, 0]];
        $head = 0;

        while ($head < count($queue)) {
            [$vertex, $hops] = $queue[$head++];
            $withinReach[] = $vertex;

            if ($hops === $distance) {
                continue;
            }

            foreach ($graph[$vertex] ?? [] as $neighbor) {
                if (isset($visited[$neighbor])) {
                    continue;
                }

                $visited[$neighbor] = true;
                $queue[] = [$neighbor, $hops + 1];
            }
        }

        sort($withinReach);

        return $withinReach;
    }
}
