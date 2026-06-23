# Format Bytes

## Task

Given a non-negative integer **byte count**, return a human-readable string using **1024-based** units.

## Rules

- Units (in order): `B`, `KB`, `MB`, `GB`. Do not use larger units; values at or above 1 GB stay in `GB`.
- Base is **1024** (1 KB = 1024 B, 1 MB = 1024 KB, 1 GB = 1024 MB).
- If the value is **less than 1024** bytes, show the integer followed by ` B` with **no** decimal (e.g. `999 B`).
- If the value is **1024 or more**, pick the largest unit where the numeric part is at least `1` and (for units below GB) strictly less than `1024`, then format as **one decimal place** followed by a space and the unit (e.g. `2.5 KB`, `1.5 MB`).
- Use standard rounding for the single decimal (`sprintf('%.1f', …)` or equivalent).

## Input

- `bytes` — a non-negative integer (0 is allowed).

## Output

- A string such as `"0 B"`, `"999 B"`, `"2.0 KB"`, `"1.5 MB"`, `"10.0 GB"`.

## Examples

| Input | Output |
|-------|--------|
| `0` | `"0 B"` |
| `999` | `"999 B"` |
| `2048` | `"2.0 KB"` |
| `2560` | `"2.5 KB"` |
| `1572864` | `"1.5 MB"` |
| `10737418240` | `"10.0 GB"` |

```text
Input:  0
Output: 0 B
```

```text
Input:  2560
Output: 2.5 KB
```

```text
Input:  1572864
Output: 1.5 MB
```

## Function signature

```php
class Solution {
    public static function solution(...)
}
```

Implement in `php/format_bytes.php`.

Call the solution with `Solution::solution(...)`.

## Run tests

From the repository root, install dependencies once:

```bash
composer install
```

From this task directory (`formatBytes`), run PHPUnit:

```bash
../vendor/bin/phpunit -c ../phpunit.xml php/FormatBytesTest.php
```

<p><strong>Run test:</strong> <code>../vendor/bin/phpunit -c ../phpunit.xml php/FormatBytesTest.php</code></p>
