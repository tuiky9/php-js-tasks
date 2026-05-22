# Parse Query String

## Task

Parse a URL **query string** into an associative array of string keys and string values.

Implement the parsing **manually** (do **not** use `parse_str()`).

## Rules

- The input may optionally start with `?`; strip it before parsing.
- Pairs are separated by `&`.
- Each pair is `key=value`. If `=` is missing, the value is an empty string `""`.
- Split each pair on the **first** `=` only (values may contain `=`).
- Apply `urldecode()` to both keys and values.
- If the same key appears more than once, the **last** occurrence wins.
- Ignore empty segments produced by trailing `&` (e.g. `a=1&` → one pair).
- An empty string (or only `?`) returns an empty array `[]`.

## Input

- `query` — a query string (with or without leading `?`).

## Output

- An associative array `key => value` (both strings).

## Examples

| Input | Output |
|-------|--------|
| `"foo=1&bar=2"` | `['foo' => '1', 'bar' => '2']` |
| `"?foo=1&bar=hello%20world"` | `['foo' => '1', 'bar' => 'hello world']` |
| `"a=1&a=2"` | `['a' => '2']` |
| `"flag"` | `['flag' => '']` |
| `""` | `[]` |

```text
Input:  "foo=1&bar=hello%20world"
Output: ['foo' => '1', 'bar' => 'hello world']
```

```text
Input:  "?x=10&y=20"
Output: ['x' => '10', 'y' => '20']
```

```text
Input:  "key=a%3Db"
Output: ['key' => 'a=b']
```

## Function signature

```php
function parseQueryString(string $query): array
```

Implement this function in `php/parse_query_string.php`.

## Run tests

From the repository root, install dependencies once:

```bash
composer install
```

From this task directory (`parseQueryString`), run PHPUnit:

```bash
../vendor/bin/phpunit -c ../phpunit.xml ./ParseQueryStringTest.php
```

<p><strong>Run test:</strong> <code>../vendor/bin/phpunit -c ../phpunit.xml ./ParseQueryStringTest.php</code></p>
