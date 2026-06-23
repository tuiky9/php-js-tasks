<?php

declare(strict_types=1);

$root = dirname(__DIR__);

$phpunitPath = $root . '/phpunit.xml';
$phpunit = file_get_contents($phpunitPath);
if ($phpunit === false) {
    fwrite(STDERR, "Unable to read phpunit.xml\n");
    exit(1);
}

preg_match_all('#<directory suffix="Test\.php">([^<]+)</directory>#', $phpunit, $matches);
$taskDirs = $matches[1];

$moved = 0;
$updatedTests = 0;
$updatedReadmes = 0;

foreach ($taskDirs as $task) {
    $taskPath = $root . '/' . $task;
    $phpDir = $taskPath . '/php';

    if (!is_dir($phpDir)) {
        fwrite(STDERR, "Skip {$task}: missing php/ directory\n");
        continue;
    }

    $testFiles = glob($taskPath . '/*Test.php') ?: [];
    foreach ($testFiles as $testFile) {
        $basename = basename($testFile);
        $destination = $phpDir . '/' . $basename;

        if (!rename($testFile, $destination)) {
            fwrite(STDERR, "Failed to move {$testFile}\n");
            continue;
        }

        $moved++;

        $code = file_get_contents($destination);
        if ($code === false) {
            continue;
        }

        $original = $code;
        $code = str_replace("__DIR__ . '/php/", "__DIR__ . '/", $code);

        if ($code !== $original) {
            file_put_contents($destination, $code);
            $updatedTests++;
        }
    }

    $readme = $taskPath . '/README.md';
    if (!is_file($readme)) {
        continue;
    }

    $content = file_get_contents($readme);
    if ($content === false) {
        continue;
    }

    $originalReadme = $content;

    $content = preg_replace(
        '#\.\./vendor/bin/phpunit -c \.\./phpunit\.xml \./([A-Za-z0-9]+Test\.php)#',
        '../vendor/bin/phpunit -c ../phpunit.xml php/$1',
        $content
    );

    $content = preg_replace(
        '#<code>\.\./vendor/bin/phpunit -c \.\./phpunit\.xml \./([A-Za-z0-9]+Test\.php)</code>#',
        '<code>../vendor/bin/phpunit -c ../phpunit.xml php/$1</code>',
        $content
    );

    if ($content !== $originalReadme) {
        file_put_contents($readme, $content);
        $updatedReadmes++;
    }
}

$phpunit = preg_replace(
    '#<directory suffix="Test\.php">([^<]+)</directory>#',
    '<directory suffix="Test.php">$1/php</directory>',
    $phpunit
);
file_put_contents($phpunitPath, $phpunit);

$mainReadme = $root . '/README.md';
$mainContent = file_get_contents($mainReadme);
if ($mainContent !== false) {
    $mainContent = str_replace(
        <<<'OLD'
taskName/
├── README.md           # Problem description
├── *Test.php           # PHPUnit tests (task root)
├── php/                # PHP solution
│   └── *.php
└── js/                 # JavaScript solution (optional)
    └── *.js
OLD,
        <<<'NEW'
taskName/
├── README.md           # Problem description
├── php/                # PHP solution and PHPUnit tests
│   ├── *.php           # Solution
│   └── *Test.php       # Tests
└── js/                 # JavaScript solution (optional)
    └── *.js
NEW,
        $mainContent
    );

    $mainContent = str_replace(
        'vendor/bin/phpunit -c phpunit.xml taskName/TaskNameTest.php',
        'vendor/bin/phpunit -c phpunit.xml taskName/php/TaskNameTest.php',
        $mainContent
    );

    file_put_contents($mainReadme, $mainContent);
}

echo "Moved test files: {$moved}\n";
echo "Updated test requires: {$updatedTests}\n";
echo "Updated README files: {$updatedReadmes}\n";
echo "Updated phpunit.xml\n";
