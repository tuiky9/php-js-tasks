<?php

declare(strict_types=1);

namespace ShapeArea;

class Solution
{
    public static function solution($n)
    {

        $nOuterQubes = $n * $n;
        $innerLine   = $n - 1;
        $nInnerQubes = $innerLine * $innerLine;
        return $nOuterQubes + $nInnerQubes;
    }
}
