<?php

/*
PHP Task: Format a byte count as a human-readable string (1024-based units).
*/

function formatBytes(int $bytes): string
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
