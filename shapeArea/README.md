# Shape Area

## Task

Define a **1-interesting polygon** as a square with side length 1 (area 1). For `n > 1`, an **n-interesting polygon** is built by starting from the `(n - 1)`-interesting polygon and attaching **1-interesting polygons** along its entire outer edge, side by side (like a “ring” around the previous shape).

Given `n`, return the **area** of the n-interesting polygon.

The closed form is: `n² + (n - 1)²`.

## Input

- `n` — a positive integer (the “interesting level” of the polygon).

## Output

A positive integer: the area of the n-interesting polygon.

## Examples

| n | Output |
|---|--------|
| 1 | `1` |
| 2 | `5` |
| 3 | `13` |
| 4 | `25` |

```text
Input:  n = 1
Output: 1
```

```text
Input:  n = 3
Output: 13
```

For `n = 3`: outer `3×3` square contributes 9 cells, inner `(3-1)×(3-1)` contributes 4, total `9 + 4 = 13`.

## Run tests

From the repository root (`codesignal-master`), install dependencies once:

```bash
composer install
```

From this task directory (`shapeArea`), run PHPUnit:

```bash
../vendor/bin/phpunit -c ../phpunit.xml ./ShapeAreaTest.php
```

<p><strong>Run test:</strong> <code>../vendor/bin/phpunit -c ../phpunit.xml ./ShapeAreaTest.php</code></p>
