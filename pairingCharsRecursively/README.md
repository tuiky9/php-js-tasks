# Pairing Chars Recursively

## Task

You are given a string that contains only **digits** (`0`–`9`).

Reorder the string by **pairing characters from both ends** and writing each pair in order:

1. Take the first character and the last character, append them (first, then last).
2. Take the second character and the second-to-last character, append them the same way.
3. Continue until the whole string is processed.

If the string has an **odd** length, the middle character has no partner — leave it in the middle of the result unchanged.

Implement this using **recursion** (not a loop).

## Input

- `s` — a string of digits.

## Output

- A string of the same length with the pairing rule applied.

## Examples

| Input | Output | Explanation |
|-------|--------|-------------|
| `"abc789"` | `"a9b8c7"` | Pairs: `a`+`9`, `b`+`8`, `c`+`7` |
| `"abc"` | `"acb"` | Pairs: `a`+`c`; middle `b` stays |
| `"12"` | `"12"` | Single pair: `1` then `2` |
| `"5"` | `"5"` | One character, unchanged |

```text
Input:  "abc789"
Output: "a9b8c7"
```

```text
Input:  "abcde"
Output: "aebdc"
```

Pairs: `a`+`e`, `b`+`d`, middle `c` unchanged → `ae` + `bdc` = `aebdc`.

## Function signature

```php
function solve(string $s): string
```

Implement this function in `pairing_chars_recursively.php`.

## Run tests

From the repository root, install dependencies once:

```bash
composer install
```

From this task directory (`pairingCharsRecursively`), run PHPUnit:

```bash
../vendor/bin/phpunit -c ../phpunit.xml ./PairingCharsRecursivelyTest.php
```

<p><strong>Run test:</strong> <code>../vendor/bin/phpunit -c ../phpunit.xml ./PairingCharsRecursivelyTest.php</code></p>
