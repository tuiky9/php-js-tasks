# Knight Moves

## Task

On an empty **8 × 8** chessboard, a knight stands on a given square and must
reach another. A knight always moves in an L-shape: two squares in one
orthogonal direction and then one square perpendicular (eight possible
targets from a central square, fewer near the edges).

Compute the **minimum number of knight moves** from `$start` to `$end` using
**Breadth-First Search (BFS)**.

## Rules

- Coordinates are 0-based: rows and columns run from `0` to `7`.
- `$start` and `$end` are pairs `[row, column]`.
- `$board` is an 8 × 8 grid representing the board (cells are unused for
  blocking on a standard empty board; dimensions come from `$board`).
- If `$start` equals `$end`, the answer is `0`.
- Expected time complexity: **O(1)** for a fixed 8 × 8 board (at most 64
  squares visited).

## Input

- `$board` — 8 × 8 array describing the chessboard.
- `$start` — `[row, col]` where the knight begins.
- `$end` — `[row, col]` the knight must reach.

## Output

- Fewest knight moves needed to go from `$start` to `$end`.

## Example

```text
start = [0, 0]
end   = [1, 2]
```

That destination is a single L-move away.

```text
Input:  start = [0, 0], end = [1, 2]
Output: 1
```

```text
Input:  start = [0, 0], end = [7, 7]
Output: 6
```

```text
Input:  start = [3, 3], end = [3, 3]
Output: 0
```

## Function signature

```php
class Solution
{
    /**
     * @param list<list<mixed>> $board
     * @param array{0: int, 1: int} $start
     * @param array{0: int, 1: int} $end
     */
    public static function knightMoves(array $board, array $start, array $end): int
}
```

Implement this in `php/knight_moves.php`.

Call the solution with `Solution::knightMoves($board, $start, $end)`.

## Run tests

From the repository root, install dependencies once:

```bash
composer install
```

From this task directory (`knightMoves`), run PHPUnit:

```bash
../vendor/bin/phpunit -c ../phpunit.xml php/KnightMovesTest.php
```

<p><strong>Run test:</strong> <code>../vendor/bin/phpunit -c ../phpunit.xml php/KnightMovesTest.php</code></p>
