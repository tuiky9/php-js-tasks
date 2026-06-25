# Insertion Sort

## Task

Sort an array of `n` integers into **ascending order** using the **Insertion Sort** algorithm.

Insertion Sort walks through the array from left to right. At each step, it takes the value at the current position and places it in the correct spot within the sorted prefix to its left, shifting larger elements one position to the right as needed.

## Rules

- Sort in **non-decreasing** order (smallest to largest).
- Use **Insertion Sort** — do not call built-in sort functions.
- The input array may contain duplicates, negative values, or a single element.
- An empty array should be returned unchanged.

## Input

- `$arr` — array of integers (possibly empty).

## Output

- A new array (or the same array sorted in place) with elements in ascending order.

## Examples

| Input | Output |
|-------|--------|
| `[5, 2, 4, 6, 1, 3]` | `[1, 2, 3, 4, 5, 6]` |
| `[4, 3, 2, 1]` | `[1, 2, 3, 4]` |
| `[2, 1]` | `[1, 2]` |
| `[-1000, 1000, 0]` | `[-1000, 0, 1000]` |
| `[]` | `[]` |

```text
Input:  arr = [5, 2, 4, 6, 1, 3]
Output: [1, 2, 3, 4, 5, 6]
```

```text
Input:  arr = [-50, -75, -25, -100]
Output: [-100, -75, -50, -25]
```

## Function signature

```php
class Solution {
    public static function solution(array $arr): array
}
```

Implement this function in `php/insertion_sort.php`.

Call the solution with `Solution::solution(...)`.

## Run tests

From the repository root, install dependencies once:

```bash
composer install
```

From this task directory (`insertionSort`), run PHPUnit:

```bash
../vendor/bin/phpunit -c ../phpunit.xml php/InsertionSortTest.php
```

<p><strong>Run test:</strong> <code>../vendor/bin/phpunit -c ../phpunit.xml php/InsertionSortTest.php</code></p>
