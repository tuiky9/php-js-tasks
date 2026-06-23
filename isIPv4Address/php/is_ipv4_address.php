<?php

declare(strict_types=1);

namespace IsIPv4Address;

class Solution
{
    public static function solution($inputString)
    {
        return filter_var($inputString, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4) !== false;
    }
}
