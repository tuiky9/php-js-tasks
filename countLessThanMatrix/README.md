# Count Less Than in Sorted Matrix

## Task

You are given a rectangular matrix of integers with these ordering properties:

- Every **row** is sorted in **non-decreasing** order (values do not decrease left to right).
- Every **column** is sorted in **non-decreasing** order (values do not decrease top to bottom).

Because of this layout, values tend to grow as you move right or down and shrink as you move left or up.

For a given integer **target**, count how many matrix entries are **strictly less than** `target`.

## Rules

- Include only cells where `matrix[row][col] < target` (values equal to `target` are excluded).
- Return `0` for an empty matrix or a matrix with zero columns.
- Expected time complexity: **O(n + m)**, where `n` is the row count and `m` is the column count.
- A typical strategy starts at the **bottom-left** corner and walks toward the top or right.

## Input

- `$matrix` — a 2D array of integers (rows × columns).
- `$target` — integer threshold.

## Output

- Integer count of elements strictly below `$target`.

## Examples

```text
Input:  matrix = [[4]], target = 5
Output: 1
```

```text
Input:  matrix = [[-5, 0], [1, 3]], target = 1
Output: 2
```

(Values `-5` and `0` are strictly less than `1`.)

```text
Input:  matrix = [[1, 2, 2], [2, 3, 4]], target = 2
Output: 1
```

(Only the single `1` counts; equal values are excluded.)

```text
Input:  matrix = [[1, 3, 5, 7]], target = 5
Output: 2
```

(Values `1` and `3` are less than `5`.)

## Function signature

```php
class Solution {
    public static function solution(...)
}
```

Implement in `php/count_less_than_matrix.php`.

Call the solution with `Solution::solution(...)`.

```javascript
class Solution {
    static solution(...)
}
```

Implement in `js/count_less_than_matrix.js`.

## Run tests

From the repository root, install dependencies once:

```bash
composer install
```

From this task directory (`countLessThanMatrix`), run PHPUnit:

```bash
../vendor/bin/phpunit -c ../phpunit.xml php/CountLessThanMatrixTest.php
```

<p><strong>Run test:</strong> <code>../vendor/bin/phpunit -c ../phpunit.xml php/CountLessThanMatrixTest.php</code></p>
