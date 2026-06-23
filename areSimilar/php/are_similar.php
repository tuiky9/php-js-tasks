<?php

declare(strict_types=1);

namespace AreSimilar;

class Solution
{
    public static function solution($a, $b)
    {
        $ad = array_diff_assoc($a, $b);
        sort($ad);
        $bd = array_diff_assoc($b, $a);
        sort($bd);

        return sizeof($ad) < 3 && $ad == $bd;
    }
}
