# Climbing Stairs

## Task

You are standing before a staircase containing `n` steps. Starting at step `0`,
you may move upward by either **one step** or **two steps** at a time.

Calculate how many distinct sequences of moves reach exactly step `n`. Use
dynamic programming instead of exploring every possible sequence recursively.

## Rules

- At each move, climb either `1` or `2` steps.
- The result counts different move sequences, not just combinations.
- For `n = 0`, return `1` because the empty sequence is one valid way to remain
  at the starting position.
- Throw `InvalidArgumentException` when `$n` is negative.
- Expected time complexity: **O(n)**.
- The result is guaranteed to fit in a PHP integer.

## Input

- `$n` — non-negative number of stairs.

## Output

- Number of distinct ways to reach stair `$n`.

## Examples

For `n = 4`, the five possible move sequences are:

```text
1 + 1 + 1 + 1
1 + 1 + 2
1 + 2 + 1
2 + 1 + 1
2 + 2
```

```text
Input:  n = 4
Output: 5
```

```text
Input:  n = 3
Output: 3
```

```text
Input:  n = 0
Output: 1
```

## Function signature

```php
class Solution
{
    public static function solution(int $n): int
}
```

Implement this in `php/climbing_stairs.php`.

Call the solution with `Solution::solution($n)`.

## Run tests

From the repository root, install dependencies once:

```bash
composer install
```

From this task directory (`climbingStairs`), run PHPUnit:

```bash
../vendor/bin/phpunit -c ../phpunit.xml php/ClimbingStairsTest.php
```

<p><strong>Run test:</strong> <code>../vendor/bin/phpunit -c ../phpunit.xml php/ClimbingStairsTest.php</code></p>
