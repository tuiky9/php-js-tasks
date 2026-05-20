# Slugify Title

## Task

Convert a **title** string into a URL **slug**: lowercase, words separated by a single hyphen, with only ASCII letters and digits left in the result.

## Rules

- Convert the entire string to **lowercase**.
- Replace every maximal run of characters that are **not** `a-z` or `0-9` with a single `-`.
- Remove leading and trailing `-` characters from the result.
- If the input contains no letters or digits, return an empty string `""`.

## Input

- `title` — a string (may include spaces, punctuation, mixed case).

## Output

- A slug string using only `a-z`, `0-9`, and internal `-` separators.

## Examples

| Input | Output |
|-------|--------|
| `"Hello World!"` | `"hello-world"` |
| `"  Foo--Bar  "` | `"foo-bar"` |
| `"PHP 8.3 Release"` | `"php-8-3-release"` |
| `"!!!"` | `""` |
| `"already-a-slug"` | `"already-a-slug"` |

```text
Input:  "Hello World!"
Output: "hello-world"
```

```text
Input:  "  Foo--Bar  "
Output: "foo-bar"
```

```text
Input:  "Year 2024: Best Practices"
Output: "year-2024-best-practices"
```

## Function signature

```php
function slugifyTitle(string $title): string
```

Implement this function in `slugify_title.php`.

## Run tests

From the repository root, install dependencies once:

```bash
composer install
```

From this task directory (`slugifyTitle`), run PHPUnit:

```bash
../vendor/bin/phpunit -c ../phpunit.xml ./SlugifyTitleTest.php
```

<p><strong>Run test:</strong> <code>../vendor/bin/phpunit -c ../phpunit.xml ./SlugifyTitleTest.php</code></p>
