<?php

declare(strict_types=1);

namespace PalindromeRearranging;

class Solution
{
    public static function solution($inputString)
    {
        $oc = 0;
        $p = array_count_values(str_split($inputString));

        foreach ($p as $v) {
            if ($v % 2 != 0) {
                $oc++;
            }
        }
        return $oc < 2;
    }
}
