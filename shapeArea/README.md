# Shape Area

## Task

A **1-interesting polygon** is a unit square (area 1). For `n > 1`, an **n-interesting polygon** is formed by taking the `(n - 1)`-interesting polygon and gluing **1-interesting polygons** along its full outer perimeter, edge to edge (like an expanding ring).

Given `n`, compute the **area** of the n-interesting polygon.

Closed form: `n² + (n - 1)²`.

## Input

- `n` — a positive integer (the polygon's "interesting level").

## Output

A positive integer: the area of the n-interesting polygon.

## Examples

| n | Output |
|---|--------|
| 5 | `41` |
| 6 | `61` |
| 10 | `181` |
| 8 | `113` |

```text
Input:  n = 5
Output: 41
```

```text
Input:  n = 10
Output: 181
```

For `n = 6`: outer `6×6` square contributes 36 cells, inner `5×5` contributes 25, total `36 + 25 = 61`.

## Run tests

From the repository root, install dependencies once:

```bash
composer install
```

From this task directory (`shapeArea`), run PHPUnit:

```bash
../vendor/bin/phpunit -c ../phpunit.xml php/ShapeAreaTest.php
```

<p><strong>Run test:</strong> <code>../vendor/bin/phpunit -c ../phpunit.xml php/ShapeAreaTest.php</code></p>
