<?php

/*
PHP Task: Convert a title string into a URL slug.
*/

function slugifyTitle(string $title): string
{
    $slug = strtolower($title);
    $slug = preg_replace('/[^a-z0-9]+/', '-', $slug);

    return trim($slug, '-');
}
