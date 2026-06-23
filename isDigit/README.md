# Is Digit

## Task

Given a single character, return whether it is a decimal digit (`0` through `9`).

## Input

- `symbol` — one character (may be a digit, a letter, punctuation, etc.).

## Output

- `true` if `symbol` is a digit.
- `false` otherwise.

## Examples

| symbol | Output |
|--------|--------|
| `'1'` | `true` |
| `'9'` | `true` |
| `'o'` | `false` |

```text
Input:  symbol = '1'
Output: true
```

```text
Input:  symbol = '9'
Output: true
```

```text
Input:  symbol = 'o'
Output: false
```

## Function signature

```php
class Solution {
    public static function solution(...)
}
```

Implement in `php/is_digit.php`.

Call the solution with `Solution::solution(...)`.

## Run tests

From the repository root, install dependencies once:

```bash
composer install
```

From this task directory (`isDigit`), run PHPUnit:

```bash
../vendor/bin/phpunit -c ../phpunit.xml php/IsDigitTest.php
```

<p><strong>Run test:</strong> <code>../vendor/bin/phpunit -c ../phpunit.xml php/IsDigitTest.php</code></p>
