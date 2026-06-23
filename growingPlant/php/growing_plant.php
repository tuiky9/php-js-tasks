<?php

declare(strict_types=1);

namespace GrowingPlant;

class Solution
{
    public static function solution($upSpeed, $downSpeed, $desiredHeight)
    {

        $height = 0;
        $days = 1;

        while ($height < $desiredHeight) {
            $height += $upSpeed;

            if ($height >= $desiredHeight) {
                break;
            }

            $height -= $downSpeed;

            $days++;
        }

        return $days;
    }
}
