# Sudoku

## Task

Determine whether a completed `9 × 9` Sudoku grid is **valid**.

In Sudoku, every row, every column, and every `3 × 3` sub-grid must contain the digits `1` through `9` exactly once. Given a filled grid, return `true` if it satisfies all of these rules, and `false` otherwise.

## Rules

- The grid is always `9 × 9`.
- Each cell contains a digit from `1` to `9`.
- Check all nine rows, nine columns, and nine `3 × 3` boxes.
- Duplicates in any row, column, or box make the solution invalid.

## Input

- `$grid` — `9 × 9` array of integers.

## Output

- `true` if the grid is a valid Sudoku solution, otherwise `false`.

## Examples

Valid grid:

```text
[[1, 3, 2, 5, 4, 6, 9, 8, 7],
 [4, 6, 5, 8, 7, 9, 3, 2, 1],
 [7, 9, 8, 2, 1, 3, 6, 5, 4],
 [9, 2, 1, 4, 3, 5, 8, 7, 6],
 [3, 5, 4, 7, 6, 8, 2, 1, 9],
 [6, 8, 7, 1, 9, 2, 5, 4, 3],
 [5, 7, 6, 9, 8, 1, 4, 3, 2],
 [2, 4, 3, 6, 5, 7, 1, 9, 8],
 [8, 1, 9, 3, 2, 4, 7, 6, 5]]
```

Output: `true`

Invalid grid (duplicate digits in the top-left `3 × 3` box):

```text
[[1, 3, 2, 5, 4, 6, 9, 2, 7],
 [4, 6, 5, 8, 7, 9, 3, 8, 1],
 [7, 9, 8, 2, 1, 3, 6, 5, 4],
 [9, 2, 1, 4, 3, 5, 8, 7, 6],
 [3, 5, 4, 7, 6, 8, 2, 1, 9],
 [6, 8, 7, 1, 9, 2, 5, 4, 3],
 [5, 7, 6, 9, 8, 1, 4, 3, 2],
 [2, 4, 3, 6, 5, 7, 1, 9, 8],
 [8, 1, 9, 3, 2, 4, 7, 6, 5]]
```

Output: `false`

## Function signature

```php
class Solution {
    public static function solution(array $grid): bool
}
```

Implement this function in `php/sudoku.php`.

Call the solution with `Solution::solution(...)`.

## Run tests

From the repository root, install dependencies once:

```bash
composer install
```

From this task directory (`sudoku`), run PHPUnit:

```bash
../vendor/bin/phpunit -c ../phpunit.xml php/SudokuTest.php
```

<p><strong>Run test:</strong> <code>../vendor/bin/phpunit -c ../phpunit.xml php/SudokuTest.php</code></p>
