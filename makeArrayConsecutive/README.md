# Make Array Consecutive 2

## Task

Ratiorg owns statues with distinct non-negative integer heights. He wants a complete consecutive sequence from his smallest statue to his largest — every integer height in that range represented exactly once. Find the **minimum number of new statues** he must acquire to fill every missing height in the range.

## Input

- `statues` — array of distinct non-negative integers (heights he already owns).

## Output

A non-negative integer: how many heights between `min(statues)` and `max(statues)` inclusive are not yet in his collection.

## Examples

| statues | Output | Explanation |
|---------|--------|-------------|
| `[1, 2, 3, 4, 5]` | `0` | Already a full consecutive run. |
| `[0, 1, 100]` | `98` | Range 0–100; only 0 and 1 present — 98 missing. |
| `[9, 1, 5]` | `6` | Range 1–9; missing 2, 3, 4, 6, 7, 8. |
| `[10, 11]` | `0` | Two adjacent heights; nothing to add. |

```text
Input:  [0, 3]
Output: 2
```

```text
Input:  [2, 4, 6]
Output: 2
```

## Run tests

From the repository root, install dependencies once:

```bash
composer install
```

From this task directory (`makeArrayConsecutive`), run PHPUnit:

```bash
../vendor/bin/phpunit -c ../phpunit.xml php/MakeArrayConsecutive2Test.php
```

<p><strong>Run test:</strong> <code>../vendor/bin/phpunit -c ../phpunit.xml php/MakeArrayConsecutive2Test.php</code></p>
