# Spiral Numbers

## Task

Build an `n × n` square matrix filled with integers from `1` to `n * n` in **clockwise spiral** order, starting at the top-left corner.

## Rules

- The matrix has exactly `n` rows and `n` columns.
- Numbers `1` through `n * n` each appear exactly once.
- Fill order: right along the top row, down the right column, left along the bottom row, up the left column, then continue inward.

## Input

- `$n` — positive integer matrix size (`3 ≤ n ≤ 100`).

## Output

- `n × n` 2D array of integers in spiral order.

## Examples

For `n = 3`, the output is:

```text
[[1, 2, 3],
 [8, 9, 4],
 [7, 6, 5]]
```

For `n = 4`, the output is:

```text
[[1,  2,  3,  4],
 [12, 13, 14, 5],
 [11, 16, 15, 6],
 [10, 9,  8,  7]]
```

## Function signature

```php
class Solution {
    public static function solution(int $n): array
}
```

Implement this function in `php/spiral_numbers.php`.

Call the solution with `Solution::solution(...)`.

## Run tests

From the repository root, install dependencies once:

```bash
composer install
```

From this task directory (`spiralNumbers`), run PHPUnit:

```bash
../vendor/bin/phpunit -c ../phpunit.xml php/SpiralNumbersTest.php
```

<p><strong>Run test:</strong> <code>../vendor/bin/phpunit -c ../phpunit.xml php/SpiralNumbersTest.php</code></p>
