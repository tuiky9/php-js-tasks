<?php

declare(strict_types=1);

namespace FormatBytes;

/*
PHP Task: Format a byte count as a human-readable string (1024-based units).
*/

class Solution
{
    public static function solution(int $bytes): string
    {
        if ($bytes < 1024) {
            return $bytes . ' B';
        }

        $units = ['KB', 'MB', 'GB'];
        $value = (float) $bytes;

        foreach ($units as $unit) {
            $value /= 1024;

            if ($value < 1024 || $unit === 'GB') {
                return sprintf('%.1f %s', $value, $unit);
            }
        }

        return sprintf('%.1f GB', $value);
    }
}
