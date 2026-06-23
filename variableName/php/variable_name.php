<?php

declare(strict_types=1);

namespace VariableName;

class Solution
{
    public static function solution($name)
    {
        preg_match('/^[a-z_]{1}[\w]*/i', $name, $pm);

        return isset($pm[0]) && $pm[0] === $name;
    }
}
