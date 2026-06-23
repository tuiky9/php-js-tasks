# Secondary Diagonal Min Max

## Task

Given a square integer matrix `grid`, determine the **minimum** and **maximum** values lying on the **secondary diagonal** (anti-diagonal).

The secondary diagonal runs from the **top-right** to the **bottom-left**. In an `n x n` matrix, its entries are:

`grid[0][n - 1]`, `grid[1][n - 2]`, …, `grid[n - 1][0]`

Return a two-element array `[min, max]` containing the smallest and largest values on that diagonal.

## Rules

- `grid` is square (`n` rows, each with `n` columns).
- When `grid` is empty (`n === 0`), return `[null, null]`.
- Consider only secondary-diagonal cells (exactly `n` cells for an `n x n` grid).
- Target time complexity: **O(n)**, where `n` is the side length.

## Input

- `$grid` — square 2D array of integers (may be empty).

## Output

- A two-element array `[minimum, maximum]` on the secondary diagonal, or `[null, null]` for an empty grid.

## Examples

Given:

```text
[
  [1, 2, 4],
  [3, 4, 5],
  [4, 6, 7]
]
```

Secondary diagonal values are `4, 4, 4`, so return `[4, 4]`.

```text
Input:  grid = [[0, -1, -5], [2, -3, 4], [7, 6, 1]]
Output: [-5, 7]
```

```text
Input:  grid = [[1, 2, 3, 4], [5, 6, 7, 8], [9, 10, 11, 12], [13, 14, 15, 16]]
Output: [4, 13]
```

```text
Input:  grid = [[100, 0, 0], [0, 50, 0], [0, 0, 1]]
Output: [0, 50]
```

## Function signature

```php
class Solution {
    public static function solution(...)
}
```

Implement in `php/secondary_diagonal_min_max.php`.

Call the solution with `Solution::solution(...)`.

```javascript
class Solution {
    static solution(...)
}
```

Implement in `js/secondary_diagonal_min_max.js`.

## Run tests

From the repository root, install dependencies once:

```bash
composer install
```

From this task directory (`secondaryDiagonalMinMax`), run PHPUnit:

```bash
../vendor/bin/phpunit -c ../phpunit.xml php/SecondaryDiagonalMinMaxTest.php
```

<p><strong>Run test:</strong> <code>../vendor/bin/phpunit -c ../phpunit.xml php/SecondaryDiagonalMinMaxTest.php</code></p>
