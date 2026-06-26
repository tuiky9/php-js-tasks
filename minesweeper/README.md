# Minesweeper

## Task

Build a **Minesweeper** number board from a mine layout.

You are given a rectangular grid where each cell is either a mine (`true`) or empty (`false`). Return a grid of the same size where every cell contains the count of mines in its **neighboring** cells (including diagonals). Cells that share a corner count as neighbors.

## Rules

- The output grid has the same dimensions as the input.
- Neighbors are the up to eight cells surrounding a cell (orthogonal and diagonal).
- Out-of-bounds neighbors are ignored.
- Mine cells also receive a neighbor count (they are not replaced with a special marker).

## Input

- `$matrix` — non-empty rectangular 2D array of booleans (`true` = mine, `false` = no mine).

## Output

- 2D array of integers with neighbor mine counts.

## Examples

For

```text
[[true, false, false],
 [false, true, false],
 [false, false, false]]
```

the output is

```text
[[1, 2, 1],
 [2, 1, 1],
 [1, 1, 1]]
```

```text
Input:  matrix = [[true, true], [true, true]]
Output: [[3, 3], [3, 3]]
```

## Function signature

```php
class Solution {
    public static function solution(array $matrix): array
}
```

Implement this function in `php/minesweeper.php`.

Call the solution with `Solution::solution(...)`.

## Run tests

From the repository root, install dependencies once:

```bash
composer install
```

From this task directory (`minesweeper`), run PHPUnit:

```bash
../vendor/bin/phpunit -c ../phpunit.xml php/MinesweeperTest.php
```

<p><strong>Run test:</strong> <code>../vendor/bin/phpunit -c ../phpunit.xml php/MinesweeperTest.php</code></p>
