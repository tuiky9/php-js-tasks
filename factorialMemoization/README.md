# Factorial with Memoization

## Task

Calculate the factorial of a non-negative integer using recursion and
**memoization**.

The function receives a memo array by reference. Before calculating a
factorial, check whether that result is already stored. Newly calculated
results must be added to the memo so they can be reused by later calls.

The factorial of `n`, written as `n!`, is the product of all positive integers
from `1` through `n`. By definition, both `0!` and `1!` equal `1`.

## Rules

- Use a recursive, memoized solution.
- Do not recalculate a value that already exists in `$memo`.
- Store newly calculated factorials in `$memo`.
- Throw `InvalidArgumentException` when `$n` is negative.
- Expected time complexity for an uncached input: **O(n)**.
- A cached lookup should take **O(1)** time.

## Input

- `$n` — non-negative integer whose factorial should be calculated.
- `$memo` — memoization array passed by reference.

## Output

- The factorial of `$n` as an integer.

## Examples

```text
Input:  n = 5, memo = []
Output: 120
Memo:   [2 => 2, 3 => 6, 4 => 24, 5 => 120]
```

```text
Input:  n = 0, memo = []
Output: 1
```

```text
Input:  n = 6, memo = [5 => 120]
Output: 720
Memo:   [5 => 120, 6 => 720]
```

## Function signature

```php
class Solution
{
    public static function solution(int $n, array &$memo): int
}
```

Implement this in `php/factorial_memoization.php`.

Call the solution with `Solution::solution($n, $memo)`.

## Run tests

From the repository root, install dependencies once:

```bash
composer install
```

From this task directory (`factorialMemoization`), run PHPUnit:

```bash
../vendor/bin/phpunit -c ../phpunit.xml php/FactorialMemoizationTest.php
```

<p><strong>Run test:</strong> <code>../vendor/bin/phpunit -c ../phpunit.xml php/FactorialMemoizationTest.php</code></p>
