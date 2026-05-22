<?php

/*
PHP Task: Remove duplicates while preserving first occurrence order (strict ===).
*/

function dedupePreserveOrder(array $items): array
{
    $seen = [];
    $result = [];

    foreach ($items as $item) {
        if (in_array($item, $seen, true)) {
            continue;
        }

        $seen[] = $item;
        $result[] = $item;
    }

    return $result;
}
