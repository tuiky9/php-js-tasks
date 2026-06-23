<?php

declare(strict_types=1);

$root = dirname(__DIR__);
$intro = <<<'BLOCK'
From the repository root, install dependencies once:

```bash
composer install
```

BLOCK;

$fixed = 0;

foreach (glob($root . '/*/README.md') as $readme) {
    $content = file_get_contents($readme);
    if ($content === false) {
        continue;
    }

    $pattern = "/## Run tests\n\nFrom this task directory/";
    if (!preg_match($pattern, $content)) {
        continue;
    }

    $updated = preg_replace(
        '/## Run tests\n\nFrom this task directory/',
        "## Run tests\n\n{$intro}From this task directory",
        $content,
        1
    );

    if ($updated !== null && $updated !== $content) {
        file_put_contents($readme, $updated);
        $fixed++;
    }
}

echo "Fixed {$fixed} README files.\n";
