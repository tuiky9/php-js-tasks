<?php

declare(strict_types=1);

namespace IsLucky;

class Solution
{
    public static function solution($n)
    {

        $n = array_chunk(str_split((string) $n), strlen((string) $n) / 2);

        return array_sum($n[0]) === array_sum($n[1]);
    }
}
