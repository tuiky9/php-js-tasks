# First Digit

## Task

Scan a string from left to right and return the **first** character that is a decimal digit (`0`–`9`).

The string is guaranteed to contain at least one digit.

## Input

- `inputString` — a string with at least one digit (`3 ≤ inputString.length ≤ 10`).

## Output

A single character: the leftmost digit found in the string.

## Examples

| inputString | Output |
|-------------|--------|
| `"var_1__Int"` | `'1'` |
| `"q2q-q"` | `'2'` |
| `"0ss"` | `'0'` |
| `"abc123"` | `'1'` |

```text
Input:  inputString = "var_1__Int"
Output: 1
```

```text
Input:  inputString = "0ss"
Output: 0
```

## Function signature

```php
class Solution {
    public static function solution(...)
}
```

Implement in `php/first_digit.php`.

Call the solution with `Solution::solution(...)`.

## Run tests

From the repository root, install dependencies once:

```bash
composer install
```

From this task directory (`firstDigit`), run PHPUnit:

```bash
../vendor/bin/phpunit -c ../phpunit.xml php/FirstDigitTest.php
```

<p><strong>Run test:</strong> <code>../vendor/bin/phpunit -c ../phpunit.xml php/FirstDigitTest.php</code></p>
