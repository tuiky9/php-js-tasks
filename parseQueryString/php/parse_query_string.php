<?php

declare(strict_types=1);

namespace ParseQueryString;

/*
PHP Task: Parse a URL query string into an associative array (without parse_str).
*/

class Solution
{
    public static function solution(string $query): array
    {
        $query = ltrim($query, '?');

        if ($query === '') {
            return [];
        }

        $result = [];

        foreach (explode('&', $query) as $pair) {
            if ($pair === '') {
                continue;
            }

            $equalsPos = strpos($pair, '=');

            if ($equalsPos === false) {
                $key = urldecode($pair);
                $value = '';
            } else {
                $key = urldecode(substr($pair, 0, $equalsPos));
                $value = urldecode(substr($pair, $equalsPos + 1));
            }

            $result[$key] = $value;
        }

        return $result;
    }
}
