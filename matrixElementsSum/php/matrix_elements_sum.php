<?php

declare(strict_types=1);

namespace MatrixElementsSum;

class Solution
{
    public static function solution($matrix)
    {
        $index = [];
        $sum = 0;
        for ($i = 0; $i < sizeof($matrix); $i++) {
            foreach ($matrix[$i] as $k => $v) {
                if (!in_array($k, $index)) {
                    $sum += $v;
                }
                if ($v === 0) {
                    $index[] = $k;
                }
            }
        }
        return $sum;
    }
}
