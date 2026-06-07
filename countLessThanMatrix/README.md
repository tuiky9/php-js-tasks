# Count Less Than in Sorted Matrix

## Task

You are given a rectangular matrix of integers with these ordering properties:

- Each **row** is sorted in **non-decreasing** order (left to right).
- Each **column** is sorted in **non-decreasing** order (top to bottom).

Because of this structure, values generally **increase** as you move **right** or **down**, and **decrease** as you move **left** or **up**.

Given such a matrix and an integer **target**, count how many values in the matrix are **strictly less than** `target`.

## Rules

- Count only values where `matrix[row][col] < target` (equal values are **not** counted).
- Return `0` for an empty matrix or a matrix with zero columns.
- Expected time complexity: **O(n + m)**, where `n` is the number of rows and `m` is the number of columns.
- A common approach is to start from the **bottom-left** corner and walk toward the top or right.

## Input

- `$matrix` — a 2D array of integers (rows × columns).
- `$target` — integer threshold.

## Output

- Integer count of matrix elements strictly less than `$target`.

## Examples

Given matrix:

```text
[
  [1, 2, 3, 4],
  [2, 3, 4, 5],
  [3, 4, 5, 6],
  [4, 5, 6, 7]
]
```

and `target = 5`, return `10` because these values are less than `5`:

`1, 2, 3, 4, 2, 3, 4, 3, 4, 4`

```text
Input:  matrix = [[1, 4], [2, 5]], target = 3
Output: 2
```

(Values `1` and `2` are less than `3`.)

```text
Input:  matrix = [[5, 6], [7, 8]], target = 5
Output: 0
```

(No value is strictly less than `5`.)

```text
Input:  matrix = [[1, 2], [3, 4]], target = 10
Output: 4
```

(All four values are less than `10`.)

## Function signature

```php
class Solution {
    public static function countLessThan($matrix, $target): int
}
```

Implement in `php/count_less_than_matrix.php`.

## Run tests

From this task directory (`countLessThanMatrix`), run PHPUnit:

```bash
../vendor/bin/phpunit -c ../phpunit.xml ./CountLessThanMatrixTest.php
```

<p><strong>Run test:</strong> <code>../vendor/bin/phpunit -c ../phpunit.xml ./CountLessThanMatrixTest.php</code></p>
