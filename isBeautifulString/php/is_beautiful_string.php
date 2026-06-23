<?php

declare(strict_types=1);

namespace IsBeautifulString;

class Solution
{
    public static function solution($inputString)
    {
        $l = 'abcdefghijklmnopqrstuvwxyz';

        foreach (str_split($l) as $k => $v) {
            if ($k === 0) {
                continue;
            }

            if (sizeof(explode($v, $inputString)) > sizeof(explode($l[$k - 1], $inputString))) {
                return false;
            }
        }

        return true;
    }
}
