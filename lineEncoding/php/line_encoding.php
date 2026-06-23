<?php

declare(strict_types=1);

namespace LineEncoding;

class Solution
{
    public static function solution($s)
    {

        $r = '';
        preg_match_all('/(.)\1*/', $s, $m);
        foreach ($m[0] as $k => $v) {
            $len = strlen($v) > 1 ? strlen($v) : '';
            $r = $r . $len . $m[1][$k];
        }
        return $r;
    }
}
