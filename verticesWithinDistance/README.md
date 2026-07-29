# Vertices Within Distance

## Task

Given an undirected graph as an adjacency list and a source vertex `$start`,
return every vertex whose **shortest-path hop count** from `$start` is at most
`$distance`.

Distance means the fewest edges on any path between two vertices. Vertices that
lie in another connected component are never included. The returned vertex IDs
must be sorted in ascending order.

Use **Breadth-First Search (BFS)** so the hop counts are exact.

## Rules

- The graph is undirected; neighbors appear in both directions when an edge exists.
- Vertex labels are unique positive integers (typically starting at `1`).
- The graph may be disconnected.
- `$start` is always included when `$distance >= 0` (hop count `0`).
- When `$distance` is `0`, the result is only `[$start]`.
- When `$distance < 0`, the result is an empty list.
- Expected time complexity: **O(n + m)**, where `n` is the number of vertices
  and `m` is the number of edges.

## Input

- `$graph` — associative array: vertex ID → list of adjacent vertex IDs.
- `$start` — vertex to measure distances from.
- `$distance` — maximum allowed hop count (inclusive).

## Output

- Sorted list of vertex IDs reachable from `$start` in at most `$distance` hops.

## Example

```text
graph = [
  1 => [2, 3],
  2 => [1, 4, 5],
  3 => [1],
  4 => [2],
  5 => [2, 6],
  6 => [5],
]
```

```text
Input:  start = 1, distance = 2
Output: [1, 2, 3, 4, 5]
```

Vertex `6` is three hops from `1`, so it is excluded.

```text
Input:  start = 1, distance = 0
Output: [1]
```

```text
Input:  start = 4, distance = 1
Output: [2, 4]
```

## Function signature

```php
class Solution
{
    /**
     * @param array<int, list<int>> $graph
     * @return list<int>
     */
    public static function findVerticesWithinDistance(
        array $graph,
        int $start,
        int $distance
    ): array
}
```

Implement this in `php/vertices_within_distance.php`.

Call the solution with
`Solution::findVerticesWithinDistance($graph, $start, $distance)`.

## Run tests

From the repository root, install dependencies once:

```bash
composer install
```

From this task directory (`verticesWithinDistance`), run PHPUnit:

```bash
../vendor/bin/phpunit -c ../phpunit.xml php/VerticesWithinDistanceTest.php
```

<p><strong>Run test:</strong> <code>../vendor/bin/phpunit -c ../phpunit.xml php/VerticesWithinDistanceTest.php</code></p>
