# Merge Sorted Arrays

## Task

You are given two integer arrays, each already sorted in **non-decreasing** order.

Combine them into a **new** array that is also sorted non-decreasing and holds **every** element from both inputs.

## Rules

- Both arrays are sorted ascending.
- Do **not** use built-in PHP sort functions (`sort`, `usort`, `array_merge` followed by sort, etc.).
- Use a two-pointer merge (as in the merge step of merge sort).
- Expected time complexity: **O(n + m)**, where `n` and `m` are the array lengths.
- Expected extra space: **O(n + m)** for the result.

## Input

- `$arr1` — sorted array of integers (may be empty).
- `$arr2` — sorted array of integers (may be empty).

## Output

- A new sorted array with all elements from `$arr1` and `$arr2`.

## Examples

| arr1 | arr2 | Output |
|------|------|--------|
| `[-1000, -900, -800, -700]` | `[-200, -100]` | `[-1000, -900, -800, -700, -200, -100]` |
| `[100, 200, 300]` | `[400, 500, 600, 700]` | `[100, 200, 300, 400, 500, 600, 700]` |
| `[-1000]` | `[1000]` | `[-1000, 1000]` |
| `[1]` | `[1, 2, 3, 4, 5]` | `[1, 1, 2, 3, 4, 5]` |

```text
Input:  arr1 = [-100, 0, 50, 100], arr2 = [-75, -50, -25]
Output: [-100, -75, -50, -25, 0, 50, 100]
```

```text
Input:  arr1 = [1, 2, 3], arr2 = [1, 2, 3]
Output: [1, 1, 2, 2, 3, 3]
```

When values are equal, take from `$arr1` first (either order is valid for equal elements; the solution uses `<=` from `$arr1`).

## Function signature

```php
class Solution {
    public static function solution(...)
}
```

Implement in `php/merge_sorted_arrays.php`.

Call the solution with `Solution::solution(...)`.

## Run tests

From the repository root, install dependencies once:

```bash
composer install
```

From this task directory (`mergeSortedArrays`), run PHPUnit:

```bash
../vendor/bin/phpunit -c ../phpunit.xml php/MergeSortedArraysTest.php
```

<p><strong>Run test:</strong> <code>../vendor/bin/phpunit -c ../phpunit.xml php/MergeSortedArraysTest.php</code></p>
