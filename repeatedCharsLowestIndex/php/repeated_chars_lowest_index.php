<?php

declare(strict_types=1);

namespace RepeatedCharsLowestIndex;

final class Solution
{
    public static function solution(string $str): ?string
    {
        $counts = [];

        for ($i = 0, $length = strlen($str); $i < $length; $i++) {
            $char = $str[$i];
            $counts[$char] = ($counts[$char] ?? 0) + 1;
        }

        foreach ($counts as $char => $count) {
            if ($count > 1) {
                return (string) $char;
            }
        }

        return null;
    }
}
