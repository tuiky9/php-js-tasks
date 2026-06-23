<?php

declare(strict_types=1);

namespace FirstDigit;

class Solution
{
    public static function solution($inputString)
    {
        preg_match('/\d/', $inputString, $match);

        return $match[0] ?? null;
    }
}
