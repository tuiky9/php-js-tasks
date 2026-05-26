<?php

/*
PHP Task: Deep-merge two nested arrays (associative maps recurse; lists are replaced).
*/

function deepMerge(array $left, array $right): array
{
    $copyArray = static function (array $array) use (&$copyArray): array {
        $copy = [];

        foreach ($array as $key => $value) {
            $copy[$key] = is_array($value) ? $copyArray($value) : $value;
        }

        return $copy;
    };

    $result = $copyArray($left);

    foreach ($right as $key => $value) {
        if (
            array_key_exists($key, $result)
            && is_array($result[$key])
            && is_array($value)
            && !array_is_list($result[$key])
            && !array_is_list($value)
        ) {
            $result[$key] = deepMerge($result[$key], $value);
            continue;
        }

        $result[$key] = is_array($value) ? $copyArray($value) : $value;
    }

    return $result;
}
