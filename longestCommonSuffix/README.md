# Longest Common Suffix

## Task

Given an array of strings, find the **longest common suffix** shared by **all** strings in the array.

A **suffix** is a contiguous sequence of characters at the **end** of a string. For example, `"ing"` is a suffix of `"flying"`.

## Rules

- Compare suffixes from the end of each string, character by character.
- Return the longest substring that appears at the end of every string in the array.
- If the array is **empty**, return `""`.
- If any string is **empty**, return `""` (no non-empty suffix can be common to all).
- If there is **one** string in the array, return that entire string.
- If there is **no** common suffix, return `""`.

## Input

- `$strs` — array of strings.

## Output

- A string: the longest common suffix, or `""` when none exists.

## Examples

| Input | Output |
|-------|--------|
| `["barking", "parking", "starking"]` | `"arking"` |
| `["flower", "tower", "power"]` | `"ower"` |
| `["ab", "abc", "abcd"]` | `""` |
| `[]` | `""` |
| `["word"]` | `"word"` |

```text
Input:  ["hello", "jello"]
Output: "ello"
```

```text
Input:  ["alpha", "beta", "gamma"]
Output: "a"
```

```text
Input:  ["apple", "grapple", "pineapple"]
Output: "apple"
```

## Function signature

```php
class Solution {
    public function solution(array $strs): string
}
```

Implement in `php/longest_common_suffix.php`.

## Run tests

From this task directory (`longestCommonSuffix`), run PHPUnit:

```bash
../vendor/bin/phpunit -c ../phpunit.xml ./LongestCommonSuffixTest.php
```

<p><strong>Run test:</strong> <code>../vendor/bin/phpunit -c ../phpunit.xml ./LongestCommonSuffixTest.php</code></p>
