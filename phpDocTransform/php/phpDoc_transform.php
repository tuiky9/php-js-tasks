<?php

/*
PHP Task: Convert PHPDoc variables from snake_case to camelCase
*/

function transformPhpDocVariables(string $phpDoc): string
{
    return preg_replace_callback(
        '/\$([a-z][a-z0-9]*(?:_[a-z][a-z0-9]*)*)/',
        static function (array $matches): string {
            $parts = explode('_', $matches[1]);
            $camel = array_shift($parts);

            foreach ($parts as $part) {
                $camel .= ucfirst($part);
            }

            return '$' . $camel;
        },
        $phpDoc
    );
}
