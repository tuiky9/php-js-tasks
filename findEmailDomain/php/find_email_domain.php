<?php

declare(strict_types=1);

namespace FindEmailDomain;

class Solution
{
    public static function solution($address)
    {
        $parts = explode('@', $address);

        return array_pop($parts);
    }
}
