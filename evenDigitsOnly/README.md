# Even Digits Only

## Task

Given a non-negative integer, decide whether **every decimal digit** in its representation is even (`0`, `2`, `4`, `6`, or `8`).

Return `true` when all digits are even; otherwise return `false`.

## Input

- `n` — a non-negative integer (`0 ≤ n ≤ 10⁹`; tests include `0`).

## Output

- `true` if every digit of `n` is even.
- `false` if at least one digit is odd.

## Examples

| n | Output |
|---|--------|
| `0` | `true` |
| `8` | `true` |
| `13579` | `false` (all digits are odd) |

```text
Input:  n = 0
Output: true
```

```text
Input:  n = 8
Output: true
```

```text
Input:  n = 13579
Output: false
```

## Function signature

```php
class Solution {
    public static function solution(...)
}
```

Implement in `php/even_digits_only.php`.

Call the solution with `Solution::solution(...)`.

## Run tests

From the repository root, install dependencies once:

```bash
composer install
```

From this task directory (`evenDigitsOnly`), run PHPUnit:

```bash
../vendor/bin/phpunit -c ../phpunit.xml php/EvenDigitsOnlyTest.php
```

<p><strong>Run test:</strong> <code>../vendor/bin/phpunit -c ../phpunit.xml php/EvenDigitsOnlyTest.php</code></p>
