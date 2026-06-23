<?php

declare(strict_types=1);

namespace CheckPalindrome;

class Solution
{
    public static function solution($inputString)
    {

        return $inputString === implode('', array_reverse(str_split($inputString)));
    }
}
