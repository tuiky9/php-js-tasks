# Repeated Character Lowest Index

## Task

Given a string, return the **first repeating character** — the one whose **first appearance** in the string occurs before the first appearance of any other repeating character.

If no character appears more than once, return `null`.

## Rules

- A character must appear **at least twice** to count as repeating.
- Compare characters by the index of their **first occurrence**, not by the index where the duplicate is found.
- Return a **single-character string** (e.g. `'b'`), not a numeric index.
- An empty string or a string with all unique characters returns `null`.
- Expected time complexity: **O(n)**.

## Input

- `$str` — input string (may be empty).

## Output

- The earliest repeating character as a one-character string, or `null` if none exists.

## Examples

| Input | Output | Why |
|-------|--------|-----|
| `''` | `null` | empty string |
| `'abcd'` | `null` | every character is unique |
| `'abcdb'` | `'b'` | `b` is the only repeating character |
| `'bab'` | `'b'` | both `b` and later repeats exist, but `b`'s first occurrence is earliest |
| `'abccdccdd1888922kka'` | `'a'` | `a` repeats and its first occurrence is before other repeats |

```text
Input:  str = "abcdb"
Output: "b"
```

```text
Input:  str = "bab"
Output: "b"
```

```text
Input:  str = "abccdccdd1888922kka"
Output: "a"
```

## Function signature

```php
namespace RepeatedCharsLowestIndex;

class Solution {
    public static function solution(string $str): ?string
}
```

Implement this in `php/repeated_chars_lowest_index.php`.

Call the solution with `Solution::solution($str)`.

## Run tests

From the repository root, install dependencies once:

```bash
composer install
```

From this task directory (`repeatedCharsLowestIndex`), run PHPUnit:

```bash
../vendor/bin/phpunit -c ../phpunit.xml php/RepeatedCharsLowestIndexTest.php
```

<p><strong>Run test:</strong> <code>../vendor/bin/phpunit -c ../phpunit.xml php/RepeatedCharsLowestIndexTest.php</code></p>
