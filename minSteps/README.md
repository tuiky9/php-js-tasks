# Minimum Steps to a Number

## Task

Start with the number `0`. On each step, you may perform exactly one of these
operations:

1. Add `1` to the current number.
2. Multiply the current number by `2`.

Given an integer `n`, determine the minimum number of operations needed to
reach `n`.

Use dynamic programming rather than checking every possible sequence of
operations.

## Rules

- Return `-1` when `$n` is negative because it cannot be reached using the
  allowed operations.
- Return `0` when `$n` is `0`.
- Expected time complexity: **O(n)**.
- Expected additional memory: **O(n)**.

## Input

- `$n` — target integer.

## Output

- Minimum number of operations required to transform `0` into `$n`, or `-1`
  when the target is negative.

## Example

For `n = 10`, the minimum is `5` steps:

```text
0 + 1 = 1
1 * 2 = 2
2 * 2 = 4
4 + 1 = 5
5 * 2 = 10
```

```text
Input:  n = 10
Output: 5
```

```text
Input:  n = 0
Output: 0
```

```text
Input:  n = -3
Output: -1
```

## Function signature

```php
class Solution
{
    public static function solution(int $n): int
}
```

Implement this in `php/min_steps.php`.

Call the solution with `Solution::solution($n)`.

## Run tests

From the repository root, install dependencies once:

```bash
composer install
```

From this task directory (`minSteps`), run PHPUnit:

```bash
../vendor/bin/phpunit -c ../phpunit.xml php/MinStepsTest.php
```

<p><strong>Run test:</strong> <code>../vendor/bin/phpunit -c ../phpunit.xml php/MinStepsTest.php</code></p>
