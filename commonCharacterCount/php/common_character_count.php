<?php

declare(strict_types=1);

namespace CommonCharacterCount;

class Solution
{
    public static function solution($s1, $s2)
    {

        $s2len = strlen($s2);

        foreach (str_split($s1) as $k => $v) {
            $s2 = preg_replace("/$v/", '', $s2, 1);
        }

        return $s2len - strlen($s2);
    }
}
