<?php

declare(strict_types=1);

namespace SlugifyTitle;

/*
PHP Task: Convert a title string into a URL slug.
*/

class Solution
{
    public static function solution(string $title): string
    {
        $slug = strtolower($title);
        $slug = preg_replace('/[^a-z0-9]+/', '-', $slug);

        return trim($slug, '-');
    }
}
