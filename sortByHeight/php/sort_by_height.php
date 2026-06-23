<?php

declare(strict_types=1);

namespace SortByHeight;

class Solution
{
    public static function solution($a)
    {

        $s = array_filter($a, function ($v) {
            return $v != -1;
        });
        sort($s);

        foreach ($a as $k => $v) {
            if ($v === -1) {
                continue;
            }

            $a[$k] = array_shift($s);
        }

        return $a;
    }
}
