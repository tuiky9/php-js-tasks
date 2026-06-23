<?php

declare(strict_types=1);

namespace PairingCharsRecursively;

/*
Pair digits from both ends recursively.
Example: abc789 -> a9b8c7
*/

class Solution
{
    public static function solution(string $s): string
    {
        $length = strlen($s);

        if ($length <= 1) {
            return $s;
        }

        return $s[0] . $s[$length - 1] . self::solution(substr($s, 1, $length - 2));
    }
}
