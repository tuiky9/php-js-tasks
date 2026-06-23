# Intersect Strings

## Task

Given two strings, `string1` and `string2`, build a new string from characters that appear in **both** inputs.

## Rules

- Walk through `string1` from left to right.
- Include a character in the result only if it is still available from `string2` (by remaining count).
- Preserve the **order** of characters as they appear in `string1`.
- If a character appears multiple times in both strings, include it as many times as it occurs in **both**, but no more than the minimum frequency in either string.
- Expected time complexity: **O(|string1| + |string2|)**.

## Input

- `$string1` — first string.
- `$string2` — second string.

## Output

A string containing the ordered intersection described above.

## Examples

| string1 | string2 | Output |
|---------|---------|--------|
| `"aaaa"` | `"aaaa"` | `"aaaa"` |
| `"abcdef"` | `"fedcba"` | `"abcdef"` |
| `"bbaa"` | `"ab"` | `"ba"` |
| `"hello world"` | `"loe"` | `"elo"` |
| `"axy"` | `"yxa"` | `"axy"` |

```text
Input:  string1 = "bbaa", string2 = "ab"
Output: ba
```

```text
Input:  string1 = "hello world", string2 = "loe"
Output: elo
```

```text
Input:  string1 = "axy", string2 = "yxa"
Output: axy
```

(Order follows `string1`, not `string2`.)

## Function signature

```php
class Solution {
    public static function solution(...)
}
```

Implement in `php/intersect_strings.php`.

Call the solution with `Solution::solution(...)`.

## Run tests

From the repository root, install dependencies once:

```bash
composer install
```

From this task directory (`intersectStrings`), run PHPUnit:

```bash
../vendor/bin/phpunit -c ../phpunit.xml php/IntersectStringsTest.php
```

<p><strong>Run test:</strong> <code>../vendor/bin/phpunit -c ../phpunit.xml php/IntersectStringsTest.php</code></p>
