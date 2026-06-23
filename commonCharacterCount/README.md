# Common Character Count

## Task

You have two strings. Count how many characters can be matched between them when each character may be used at most once: scan the first string left to right, and for each character remove one equal character from the second string if one remains. The answer is the total number of successful matches—or, for each letter, the minimum of its counts in the two strings, summed over all letters.

## Input

- `s1` — first string  
- `s2` — second string  

Matching is **case-sensitive** (`a` and `A` are different characters).

## Output

A non-negative integer: the common character count as defined above.

## Examples

| s1 | s2 | Output |
|----|-----|--------|
| `"Aa"` | `"aA"` | `2` |
| `"abc"` | `"bca"` | `3` |
| `"hello"` | `"hello"` | `5` |
| `"aaa"` | `"aa"` | `2` |

```text
Input:  s1 = "A", s2 = "a"
Output: 0
```

```text
Input:  s1 = "", s2 = ""
Output: 0
```

```text
Input:  s1 = "abc", s2 = ""
Output: 0
```

## Run tests

From the repository root, install dependencies once:

```bash
composer install
```

From this task directory (`commonCharacterCount`), run PHPUnit:

```bash
../vendor/bin/phpunit -c ../phpunit.xml php/CommonCharacterCountTest.php
```

<p><strong>Run test:</strong> <code>../vendor/bin/phpunit -c ../phpunit.xml php/CommonCharacterCountTest.php</code></p>
