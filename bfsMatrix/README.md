# BFS Matrix

## Task

You are given a grid of `n` rows by `m` columns filled with `0` and `1`. Treat
`1` as a walkable cell and `0` as a blocked cell.

Implement a **Breadth-First Search** that finds the shortest path from
`$start` to `$end`. Each move may go up, down, left, or right by one cell —
diagonal steps are not allowed.

Return the number of steps on that shortest path. If `$end` cannot be reached,
return `0`.

## Rules

- `$start` and `$end` are coordinate pairs `[row, column]` (0-based).
- `$start` is always walkable (`1`).
- You may only step onto cells whose value is `1`.
- Moves are 4-directional only.
- When `$start` equals `$end`, the path length is `0`.
- Expected time complexity: **O(n · m)**.

## Input

- `$mat` — 2D array of `0`/`1` cells.
- `$start` — `[row, col]` of the origin.
- `$end` — `[row, col]` of the destination.

## Output

- Length (step count) of the shortest path from `$start` to `$end`, or `0`
  when no path exists.

## Example

```text
mat = [
  [1, 1, 0, 1],
  [0, 1, 1, 1],
  [1, 0, 1, 0],
  [1, 1, 1, 1],
]
start = [0, 0]
end   = [3, 3]
```

One shortest route:

```text
(0,0) → (0,1) → (1,1) → (1,2) → (2,2) → (3,2) → (3,3)
```

```text
Input:  start = [0, 0], end = [3, 3]
Output: 6
```

```text
Input:  start = [0, 0], end = [0, 0]
Output: 0
```

```text
mat = [
  [1, 0, 1],
  [0, 0, 0],
  [1, 1, 1],
]
start = [0, 0]
end   = [2, 2]
```

```text
Input:  start = [0, 0], end = [2, 2]
Output: 0
```

## Function signature

```php
class Solution
{
    /**
     * @param list<list<int>> $mat
     * @param array{0: int, 1: int} $start
     * @param array{0: int, 1: int} $end
     */
    public static function bfsMatrix(array $mat, array $start, array $end): int
}
```

Implement this in `php/bfs_matrix.php`.

Call the solution with `Solution::bfsMatrix($mat, $start, $end)`.

## Run tests

From the repository root, install dependencies once:

```bash
composer install
```

From this task directory (`bfsMatrix`), run PHPUnit:

```bash
../vendor/bin/phpunit -c ../phpunit.xml php/BfsMatrixTest.php
```

<p><strong>Run test:</strong> <code>../vendor/bin/phpunit -c ../phpunit.xml php/BfsMatrixTest.php</code></p>
