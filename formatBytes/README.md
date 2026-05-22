# Format Bytes

## Task

Given a non-negative integer **byte count**, return a human-readable string using **1024-based** units.

## Rules

- Units (in order): `B`, `KB`, `MB`, `GB`. Do not use larger units; values at or above 1 GB stay in `GB`.
- Base is **1024** (1 KB = 1024 B, 1 MB = 1024 KB, 1 GB = 1024 MB).
- If the value is **less than 1024** bytes, show the integer followed by ` B` with **no** decimal (e.g. `512 B`).
- If the value is **1024 or more**, pick the largest unit where the numeric part is at least `1` and (for units below GB) strictly less than `1024`, then format as **one decimal place** followed by a space and the unit (e.g. `1.5 KB`, `1.0 MB`).
- Use standard rounding for the single decimal (`sprintf('%.1f', …)` or equivalent).

## Input

- `bytes` — a non-negative integer (0 is allowed).

## Output

- A string such as `"512 B"`, `"1.5 KB"`, `"1.0 MB"`, `"10.0 GB"`.

## Examples

| Input | Output |
|-------|--------|
| `512` | `"512 B"` |
| `1023` | `"1023 B"` |
| `1024` | `"1.0 KB"` |
| `1536` | `"1.5 KB"` |
| `1048576` | `"1.0 MB"` |
| `1073741824` | `"1.0 GB"` |

```text
Input:  512
Output: 512 B
```

```text
Input:  1536
Output: 1.5 KB
```

```text
Input:  1048576
Output: 1.0 MB
```

## Function signature

```php
function formatBytes(int $bytes): string
```

Implement this function in `php/format_bytes.php`.

## Run tests

From the repository root, install dependencies once:

```bash
composer install
```

From this task directory (`formatBytes`), run PHPUnit:

```bash
../vendor/bin/phpunit -c ../phpunit.xml ./FormatBytesTest.php
```

<p><strong>Run test:</strong> <code>../vendor/bin/phpunit -c ../phpunit.xml ./FormatBytesTest.php</code></p>
