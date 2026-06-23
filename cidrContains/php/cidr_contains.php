<?php

declare(strict_types=1);

namespace CidrContains;

/*
PHP Task: Return whether an IPv4 address lies in a CIDR block.
*/

class Solution
{
    public static function solution(string $ip, string $cidr): bool
    {
        $toLong = static function (string $address): int {
            $octets = array_map('intval', explode('.', $address));

            return (($octets[0] << 24) | ($octets[1] << 16) | ($octets[2] << 8) | $octets[3]) & 0xFFFFFFFF;
        };

        [$network, $prefixStr] = explode('/', $cidr, 2);
        $prefix = (int) $prefixStr;

        if ($prefix === 0) {
            return true;
        }

        $ipLong = $toLong($ip);
        $netLong = $toLong($network);

        if ($prefix === 32) {
            return $ipLong === $netLong;
        }

        $mask = (0xFFFFFFFF << (32 - $prefix)) & 0xFFFFFFFF;

        return ($ipLong & $mask) === ($netLong & $mask);
    }
}
