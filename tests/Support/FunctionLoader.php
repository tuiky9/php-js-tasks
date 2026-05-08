<?php

declare(strict_types=1);

final class FunctionLoader
{
    public static function load(string $filePath, string $functionName): void
    {
        if (function_exists($functionName)) {
            return;
        }

        $code = file_get_contents($filePath);
        if ($code === false) {
            throw new RuntimeException("Unable to read file: {$filePath}");
        }

        if (!str_starts_with($code, "<?php")) {
            $code = "<?php\n" . $code;
        }

        $functionCode = self::extractFunction($code, $functionName);
        if ($functionCode === null) {
            throw new RuntimeException("Function {$functionName} not found in {$filePath}");
        }

        eval($functionCode);

        if (!function_exists($functionName)) {
            throw new RuntimeException("Function {$functionName} failed to load from {$filePath}");
        }
    }

    private static function extractFunction(string $code, string $functionName): ?string
    {
        $tokens = token_get_all($code);
        $count = count($tokens);

        for ($i = 0; $i < $count; $i++) {
            $token = $tokens[$i];
            if (!is_array($token) || $token[0] !== T_FUNCTION) {
                continue;
            }

            $name = self::nextFunctionName($tokens, $i + 1);
            if ($name !== $functionName) {
                continue;
            }

            $snippet = "";
            $braceDepth = 0;
            $startedBody = false;

            for ($j = $i; $j < $count; $j++) {
                $current = $tokens[$j];
                $text = is_array($current) ? $current[1] : $current;
                $snippet .= $text;

                if ($text === "{") {
                    $startedBody = true;
                    $braceDepth++;
                } elseif ($text === "}") {
                    $braceDepth--;
                    if ($startedBody && $braceDepth === 0) {
                        return $snippet;
                    }
                }
            }
        }

        return null;
    }

    private static function nextFunctionName(array $tokens, int $start): ?string
    {
        $count = count($tokens);
        for ($i = $start; $i < $count; $i++) {
            $token = $tokens[$i];
            if (is_array($token) && $token[0] === T_STRING) {
                return $token[1];
            }
        }

        return null;
    }
}
