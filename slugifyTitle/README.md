# Slugify Title

## Task

Turn a **title** string into a URL **slug**: lowercase text with words joined by single hyphens, keeping only ASCII letters and digits.

## Rules

- Lowercase the entire string.
- Replace each maximal run of characters that are **not** `a-z` or `0-9` with a single `-`.
- Strip leading and trailing `-` characters.
- When the input has no letters or digits, return `""`.

## Input

- `title` — a string (may contain spaces, punctuation, mixed case).

## Output

- A slug containing only `a-z`, `0-9`, and internal `-` separators.

## Examples

| Input | Output |
|-------|--------|
| `"Article"` | `"article"` |
| `"12345"` | `"12345"` |
| `"foo_bar_baz"` | `"foo-bar-baz"` |
| `"Dr. Smith Goes Home"` | `"dr-smith-goes-home"` |
| `"--trim-me--"` | `"trim-me"` |

```text
Input:  "Article"
Output: "article"
```

```text
Input:  "foo_bar_baz"
Output: "foo-bar-baz"
```

```text
Input:  "Dr. Smith Goes Home"
Output: "dr-smith-goes-home"
```

## Function signature

```php
class Solution {
    public static function solution(...)
}
```

Implement this function in `php/slugify_title.php`.

Call the solution with `Solution::solution(...)`.

## Run tests

From the repository root, install dependencies once:

```bash
composer install
```

From this task directory (`slugifyTitle`), run PHPUnit:

```bash
../vendor/bin/phpunit -c ../phpunit.xml php/SlugifyTitleTest.php
```

<p><strong>Run test:</strong> <code>../vendor/bin/phpunit -c ../phpunit.xml php/SlugifyTitleTest.php</code></p>
