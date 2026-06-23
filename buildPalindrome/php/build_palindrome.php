<?php

declare(strict_types=1);

namespace BuildPalindrome;

class Solution
{
    public static function solution($st)
    {
        $i = 0;
        $oldSt = $st;

        while ($st != strrev($st)) {
            $st = $oldSt . strrev(substr($oldSt, 0, $i));
            $i++;
        }

        return $st;
    }
}
