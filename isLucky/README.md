# Is Lucky

## Task

A ticket number has an **even** number of digits. It is **lucky** when the sum of the digits in the first half equals the sum of the digits in the second half.

Given a ticket number `n`, return whether it is lucky.

## Input

- `n` — a positive integer with an even number of digits (`10 ≤ n < 10⁶`).

## Output

- `true` if `n` is a lucky ticket number.
- `false` otherwise.

## Examples

| n | Output |
|---|--------|
| `11` | `true` (1 = 1) |
| `1001` | `true` (1 + 0 = 0 + 1) |
| `134008` | `true` (1 + 3 + 4 = 0 + 0 + 8) |

```text
Input:  n = 11
Output: true
```

```text
Input:  n = 1001
Output: true
```

```text
Input:  n = 134008
Output: true
```

(First half `134` sums to 8; second half `008` sums to 8.)

## Function signature

```php
class Solution {
    public static function solution(...)
}
```

Implement in `php/is_lucky.php`.

Call the solution with `Solution::solution(...)`.

## Run tests

From the repository root, install dependencies once:

```bash
composer install
```

From this task directory (`isLucky`), run PHPUnit:

```bash
../vendor/bin/phpunit -c ../phpunit.xml php/IsLuckyTest.php
```

<p><strong>Run test:</strong> <code>../vendor/bin/phpunit -c ../phpunit.xml php/IsLuckyTest.php</code></p>
