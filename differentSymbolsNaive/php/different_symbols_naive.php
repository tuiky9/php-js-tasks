<?php

declare(strict_types=1);

namespace DifferentSymbolsNaive;

class Solution
{
    public static function solution($s)
    {

        return sizeof(array_unique(str_split($s)));
    }
}
