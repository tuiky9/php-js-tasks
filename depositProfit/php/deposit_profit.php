<?php

declare(strict_types=1);

namespace DepositProfit;

class Solution
{
    public static function solution($deposit, $rate, $threshold)
    {
        $i = 0;
        while ($deposit < $threshold) {
            $i++;
            $deposit += $deposit * $rate / 100;
        }
        return $i;
    }
}
