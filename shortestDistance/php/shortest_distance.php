<?php

declare(strict_types=1);

namespace ShortestDistance;

final class Solution
{
    /**
     * @param array<string, list<string>> $roads
     */
    public static function solution(array $roads, string $start, string $destination): ?int
    {
        if ($start === $destination) {
            return 0;
        }

        $queue = [[$start, 0]];
        $visited = [$start => true];

        while ($queue !== []) {
            [$city, $distance] = array_shift($queue);
            $neighbors = $roads[$city] ?? [];

            foreach ($neighbors as $neighbor) {
                if (isset($visited[$neighbor])) {
                    continue;
                }

                if ($neighbor === $destination) {
                    return $distance + 1;
                }

                $visited[$neighbor] = true;
                $queue[] = [$neighbor, $distance + 1];
            }
        }

        return null;
    }
}
