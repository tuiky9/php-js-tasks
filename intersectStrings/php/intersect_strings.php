<?php

class Solution
{
    public static function solution($string1, $string2)
    {               
        $charCount = [];

        for ($i = 0; $i < strlen($string2); $i++) {
            $char = $string2[$i];

            if (!isset($charCount[$char])) {
                $charCount[$char] = 0;
            }

            $charCount[$char]++;
        }

        $result = '';

        for ($i = 0; $i < strlen($string1); $i++) {
            $char = $string1[$i];

            if (isset($charCount[$char]) && $charCount[$char] > 0) {
                $result .= $char;
                $charCount[$char]--;
            }
        }

        return $result;
    }
}
