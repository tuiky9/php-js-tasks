# CodeSignal (CodeFights) algorithms with problem description and solutions in PHP and Javascript.

## Project structure

Each task lives in its own folder:

```
taskName/
├── README.md           # Problem description
├── *Test.php           # PHPUnit tests (task root)
├── php/                # PHP solution
│   └── solution.php
└── js/                 # JavaScript solution
    └── solution.js
```

Some tasks have only a PHP or only a JavaScript solution; the other language folder may be empty.

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
vendor/bin/phpunit -c phpunit.xml taskName/TaskNameTest.php
```

One-liner from the host (Laradock directory):

```bash
docker-compose exec workspace bash -c "cd /var/www && vendor/bin/phpunit -c phpunit.xml"
```
