<?php

declare(strict_types=1);

namespace AreEquallyStrong;

class Solution
{
    public static function solution($yourLeft, $yourRight, $friendsLeft, $friendsRight)
    {
        return sizeof(array_intersect([$yourLeft, $yourRight], [$friendsLeft, $friendsRight])) === 2;
    }
}
