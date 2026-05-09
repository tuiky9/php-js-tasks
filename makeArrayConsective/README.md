# Make Array Consecutive 2

## Task

Ratiorg has statues of different non-negative integer sizes. He wants them in order so that, between the smallest and largest size he already has, every integer size appears exactly once—each statue exactly one larger than the previous. Compute the **minimum number of additional statues** he must obtain to fill every gap in that range (sizes he does not yet have).

## Input

- `statues` — array of distinct non-negative integers (the sizes he already has).

## Output

A non-negative integer: how many statue sizes are missing between `min(statues)` and `max(statues)` inclusive.

## Examples

| statues | Output | Explanation |
|---------|--------|---------------|
| `[6, 2, 3, 8]` | `3` | Range 2–8 needs sizes 4, 5, 7 — three missing. |
| `[0, 3]` | `2` | Need 1 and 2. |
| `[5]` | `0` | Only one statue; no gaps to fill. |
| `[2, 4, 6]` | `2` | Range 2–6; missing 3 and 5. |

```text
Input:  [6, 2, 3, 8]
Output: 3
```

```text
Input:  [5]
Output: 0
```

## Run tests

From the repository root (`codesignal-master`), install dependencies once:

```bash
composer install
```

From this task directory (`makeArrayConsective`), run PHPUnit:

```bash
../vendor/bin/phpunit -c ../phpunit.xml ./MakeArrayConsecutive2Test.php
```

<p><strong>Run test:</strong> <code>../vendor/bin/phpunit -c ../phpunit.xml ./MakeArrayConsecutive2Test.php</code></p>
