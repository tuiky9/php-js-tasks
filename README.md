# Tasks and solutions in PHP and Javascript.

## Project structure

Each task lives in its own folder:

```
taskName/
├── README.md           # Problem description
├── php/                # PHP solution and PHPUnit tests
│   ├── *.php           # Solution
│   └── *Test.php       # Tests
└── js/                 # JavaScript solution (optional)
    └── *.js
```

Some tasks have only a PHP or only a JavaScript solution; the other language folder may be empty.

## Solution convention

Every task uses the same entry point:

- **PHP:** `TaskNamespace\Solution::solution(...)` (each task has its own namespace, e.g. `FormatBytes\Solution`)
- **JavaScript:** `Solution.solution(...)` with `module.exports = { Solution }` for Node

PHPUnit tests import the namespaced class, e.g. `use FormatBytes\Solution;`, then call `Solution::solution(...)`.

## Run tests

PHP runs in the Laradock **workspace** container (not on the host). From the Laradock directory:

```bash
cd ../laradock
docker-compose exec workspace bash
```

Inside the container (`/var/www` is the project root):

```bash
composer install
vendor/bin/phpunit -c phpunit.xml
```

Run a single task:

```bash
vendor/bin/phpunit -c phpunit.xml taskName/php/TaskNameTest.php
```

## Code style (PSR-12)

PHP_CodeSniffer is included as a dev dependency. Check or fix style from the project root:

```bash
composer lint
composer lint:fix
```

Or call PHPCS directly:

```bash
vendor/bin/phpcs --standard=phpcs.xml
vendor/bin/phpcbf --standard=phpcs.xml
```

One-liner from the host (Laradock directory):

```bash
docker-compose exec workspace bash -c "cd /var/www && vendor/bin/phpunit -c phpunit.xml"
```
