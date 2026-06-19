# Intersect Strings

## Task

Given two strings, `string1` and `string2`, build a new string `string3` from characters that appear in **both** inputs.

## Rules

- Walk through `string1` from left to right.
- Include a character in `string3` only if it is still available from `string2` (by remaining count).
- Preserve the **order** of characters as they appear in `string1`.
- If a character appears multiple times in both strings, include it in `string3` as many times as it occurs in **both**, but no more than the minimum frequency in either string.
- Expected time complexity: **O(|string1| + |string2|)**.

## Input

- `$string1` — first string.
- `$string2` — second string.

## Output

- A string containing the ordered intersection described above.

## Examples

| string1 | string2 | Output |
|---------|---------|--------|
| `"apple"` | `"peach"` | `"ape"` |
| `"abcd"` | `"dcba"` | `"abcd"` |
| `"aabbcc"` | `"abc"` | `"abc"` |
| `"aaaaa"` | `"b"` | `""` |
| `"abc"` | `"def"` | `""` |

```text
Input:  string1 = "interview", string2 = "review"
Output: "iervew"
```

```text
Input:  string1 = "aabbccdd", string2 = "bcda"
Output: "abcd"
```

```text
Input:  string1 = "python", string2 = "thonpy"
Output: "python"
```

## Function signature

```php
class Solution {
    public static function solution($string1, $string2): string
}
```

Implement in `php/intersect_strings.php`.

## Run tests

From this task directory (`intersectStrings`), run PHPUnit:

```bash
../vendor/bin/phpunit -c ../phpunit.xml ./IntersectStringsTest.php
```

<p><strong>Run test:</strong> <code>../vendor/bin/phpunit -c ../phpunit.xml ./IntersectStringsTest.php</code></p>
