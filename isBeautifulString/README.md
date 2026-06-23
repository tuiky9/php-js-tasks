# Is Beautiful String

## Task

A lowercase string is called **beautiful** when letter counts never increase as you move through the alphabet:

- `count('b') ≤ count('a')`
- `count('c') ≤ count('b')`
- … and so on through `z`

Letters that do not appear count as zero. Given a string, return whether it is beautiful.

## Input

- `inputString` — a string of lowercase English letters (`3 ≤ inputString.length ≤ 50`; an empty string may appear in tests).

## Output

- `true` if the string is beautiful.
- `false` otherwise.

## Examples

| inputString | Output |
|-------------|--------|
| `""` | `true` (no violations) |
| `"abcdefghijklmnopqrstuvwxyz"` | `true` (each letter appears once) |

```text
Input:  inputString = ""
Output: true
```

```text
Input:  inputString = "abcdefghijklmnopqrstuvwxyz"
Output: true
```

Every letter appears exactly once, so each count equals the previous letter's count.

## Function signature

```php
class Solution {
    public static function solution(...)
}
```

Implement in `php/is_beautiful_string.php`.

Call the solution with `Solution::solution(...)`.

## Run tests

From the repository root, install dependencies once:

```bash
composer install
```

From this task directory (`isBeautifulString`), run PHPUnit:

```bash
../vendor/bin/phpunit -c ../phpunit.xml php/IsBeautifulStringTest.php
```

<p><strong>Run test:</strong> <code>../vendor/bin/phpunit -c ../phpunit.xml php/IsBeautifulStringTest.php</code></p>
