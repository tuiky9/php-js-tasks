<?php

/*
Pair digits from both ends recursively.
Example: abc789 -> a9b8c7
*/

function solve(string $s): string
{
    $length = strlen($s);

    if ($length <= 1) {
        return $s;
    }

    return $s[0] . $s[$length - 1] . solve(substr($s, 1, $length - 2));
}
