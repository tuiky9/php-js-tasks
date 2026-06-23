<?php

declare(strict_types=1);

namespace AlternatingSums;

class Solution
{
    public static function solution($a)
    {
        $teamWeights = array(0, 0);
        foreach ($a as $k => $v) {
            if ($k % 2 == 0) {
                $teamWeights[0] += $v;
            } else {
                $teamWeights[1] += $v;
            }
        }
        return $teamWeights;
    }
}
