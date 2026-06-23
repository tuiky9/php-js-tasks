<?php

declare(strict_types=1);

namespace AbsoluteValuesSumMinimization;

class Solution
{
    public static function solution(array $input): int
    {
        return $input[ceil(count($input) / 2) - 1];
    }
}
