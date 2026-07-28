# Shortest Distance

## Task

You are given an undirected road network as an adjacency map: each city ID maps to
the list of cities reachable by a single road.

Implement a function that finds the **shortest path length** (fewest roads) from
`$start` to `$destination` using **Breadth-First Search (BFS)**. If the
destination cannot be reached, return `null`.

Each road has the same length of `1`, so BFS yields the minimum hop count.

## Rules

- Use BFS, not DFS or Dijkstra.
- Cities are identified by unique strings.
- The graph may be undirected in practice (neighbors listed both ways); treat
  `$roads` as an adjacency list.
- If `$start === $destination`, return `0`.
- If `$destination` is unreachable, return `null`.
- Expected time complexity: **O(V + E)**, where `V` is the number of cities and
  `E` is the number of roads.

## Input

- `$roads` — associative array: city ID → list of neighboring city IDs.
- `$start` — starting city ID.
- `$destination` — target city ID.

## Output

- Minimum number of roads on a path from `$start` to `$destination`, or `null`
  if no path exists.

## Example

```text
roads = [
  'Berlin'  => ['Paris', 'Warsaw'],
  'Paris'   => ['Berlin', 'Madrid'],
  'Warsaw'  => ['Berlin', 'Kyiv'],
  'Madrid'  => ['Paris'],
  'Kyiv'    => ['Warsaw'],
  'Rome'    => [],
]
```

```text
Input:  start = "Berlin", destination = "Kyiv"
Output: 2
Path:   Berlin → Warsaw → Kyiv
```

```text
Input:  start = "Berlin", destination = "Rome"
Output: null
```

```text
Input:  start = "Paris", destination = "Paris"
Output: 0
```

## Function signature

```php
class Solution
{
    /**
     * @param array<string, list<string>> $roads
     */
    public static function solution(array $roads, string $start, string $destination): ?int
}
```

Implement this in `php/shortest_distance.php`.

Call the solution with `Solution::solution($roads, $start, $destination)`.

## Run tests

From the repository root, install dependencies once:

```bash
composer install
```

From this task directory (`shortestDistance`), run PHPUnit:

```bash
../vendor/bin/phpunit -c ../phpunit.xml php/ShortestDistanceTest.php
```

<p><strong>Run test:</strong> <code>../vendor/bin/phpunit -c ../phpunit.xml php/ShortestDistanceTest.php</code></p>
