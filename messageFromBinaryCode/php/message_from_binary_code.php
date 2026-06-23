<?php

declare(strict_types=1);

namespace MessageFromBinaryCode;

class Solution
{
    public static function solution($code)
    {

        preg_match_all('/.{1,8}/', $code, $codeArray);

        $codeArray = array_map('bindec', $codeArray[0]);

        return implode('', array_map('chr', $codeArray));
    }
}
