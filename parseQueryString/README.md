# Parse Query String

## Task

Convert a URL **query string** into an associative array mapping string keys to string values.

Build the parser **by hand** — do **not** call `parse_str()`.

Invoke your implementation via `Solution::solution(...)`.

## Rules

- If the string begins with `?`, remove that character before processing.
- Separate key-value pairs with `&`.
- Each pair has the form `key=value`. When no `=` is present, treat the value as `""`.
- Divide each pair at the **first** `=` only (values may include additional `=` signs).
- Run `urldecode()` on every key and value.
- When a key is repeated, keep only the **last** value assigned to it.
- Skip empty segments from a trailing `&` (e.g. `a=1&` yields one pair).
- Return `[]` for an empty string or a string that is only `?`.

## Input

- `query` — a query string, with or without a leading `?`.

## Output

- An associative array of `key => value` pairs (both strings).

## Examples

| Input | Output |
|-------|--------|
| `"?"` | `[]` |
| `"q=1%262"` | `['q' => '1&2']` |
| `"user%20name=Ann"` | `['user name' => 'Ann']` |
| `"eq=a=b=c"` | `['eq' => 'a=b=c']` |
| `"msg=hello+world"` | `['msg' => 'hello world']` |

```text
Input:  "x=1&y=2&"
Output: ['x' => '1', 'y' => '2']
```

```text
Input:  "a=1&&b=2"
Output: ['a' => '1', 'b' => '2']
```

```text
Input:  "empty="
Output: ['empty' => '']
```

## Function signature

```php
class Solution {
    public static function solution(...)
}
```

Implement this function in `php/parse_query_string.php`.

## Run tests

From the repository root, install dependencies once:

```bash
composer install
```

From this task directory (`parseQueryString`), run PHPUnit:

```bash
../vendor/bin/phpunit -c ../phpunit.xml php/ParseQueryStringTest.php
```

<p><strong>Run test:</strong> <code>../vendor/bin/phpunit -c ../phpunit.xml php/ParseQueryStringTest.php</code></p>
