<?php

declare(strict_types=1);

namespace MaskEmail;

class Solution
{
    public static function solution(string $email): string|false
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
            return false;
        }

        [$local, $domain] = explode('@', $email, 2);
        $visibleLength = min(2, strlen($local));

        return substr($local, 0, $visibleLength) . '***@' . $domain;
    }
}
