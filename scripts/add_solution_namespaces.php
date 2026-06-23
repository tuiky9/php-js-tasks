<?php

declare(strict_types=1);

$root = dirname(__DIR__);

$taskDirs = [];
$xml = file_get_contents($root . '/phpunit.xml');
preg_match_all('#<directory suffix="Test\.php">([^<]+)</directory>#', $xml, $matches);
foreach ($matches[1] as $dir) {
    $taskDirs[] = $dir;
}

function taskNamespace(string $task): string
{
    return ucfirst($task);
}

function findPhpFile(string $taskDir): ?string
{
    $files = glob($taskDir . '/php/*.php');
    if ($files === false || $files === []) {
        return null;
    }

    return count($files) === 1 ? $files[0] : ($files[0] ?? null);
}

function wrapStandaloneFunction(string $code, string $namespace): string
{
    if (preg_match('/class\s+Solution\b/', $code)) {
        return $code;
    }

    if (!preg_match('/function\s+(\w+)\s*\(([^)]*)\)([^{]*)\{/', $code, $match, PREG_OFFSET_CAPTURE)) {
        return $code;
    }

    $params = $match[2][0];
    $returnType = trim($match[3][0]);
    $bodyStart = $match[0][1] + strlen($match[0][0]);

    $braceDepth = 1;
    $len = strlen($code);
    $i = $bodyStart;

    while ($i < $len && $braceDepth > 0) {
        if ($code[$i] === '{') {
            $braceDepth++;
        } elseif ($code[$i] === '}') {
            $braceDepth--;
        }
        $i++;
    }

    $body = substr($code, $bodyStart, $i - $bodyStart - 1);
    $before = trim(preg_replace('/^<\?php\s*/', '', substr($code, 0, $match[0][1])));

    $header = "<?php\n\ndeclare(strict_types=1);\n\nnamespace {$namespace};\n\n";
    if ($before !== '' && str_starts_with($before, '/*')) {
        $header .= $before . "\n\n";
    }

    $signature = "public static function solution({$params}){$returnType}";

    return $header . "class Solution\n{\n    {$signature}\n    {" . $body . "\n    }\n}\n";
}

function addNamespaceToPhp(string $code, string $namespace): string
{
    if (preg_match('/namespace\s+/', $code)) {
        return $code;
    }

    $code = preg_replace('/\$this->isDiagonalConstant/', 'self::isDiagonalConstant', $code);
    $code = preg_replace(
        '/private function isDiagonalConstant/',
        'private static function isDiagonalConstant',
        $code
    );

    if (!preg_match('/class\s+Solution\b/', $code)) {
        return wrapStandaloneFunction($code, $namespace);
    }

    $code = preg_replace(
        '/^<\?php\s*/',
        "<?php\n\ndeclare(strict_types=1);\n\nnamespace {$namespace};\n\n",
        $code,
        1
    );

    return $code;
}

function updateTestFile(string $path, string $namespace): void
{
    $code = file_get_contents($path);
    if ($code === false) {
        return;
    }

    $useStatement = "use {$namespace}\\Solution;";

    if (str_contains($code, $useStatement)) {
        return;
    }

    $code = preg_replace(
        '/use PHPUnit\\\\Framework\\\\Attributes\\\\DataProvider;\s*\n/',
        "use PHPUnit\\Framework\\Attributes\\DataProvider;\n\n{$useStatement}\n",
        $code,
        1
    );

    if (!str_contains($code, $useStatement)) {
        $code = preg_replace(
            '/(declare\(strict_types=1\);\s*\n)/',
            "$1\n{$useStatement}\n",
            $code,
            1
        );
    }

    if (!str_contains($code, $useStatement)) {
        $code = preg_replace(
            '/(<\?php\s*\n)/',
            "$1\n{$useStatement}\n",
            $code,
            1
        );
    }

    $code = preg_replace('/\(new Solution\(\)\)->solution\(/', 'Solution::solution(', $code);

    file_put_contents($path, $code);
}

foreach ($taskDirs as $task) {
    $namespace = taskNamespace($task);
    $taskDir = $root . '/' . $task;
    $phpFile = findPhpFile($taskDir);

    if ($phpFile !== null) {
        $phpCode = file_get_contents($phpFile);
        if ($phpCode !== false) {
            file_put_contents($phpFile, addNamespaceToPhp($phpCode, $namespace));
        }
    }

    foreach (glob($taskDir . '/*Test.php') ?: [] as $testFile) {
        updateTestFile($testFile, $namespace);
    }
}

echo "Namespaces added for " . count($taskDirs) . " tasks.\n";
