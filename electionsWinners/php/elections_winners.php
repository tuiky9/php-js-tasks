<?php

declare(strict_types=1);

namespace ElectionsWinners;

class Solution
{
    public static function solution($votes, $k)
    {

        $max = max($votes);

        if (!$k) {
            return sizeof(array_keys($votes, $max)) === 1 ? 1 : 0;
        }

        foreach ($votes as $key => $v) {
            if ($v + $k <= $max) {
                unset($votes[$key]);
            }
        }

        return sizeof($votes);
    }
}
