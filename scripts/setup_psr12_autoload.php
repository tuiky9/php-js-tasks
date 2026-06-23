<?php

declare(strict_types=1);

$root = dirname(__DIR__);
$phpunit = file_get_contents($root . '/phpunit.xml');
preg_match_all('#<directory suffix="Test\.php">([^<]+)</directory>#', $phpunit, $matches);
$classmap = array_map(static fn (string $dir): string => $dir, $matches[1]);
sort($classmap);

$composerPath = $root . '/composer.json';
$composer = json_decode(file_get_contents($composerPath), true, 512, JSON_THROW_ON_ERROR);
$composer['autoload'] = ['classmap' => $classmap];
file_put_contents(
    $composerPath,
    json_encode($composer, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES) . "\n"
);

$fixedTests = 0;

foreach (glob($root . '/*/php/*Test.php') as $testFile) {
    $code = file_get_contents($testFile);
    if ($code === false) {
        continue;
    }

    $original = $code;
    $code = preg_replace('/^require_once __DIR__ \. \'[^\']+\';\n/m', '', $code) ?? $code;

    if (!preg_match('/^<\?php\n\ndeclare\(strict_types=1\);\n\n(.*)\nfinal class /s', $code, $headerMatch)) {
        if ($code !== $original) {
            file_put_contents($testFile, $code);
            $fixedTests++;
        }
        continue;
    }

    $header = $headerMatch[1];
    preg_match_all('/^use [^;]+;/m', $header, $useMatches);
    $uses = $useMatches[0];
    sort($uses, SORT_STRING);
    $newHeader = implode("\n", $uses);

    $code = preg_replace(
        '/^<\?php\n\ndeclare\(strict_types=1\);\n\n.*\nfinal class /s',
        "<?php\n\ndeclare(strict_types=1);\n\n{$newHeader}\n\nfinal class ",
        $code,
        1
    ) ?? $code;

    if ($code !== $original) {
        file_put_contents($testFile, $code);
        $fixedTests++;
    }
}

echo 'Updated composer.json classmap with ' . count($classmap) . " directories.\n";
echo "Updated {$fixedTests} test files.\n";
