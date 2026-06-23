# Is IPv4 Address

## Task

Decide whether a string is a valid **IPv4 address**.

An IPv4 address has exactly **four** parts separated by dots. Each part is a decimal number from **0** to **255** with no extra characters before, after, or between parts.

## Rules

- Format: `A.B.C.D` where each of `A`, `B`, `C`, `D` is an integer in `[0, 255]`.
- Exactly three dot separators and four numeric segments.
- No letters or stray characters (e.g. `"1.1.1.1a"` is invalid).
- Empty segments are invalid (e.g. `".254.255.0"` is invalid).
- Values above 255 are invalid (e.g. `316` in a segment).

## Input

- `inputString` — a string of digits, dots, and possibly letters (`1 ≤ inputString.length ≤ 30`).

## Output

- `true` if `inputString` is a valid IPv4 address.
- `false` otherwise.

## Examples

| inputString | Output |
|-------------|--------|
| `"0.0.0.0"` | `true` |
| `"1.1.1.1a"` | `false` (trailing letter) |

```text
Input:  inputString = "0.0.0.0"
Output: true
```

```text
Input:  inputString = "1.1.1.1a"
Output: false
```

## Function signature

```php
class Solution {
    public static function solution(...)
}
```

Implement in `php/is_ipv4_address.php`.

Call the solution with `Solution::solution(...)`.

## Run tests

From the repository root, install dependencies once:

```bash
composer install
```

From this task directory (`isIPv4Address`), run PHPUnit:

```bash
../vendor/bin/phpunit -c ../phpunit.xml php/IsIPv4AddressTest.php
```

<p><strong>Run test:</strong> <code>../vendor/bin/phpunit -c ../phpunit.xml php/IsIPv4AddressTest.php</code></p>
