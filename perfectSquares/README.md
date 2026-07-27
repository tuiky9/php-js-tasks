# Perfect Squares

## Task

Given a positive integer `n`, find the **smallest number of perfect squares** that add up to exactly `n`.

A perfect square is an integer of the form `k × k` for some integer `k` (for example `1`, `4`, `9`, `16`). The same square may be used more than once.

Use dynamic programming. Expected time complexity: **O(n · √n)**.

## Rules

- `$n` is a positive integer.
- Squares may be reused freely.
- Return the size of the shortest sum, not the squares themselves.
- Expected additional memory: **O(n)**.

## Input

- `$n` — positive target integer.

## Output

- Minimum count of perfect squares that sum to `$n`.

## Example

For `n = 12`, the shortest sum uses three squares:

```text
4 + 4 + 4 = 12
```

So the answer is `3`. (Using twelve `1`s also works, but that is not minimal.)

```text
Input:  n = 12
Output: 3
```

```text
Input:  n = 16
Output: 1
```

```text
Input:  n = 7
Output: 4
```

## Function signature

```php
class Solution
{
    public static function solution(int $n): int
}
```

Implement this in `php/perfect_squares.php`.

Call the solution with `Solution::solution($n)`.

## Run tests

From the repository root, install dependencies once:

```bash
composer install
```

From this task directory (`perfectSquares`), run PHPUnit:

```bash
../vendor/bin/phpunit -c ../phpunit.xml php/PerfectSquaresTest.php
```

<p><strong>Run test:</strong> <code>../vendor/bin/phpunit -c ../phpunit.xml php/PerfectSquaresTest.php</code></p>
