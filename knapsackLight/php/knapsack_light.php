<?php

declare(strict_types=1);

namespace KnapsackLight;

class Solution
{
    public static function solution($value1, $weight1, $value2, $weight2, $maxW)
    {

        return max(
            ($weight1 <= $maxW) * $value1,
            ($weight2 <= $maxW) * $value2,
            ($weight1 + $weight2 <= $maxW) * ($value1 + $value2)
        );
    }
}
