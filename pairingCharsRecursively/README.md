# Pairing Chars Recursively

## Task

You are given a string containing only **digits** (`0`–`9`).

Rebuild the string by **pairing characters from opposite ends**, writing each pair left to right:

1. Take the first and last characters and append them (first, then last).
2. Take the second and second-to-last characters the same way.
3. Repeat until every character is placed.

If the length is **odd**, the center character has no partner — it stays in the middle of the result.

Solve this with **recursion** (no loops).

Call the solution with `Solution::solution(...)`.

## Input

- `s` — a string of digits.

## Output

- A string of the same length after applying the pairing rule.

## Examples

| Input | Output | Explanation |
|-------|--------|-------------|
| `"1234"` | `"1423"` | Pairs: `1`+`4`, `2`+`3` |
| `"246813"` | `"234168"` | Pairs: `2`+`3`, `4`+`1`, `6`+`8` |
| `"1234567"` | `"1726354"` | Pairs: `1`+`7`, `2`+`6`, `3`+`5`; middle `4` stays |
| `"1111"` | `"1111"` | All pairs are `1`+`1` |

```text
Input:  "abcde"
Output: "aebdc"
```

Pairs: `a`+`e`, `b`+`d`; middle `c` unchanged.

```text
Input:  ""
Output: ""
```

## Function signature

```php
class Solution {
    public static function solution(...)
}
```

Implement this function in `php/pairing_chars_recursively.php`.

## Run tests

From the repository root, install dependencies once:

```bash
composer install
```

From this task directory (`pairingCharsRecursively`), run PHPUnit:

```bash
../vendor/bin/phpunit -c ../phpunit.xml php/PairingCharsRecursivelyTest.php
```

<p><strong>Run test:</strong> <code>../vendor/bin/phpunit -c ../phpunit.xml php/PairingCharsRecursivelyTest.php</code></p>
