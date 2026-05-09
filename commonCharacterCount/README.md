# Common Character Count

## Task

You are given two strings. Count how many character positions can be paired between them so that each character is used at most once per occurrence: walk through the first string, and for each character remove one matching character from the second string (if any). The result is the number of successful pairings—equivalently, the sum over letters of the minimum of how many times that letter appears in each string.

## Input

- `s1` — first string  
- `s2` — second string  

Letters are case-sensitive (e.g. `a` and `A` are different).

## Output

A non-negative integer: the number of common characters counted as above.

## Examples

| s1 | s2 | Output |
|----|-----|--------|
| `"aabcc"` | `"adcaa"` | `3` (e.g. two `a` matches and one `c`) |
| `"zzzz"` | `"zzzzzzz"` | `4` |
| `"abca"` | `"xyzb"` | `1` (only `b`) |

```text
Input:  s1 = "aabcc", s2 = "adcaa"
Output: 3
```

```text
Input:  s1 = "a", s2 = "b"
Output: 0
```

## Run tests

From the repository root (`codesignal-master`), install dependencies once:

```bash
composer install
```

From this task directory (`commonCharacterCount`), run PHPUnit:

```bash
../vendor/bin/phpunit -c ../phpunit.xml ./CommonCharacterCountTest.php
```

<p><strong>Run test:</strong> <code>../vendor/bin/phpunit -c ../phpunit.xml ./CommonCharacterCountTest.php</code></p>
