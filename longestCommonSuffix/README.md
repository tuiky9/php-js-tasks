# Longest Common Suffix

## Task

You are given an array of strings. Return the **longest common suffix** that appears at the end of **every** string in the array.

A **suffix** is a contiguous substring at the **end** of a string — for instance, `"ing"` is a suffix of `"flying"`.

## Rules

- Walk backward through the strings, comparing characters from the end.
- Return the longest substring shared as a suffix by all strings.
- If the array is **empty**, return `""`.
- If any string is **empty**, return `""` (no non-empty suffix can be shared by all).
- If the array has **one** string, return that entire string.
- If no suffix is shared, return `""`.

## Input

- `$strs` — array of strings.

## Output

- A string: the longest common suffix, or `""` if none exists.

## Examples

| Input | Output |
|-------|--------|
| `["racer", "placer", "effacer"]` | `"acer"` |
| `["introduction", "reduction", "production", "seduction"]` | `"duction"` |
| `["a", "aa", "aaa"]` | `"a"` |
| `["communication", "station", "vacation", "nation"]` | `"ation"` |

```text
Input:  ["spoon", "moon", "balloon", "cartoon", "raccoon"]
Output: "oon"
```

```text
Input:  ["transformation", "information", "formation", "automation"]
Output: "mation"
```

```text
Input:  ["ab", "abc", "abcd"]
Output: ""
```

## Function signature

```php
class Solution {
    public static function solution(...)
}
```

Implement in `php/longest_common_suffix.php`.

Call the solution with `Solution::solution(...)`.

## Run tests

From the repository root, install dependencies once:

```bash
composer install
```

From this task directory (`longestCommonSuffix`), run PHPUnit:

```bash
../vendor/bin/phpunit -c ../phpunit.xml php/LongestCommonSuffixTest.php
```

<p><strong>Run test:</strong> <code>../vendor/bin/phpunit -c ../phpunit.xml php/LongestCommonSuffixTest.php</code></p>
