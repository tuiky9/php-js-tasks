<?php

declare(strict_types=1);

namespace ReverseInParantheses;

class Solution
{
    public static function solution($inputString)
    {

        $reversedInput = $inputString;

        while (strrpos($reversedInput, ")") != false) {
            $reversedInput = preg_replace_callback("/\(\w{0,48}\)/", function ($matches) {
                return strrev(trim($matches[0], "()"));
            }, $reversedInput);
        }

        return $reversedInput;
    }
}
