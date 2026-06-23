<?php

declare(strict_types=1);

namespace AlmostIncreasingSequence;

class Solution
{
    public static function solution($sequence)
    {
        for ($i = 0; $i < sizeof($sequence) - 1; $i++) {
            if ($sequence[$i + 1] <= $sequence[$i]) {
                if ($i > 0 && $sequence[$i + 1] <= $sequence[$i - 1]) {
                    array_splice($sequence, $i + 1, 1);
                } else {
                    array_splice($sequence, $i, 1);
                }
                break;
            }
        }

    //check if removing one element has made it sequential
        $seq2 = $sequence;
        sort($sequence);
        $sequence = array_unique($sequence);
        if ($sequence != $seq2) {
            return false;
        }

        return true;
    }
}
