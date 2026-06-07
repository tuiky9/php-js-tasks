# Secondary Diagonal Min Max

## Task

Given a square matrix `grid` of integers, find the **minimum** and **maximum** values on the **secondary diagonal** (anti-diagonal).

The secondary diagonal runs from the **top-right** corner to the **bottom-left** corner. For an `n x n` matrix, its cells are:

`grid[0][n - 1]`, `grid[1][n - 2]`, …, `grid[n - 1][0]`

Return a two-element list `[min, max]` with the smallest and largest values found on that diagonal.

## Rules

- `grid` is square (`n` rows, each with `n` columns).
- If `grid` is empty (`n === 0`), return `[null, null]`.
- Visit only secondary-diagonal cells (exactly `n` cells for an `n x n` grid).
- Expected time complexity: **O(n)**, where `n` is the row/column size.

## Input

- `$grid` — square 2D array of integers (may be empty).

## Output

- Array of two values: `[minimum, maximum]` on the secondary diagonal, or `[null, null]` when empty.

## Examples

Given:

```text
[
  [1, 2, 3],
  [4, 5, 6],
  [7, 8, 9]
]
```

Secondary diagonal values are `3, 5, 7`, so return `[3, 7]`.

```text
Input:  grid = [[5]]
Output: [5, 5]
```

```text
Input:  grid = []
Output: [null, null]
```

```text
Input:  grid = [[10, 20], [30, 40]]
Output: [20, 30]
```

(Diagonal values: `20`, `30`.)

## Function signature

```php
class Solution {
    public static function solution($grid): array
}
```

Implement in `php/secondary_diagonal_min_max.php`.

```javascript
function secondaryDiagonalMinMax(grid)
```

Implement in `js/secondary_diagonal_min_max.js`.

## Run tests

From this task directory (`secondaryDiagonalMinMax`), run PHPUnit:

```bash
../vendor/bin/phpunit -c ../phpunit.xml ./SecondaryDiagonalMinMaxTest.php
```

<p><strong>Run test:</strong> <code>../vendor/bin/phpunit -c ../phpunit.xml ./SecondaryDiagonalMinMaxTest.php</code></p>
