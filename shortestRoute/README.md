# Shortest Route

## Task

You stand on a one-dimensional track of length `$distance`. Positions are numbered
`0` through `distance - 1`. You begin at `0` and must reach `distance - 1`.

On each move you may advance anywhere from `1` up to `$strideLength` positions
forward. Certain positions listed in `$obstacles` are blocked: you must never
land on them. You may jump *over* a blocked cell when a longer stride lands
beyond it.

Find the **fewest strides** that take you from the start to the finish. Solve it
with **Breadth-First Search (BFS)**. If the finish is unreachable, return `-1`.

## Rules

- Landing positions must stay in `[0, distance - 1]`.
- You cannot land on any index present in `$obstacles`.
- Position `0` is always a valid starting point, even if it appears in
  `$obstacles` (obstacles only forbid landing when you stride onto a cell).
- Stride length on each move is an integer in `1 … strideLength` (inclusive).
- If `$distance <= 1`, you are already at the finish: return `0`.
- If `$strideLength < 1` and the finish is not the start, return `-1`.
- Expected time complexity: **O(distance × strideLength)**.

## Input

- `$distance` — number of positions on the track (finish is `distance - 1`).
- `$strideLength` — maximum steps allowed in one stride.
- `$obstacles` — list of blocked position indices.

## Output

- Minimum number of strides to reach `distance - 1`, or `-1` when no path exists.

## Example

```text
distance = 11, strideLength = 3, obstacles = [4, 7, 9]
```

One optimal path:

```text
0 → 3 → 6 → 8 → 10
```

That uses **4** strides and never lands on `4`, `7`, or `9`.

```text
Input:  distance = 11, strideLength = 3, obstacles = [4, 7, 9]
Output: 4
```

```text
Input:  distance = 5, strideLength = 2, obstacles = [1, 2, 3]
Output: -1
```

## Function signature

```php
class Solution
{
    /**
     * @param list<int> $obstacles
     */
    public static function shortestRoute(
        int $distance,
        int $strideLength,
        array $obstacles
    ): int
}
```

Implement this in `php/shortest_route.php`.

Call the solution with
`Solution::shortestRoute($distance, $strideLength, $obstacles)`.

## Run tests

From the repository root, install dependencies once:

```bash
composer install
```

From this task directory (`shortestRoute`), run PHPUnit:

```bash
../vendor/bin/phpunit -c ../phpunit.xml php/ShortestRouteTest.php
```

<p><strong>Run test:</strong> <code>../vendor/bin/phpunit -c ../phpunit.xml php/ShortestRouteTest.php</code></p>
